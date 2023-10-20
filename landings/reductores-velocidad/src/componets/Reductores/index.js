import React from "react";

import Caracteristicas from "../Caracteristicas";
import "./styles.css";

export default function Reductores() {
  return (
    <section className="container-fluid productos">
      {/* Titulos Viales */}
      <div className="container titulos">
        <div className="row">
          <div data-aos="fade-up" className="col-md-8 offset-md-2">
            <h2>Modelos Disponibles</h2>
          </div>
        </div>
      </div>
      {/* Titulos Viales end */}

      {/* Modelos Reductores de Velocidad */}
      <div className="row modelos">
        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>2353</h3>
              <p className="description">
                Ancho: 180 mm. <br />
                Alto: 55 mm. <br />
                Largo estándar: 6 metros. <br />
                Material: PVC flexible. <br />
                Colores: Amarillo; Negro.
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/2353.png")}
              alt="Reductores de Velocidad 2353"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/2353-e.png")}
              alt="Reductores de Velocidad 2353 E"
            />
            <div className="content">
              <h3>2353-E</h3>
              <p className="description">
                Ancho: 160 mm. <br />
                Alto: 49 mm. <br />
                Largo estándar: 6 metros. <br />
                Material: PVC flexible. <br />
                Colores: Amarillo; Negro.
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>3224</h3>
              <p className="description">
                Ancho: 300 mm. <br />
                Alto: 35 mm. <br />
                Largo estándar: 5 metros. <br />
                Material: PVC flexible. <br />
                Colores: Amarillo; Negro.
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/3224.png")}
              alt="Reductores de Velocidad 3224"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/2378.png")}
              alt="Reductores de Velocidad 2378"
            />
            <div className="content">
              <h3>2378</h3>
              <p className="description">
                Ancho: 120 mm. <br />
                Alto: 26 mm. <br />
                Largo estándar: 10 metros. <br />
                Material: PVC flexible <br />
                Colores: Amarillo; Negro.
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>2359</h3>
              <p className="description">
                Ancho: 155 mm. <br />
                Alto: 35 mm. <br />
                Largo estándar: 10 metros. <br />
                Material: PVC flexible. <br />
                Colores: Amarillo; Negro.
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/2359.png")}
              alt="Reductores de Velocidad 2359"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/2352.png")}
              alt="Reductores de Velocidad 2352"
            />
            <div className="content">
              <h3>2352</h3>
              <p className="description">
                Ancho: 75 mm. <br />
                Alto: 17 mm. <br />
                Largo estándar: 20 metros. <br />
                Material: PVC flexible <br />
                Colores: Amarillo; Negro.
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>RD-400</h3>
              <p className="description">
                Ancho: 400 mm. <br />
                Alto: 50 mm. <br />
                Largo estándar: 250 mm <br />
                Material: Polipropileno. <br />
                Colores: Amarillo; Negro. <br />
                Reflectivo: 2.
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/rd-400.png")}
              alt="Reductores de Velocidad rd400"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/tr-109.png")}
              alt="Reductores de Velocidad TR-109"
            />
            <div className="content">
              <h3>TR-109</h3>
              <p className="description">
                Medida estándar: 100x90x15 mm. <br />
                Material: PP copolimero. <br />
                Peso: 0,65 kg. <br />
                Reflectivo: 2 lentes <br />
                Colores: Carcasa amarilla reflectivos amarillos; <br />
                Carcasa blanca reflectivos rojos o amarillos. <br />
                Reflectivo: 2.
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>RD-200</h3>
              <p className="description">
                Medida estándar: 200 x 45 mm <br />
                Material: Polipropileno. <br />
                Reflectivo: 2. <br />
                Colores: Amarillo.
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/rd-200.png")}
              alt="Reductores de Velocidad rd200"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/rdm-250.png")}
              alt="Reductores de Velocidad RDM-250"
            />
            <div className="content">
              <h3>RDM-250</h3>
              <p className="description">
                Medida estándar: 200 x 42 mm <br />
                Material: Polipropileno. <br />
                Reflectivo: 2. <br />
                Colores: Amarillo.
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>RD-250</h3>
              <p className="description">
                Medida estándar: 255 x 185 x45 mm <br />
                Material: Polipropileno. <br />
                Reflectivo: 2. <br />
                Colores: Amarillo.
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/rd-250.png")}
              alt="Reductores de Velocidad rd250"
            />
          </div>
        </div>
      </div>
      {/* Modelos Reductores de Velocidad end */}
      <Caracteristicas />
    </section>
  );
}
