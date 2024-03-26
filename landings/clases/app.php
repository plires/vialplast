<?php
// require_once( __DIR__ . '/../vendor/autoload.php' );
require_once( __DIR__ . '/../ventas.inc.php' );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

  class App 
  {

    public function validateForm($recaptcha, $require)
    {

      $errors = [];
      
      // Verificamos si hay errores en el formulario
      if ( !$recaptcha['success'] ){
        array_push($errors, 'Error Recaptcha, volvé a intentar el envio por favor.');
      }

      if ( $this->emptyField($require->name) ){
        array_push($errors, 'Ingresá tu nombre.');
      }
      
      if ( !$this->validEmail($require->email) ){
        array_push($errors, 'Ingresá un email válido.');
      }
      
      if ( $this->emptyField($require->phone) ){
        array_push($errors, 'Ingresá un teléfono de contacto.');
      }
      
      if ( $this->emptyField($require->comments) ){
        array_push($errors, 'Ingresá tus comentarios.');
      }
        
      return $errors;

    }

    public function validEmail($email){ 
      $mail_valid = 0; 
      //compruebo unas cosas primeras 
      if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
          if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 
              //miro si tiene caracter . 
              if (substr_count($email,".")>= 1){ 
                //obtengo la terminacion del dominio 
                $term_dom = substr(strrchr ($email, '.'),1); 
                //compruebo que la terminaci&oacute;n del dominio sea correcta 
                if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
                    //compruebo que lo de antes del dominio sea correcto 
                    $before_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
                    $caracter_ult = substr($before_dom,strlen($before_dom)-1,1); 
                    if ($caracter_ult != "@" && $caracter_ult != "."){ 
                      $mail_valid = 1; 
                    } 
                } 
              } 
          } 
      } 
      if ($mail_valid) 
          return 1; 
      else 
          return 0; 
    }

    public function emptyField($data){
    if ($data==''){
      return true;
    }else{
      return false;
    }
    }

    public function whatsappEnabled() 
    {

      return date('l') != 'Sunday' && date('l') != 'Saturday' && intval(date('H')) > 8 && intval(date('H')) < 19;

    }

    public function verifyRecaptcha($token)
    {

      $cu = curl_init();
      curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
      curl_setopt($cu, CURLOPT_POST, 1);
      curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $_ENV['REACT_APP_RECAPTCHA_SECRET_KEY'], 'response' => $token)));
      curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($cu);
      curl_close($cu);

      return $data = json_decode($response, true);

    } 

    public function registerEmailContactsInPerfit($api, $list, $post, $emailTo) 
    {

      $date = date("d-M-y H:i");

      $perfit = new PerfitSDK\Perfit( ['apiKey' => $api ] );
      $listId = $list;
      $interest = $post->rubro;

      $response = $perfit->post('/lists/' .$listId. '/contacts', 
        [
          'firstName' => $post->name, 
          'email' => $post->email,
          'customFields' => 
            [
              [
                'id' => 10, 
                'value' => $post->medium
              ],
              [
                'id' => 12, 
                'value' => $post->phone
              ],
              [
                'id' => 16, 
                'value' => $emailTo[0]
              ],
              [
                'id' => 14, 
                'value' => $post->origin . ' - ' . $date
              ],
              [
                'id' => 17, 
                'value' => $_ENV['REACT_APP_PERFIT_ACCOUNT']
              ]
            ],
          'interests' => 
            [
              [
                'id' => $post->interest_number, 
                'value' => $post->rubro
              ]
            ]
        ]          
      );

      return $response;
        
    }

    public function setEmailRecipients($objectPhpMailer, $recipient, $post, $destinationSales) 
    {

      switch ($recipient) {
      
        case 'Cliente':
          //ENVIOS
          $objectPhpMailer->setFrom($post->email, $post->name);
          $objectPhpMailer->addAddress($destinationSales[0], $destinationSales[1] . ' - Vialplast'); //Add a recipient
          $objectPhpMailer->addReplyTo($post->email, $post->name);
          
          if (EMAIL_BCC_MARTIN != '') {
            $objectPhpMailer->addAddress(EMAIL_BCC_MARTIN, NAME_BCC_MARTIN); //Agregar copia oculta
          }

          break;
        
        case 'Usuario':
          //ENVIOS
          $objectPhpMailer->setFrom($destinationSales[0], $destinationSales[1] . ' - Vialplast');
          $objectPhpMailer->addAddress($post->email, $post->name); //Add a recipient
          $objectPhpMailer->addReplyTo($destinationSales[0], $destinationSales[1] . ' - Vialplast');
          break;

      }

      if ($objectPhpMailer->From === '' && $objectPhpMailer->Sender === '' ) {
        $objectPhpMailer = false;
      } 

      return $objectPhpMailer;

    }

    public function setTemplateAndEmailSubject($template, $post, $destinationSales) 
    {

      $email = false;

      switch ($template) {

        case 'Contacto Cliente':
          $email['template'] = $this->selectEmailTemplate($post, 'to_client', $destinationSales);
          $email['subject'] = 'Nueva consulta desde ' . $post->origin;
          break;
        
        case 'Contacto Usuario':
          $email['template'] = $this->selectEmailTemplate($post, 'to_user', $destinationSales);
          $email['subject'] = $_ENV['REACT_APP_EMAIL_SUBJECT'];
          break;
        
      }

      if (isset($email) === false) {
        $email = false;
      } 
      
      return $email;

    }

    public function setServerValuesToSendEmails($objectPhpMailer) 
    {

      // $objectPhpMailer->SMTPDebug  = 3;                    
      $objectPhpMailer->Host       = $_ENV['REACT_APP_SMTP'];                     
      $objectPhpMailer->SMTPAuth   = true;                                   
      $objectPhpMailer->Username   = $_ENV['REACT_APP_USERNAME'];                    
      $objectPhpMailer->Password   = $_ENV['REACT_APP_PASSWORD'];                              
      $objectPhpMailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
      $objectPhpMailer->CharSet    = $_ENV['REACT_APP_EMAIL_CHARSET'];
      $objectPhpMailer->Port       = $_ENV['REACT_APP_EMAIL_PORT'];
      
      if (
        $objectPhpMailer->Host === '' ||
        $objectPhpMailer->SMTPAuth === '' ||
        $objectPhpMailer->Username === '' ||
        $objectPhpMailer->SMTPSecure === '' ||
        $objectPhpMailer->CharSet === '' ||
        $objectPhpMailer->Port === ''
      ) {
        $objectPhpMailer = false;
      }
      
      return $objectPhpMailer;

    }

    public function sendEmail($destinatario, $template, $post, $destinationSales) 
    {

      $send = false;

      $objectPhpMailer = new PHPMailer();
      
      // Setear destinatarios
      $mail = $this->setEmailRecipients($objectPhpMailer, $destinatario, $post, $destinationSales);

      // Setear Template y asunto de los mails
      $email_content = $this->setTemplateAndEmailSubject($template, $post, $destinationSales);

      if ($_ENV['REACT_APP_ENVIRONMENT'] === 'local') {
        $mail->isSendmail();
      } else {
        $mail->isSMTP();
      }

      //SERVER SETTINGS
      $mail = $this->setServerValuesToSendEmails($objectPhpMailer);  

      //CONTENIDO
      if ($email_content !== false) {
        $mail->isHTML(true);
        $mail->Subject = $email_content['subject'];
        $mail->Body    = $email_content['template'];
        $send = $mail->send();
      } 
      
      return $send;

    }

    function selectEmailTemplate($post, $to, $destinationSales) 
    {

      //configuro las variables a remplazar en el template
      $vars = array(
        '{instagram}',
        '{name_client}',
        '{sector_client}',
        '{email_sales_client}',
        '{name_sales_client}',
        '{whatsapp_href_sales_client}',
        '{whatsapp_sales_client}',
        '{origin}',
        '{name_user}',
        '{email_user}',
        '{phone_user}',
        '{comments_user}',
        '{date}',
        '{path}',
        '{base}',
      );

      $values = array( 
        $_ENV['REACT_APP_IG_CLIENT'],
        $_ENV['REACT_APP_NAME_CLIENT'],
        $_ENV['REACT_APP_SECTOR_CLIENT'],
        $destinationSales[0],
        $destinationSales[1],
        $destinationSales[2],
        $destinationSales[3],
        $post->origin,
        $post->name,
        $post->email,
        $post->phone,
        $post->comments,
        date('d-m-Y'),
        $post->path,
        $_ENV['REACT_APP_ROOT']
      );

      if ( $_ENV['REACT_APP_ENVIRONMENT'] === 'local' ) {
        $arrContextOptions=array(
          "ssl"=>array(
              "verify_peer"=>false,
              "verify_peer_name"=>false,
          ),
        ); 
      } else {
        $arrContextOptions=array(); 
      }

      switch ($to) {

        case 'to_client':
          $template = file_get_contents( $_ENV['REACT_APP_ROOT'] . 'includes/emails/contacts/contacts-to-client.php', false, stream_context_create($arrContextOptions));
          break;

        case 'to_user':
          $template = file_get_contents( $_ENV['REACT_APP_ROOT'] . 'includes/emails/contacts/contacts-to-user.php', false, stream_context_create($arrContextOptions));
          break;
        
        default:
          $template = file_get_contents( $_ENV['REACT_APP_ROOT'] . 'includes/emails/contacts/contacts-to-client.php', false, stream_context_create($arrContextOptions));
          break;

      }

      //Remplazamos las variables por las marcas en los templates
      $template_final = str_replace($vars, $values, $template);

      return $template_final;

    }

  }

?>