import Header from "./componets/Header";
import Formulario from "./componets/Formulario";
import Conos from "./componets/Conos";
import Postes from "./componets/Postes";
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
        <Conos />
        <Postes />
        <Distribuidor />
        <Footer />
      </GoogleReCaptchaProvider>
    </div>
  );
}

export default App;
