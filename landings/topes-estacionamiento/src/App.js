import Header from "./componets/Header";
import Formulario from "./componets/Formulario";
import Topes from "./componets/Topes";
import Colores from "./componets/Colores";
import Distribuidor from "./componets/Distribuidor";
import Footer from "./componets/Footer";
import { GoogleReCaptchaProvider } from "react-google-recaptcha-v3";
import Whatsapp from "./componets/Commons/Whatsapp.js";

function App() {
  return (
    <div className="App">
      <GoogleReCaptchaProvider
        reCaptchaKey={process.env.REACT_APP_RECAPTCHA_SITE_KEY}>
        <Whatsapp />
        <Header />
        <Formulario />
        <Topes />
        <Colores />
        <Distribuidor />
        <Footer />
      </GoogleReCaptchaProvider>
    </div>
  );
}

export default App;
