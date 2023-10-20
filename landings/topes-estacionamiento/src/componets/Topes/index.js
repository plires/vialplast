import React from "react";

import Imagenes from "./../Imagenes";
import Caracteristicas from "./../Caracteristicas";
import "./styles.css";

export default function Topes() {
  return (
    <section className="container-fluid productos">
      {/* Titulos Viales */}
      <div className="container titulos">
        <div className="row">
          <div data-aos="fade-up" className="col-md-8 offset-md-2">
            <p>
              Fabricados con PVC flexible de alta resistencia, proporcionando
              una gran resistencia a las condiciones climáticas y al uso diario
              del tránsito.
            </p>
          </div>
        </div>
      </div>
      {/* Titulos Viales end */}

      <Imagenes />

      {/* Modelos Topes Estacionamiento */}
      <div className="row modelos">
        <h2 className="text-center">Modelos Disponibles</h2>
        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>3206</h3>
              <p className="description">
                Ancho: 114 mm. <br />
                Alto: 90 mm. <br />
                Largo estándar: 50 cm. <br />
                Material: PVC flexible. <br />
                Colores: Amarillo; Negro;
                <br />
                Verde; azul.
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/3206.png")}
              alt="Tope de estacionamiento 3206"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/3226.png")}
              alt="Tope de estacionamiento 3226"
            />
            <div className="content">
              <h3>3226</h3>
              <p className="description">
                Ancho: 140 mm. <br />
                Alto: 110 mm. <br />
                Largo estándar: 50 cm. <br />
                Material: PVC flexible. <br />
                Colores: Amarillo; Negro; <br />
                Verde; Azul.
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>3234</h3>
              <p className="description">
                Ancho: 80 mm. <br />
                Alto: 72 mm. <br />
                Largo estándar: 50 cm. <br />
                Material: PVC flexible. <br />
                Colores: Amarillo; Negro; <br />
                verde; Azul.
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/3234.png")}
              alt="Tope de estacionamiento 3234"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/3235.png")}
              alt="Tope de estacionamiento 3235"
            />
            <div className="content">
              <h3>3235</h3>
              <p className="description">
                Ancho: 70 mm. <br />
                Alto: 63 mm. <br />
                Largo estándar: 50 cm. <br />
                Material: PVC flexible <br />
                Colores: Amarillo; Negro; <br />
                Verde; Azul.
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>TI-425</h3>
              <p className="description">
                Largo: 420 mm. <br />
                Alto: 85 mm. <br />
                Peso: 0,865 kg. <br />
                Base: 420 x 130 mm. <br />
                Material: Polipropileno. <br />
                Colores: Amarillo. <br />
                Reflectivo: 4.
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/ti-425.png")}
              alt="Tope de estacionamiento ti-425"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/tp-450.png")}
              alt="Tope de estacionamiento tp-450"
            />
            <div className="content">
              <h3>TP-450</h3>
              <p className="description">
                Largo: 450 mm. <br />
                Alto: 90 mm. <br />
                Peso: 1,2 kg. <br />
                Base: 450 x 135 mm. <br />
                Material: Polipropileno. <br />
                Colores: Amarillo. <br />
                Reflectivo: 6.
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>TIM-450</h3>
              <p className="description">
                Largo: 450 mm. <br />
                Alto: 90 mm. <br />
                Peso: 1,2 kg. <br />
                Base: 450 x 135 mm. <br />
                Material: Polipropileno. <br />
                Colores: Amarillo. <br />
                Reflectivo: 4.
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/tim-450.png")}
              alt="Tope de estacionamiento tim-450"
            />
          </div>
        </div>
      </div>
      {/* Modelos Topes Estacionamiento end */}
      <Caracteristicas />
    </section>
  );
}
