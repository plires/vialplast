import Header from "./componets/Header";
import Formulario from "./componets/Formulario";
import Reductores from "./componets/Reductores";
import TiposReductores from "./componets/TiposReductores";
import Pasacable from "./componets/Pasacable";
import Distribuidor from "./componets/Distribuidor";
import Footer from "./componets/Footer";
import { GoogleReCaptchaProvider } from "react-google-recaptcha-v3";

function App() {
  return (
    <div className="App">
      <GoogleReCaptchaProvider
        reCaptchaKey={process.env.REACT_APP_RECAPTCHA_SITE_KEY}>
        <Header />
        <Formulario />
        <TiposReductores />
        <Reductores />
        <Pasacable />
        <Distribuidor />
        <Footer />
      </GoogleReCaptchaProvider>
    </div>
  );
}

export default App;
