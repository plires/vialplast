<?php

////////////////////////
///Valores URI
////////////////////////
define('URI', $_SERVER['REQUEST_URI']);
define('BASE', (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' );
define('RRSS_FACEBOOK', 'https://www.facebook.com/');
define('RRSS_INSTAGRAM', 'https://www.instagram.com/');
define('RRSS_LINKEDIN', 'https://www.linkedin.com/company/');
define('WHATSAPP', '5491158094444');
define('ENVIRONMENT', 'local');

////////////////////////
///API KEY RECAPTCHA
////////////////////////
define('RECAPTCHA_KEY_SITE', '6Lf_c0IeAAAAAClrROhBS8G_kyr6Tdw3HT1dywdS');
define('RECAPTCHA_KEY_SECRET', '6Lf_c0IeAAAAAMipeFN4uv0zgZ37z-480slhnRzV');

////////////////////////
///Valores de DB Remota
////////////////////////
define('DSN_APP', 'mysql:host=localhost;dbname=lc_vialplast;charset=utf8;port:3306');
define('DB_USER_APP', 'homestead');
define('DB_PASS_APP', 'secret');

//////////////////////////////
///Valores de Envio de emails
//////////////////////////////
define('SMTP', '0.0.0.0'); 
define('USERNAME', 'testuser');
define('PASSWORD', 'testpwd'); 
define('EMAIL_CLIENT', 'info@vialplast.com.ar');
define('NAME_CLIENT', 'Vialplast');
define('TEL_CLIENT', '(+54) 11 4752 7297');
define('WAP_CLIENT', '11 5809-4444');
define('EMAIL_BCC', '');
define('EMAIL_PORT', 1025);
define('EMAIL_NAME', 'Vialplast');
define('EMAIL_SUBJECT', 'Gracias por tu contacto');
define('EMAIL_CHARSET', 'utf-8');
define('EMAIL_ENCODING', 'quoted printable');

//////////////////////////////
/// ID CATEGORIAS
//////////////////////////////
define('ID_CATEGORY_BARRIERES_GUARDRAIL', 51);
define('ID_CATEGORY_CONOS', 133);
define('ID_CATEGORY_DELINEADORES', 39);
define('ID_CATEGORY_DEMARCACION', 49);
define('ID_CATEGORY_ESQUINEROS', 131);
define('ID_CATEGORY_METROBUS', 41);
define('ID_CATEGORY_OTROS_PRODUCTOS', 203);
define('ID_CATEGORY_BAJADA_CORDON', 47);
define('ID_CATEGORY_REDUCTORES_VELOCIDAD', 31);
define('ID_CATEGORY_TOPES_ESTACIONAMIENTO', 45);
define('ID_CATEGORY_VALLAS', 43);

//////////////////////////////
///PERFIT
//////////////////////////////
// define('PERFIT_LIST', 1);
// define('PERFIT_ACCOUNT', 'xxxxxxxx');
// define('PERFIT_APY_KEY', 'xxxxxxxx-yfa7Uv8kEyCYbCG3IWKLA6EHbk7eQNtA');

?>