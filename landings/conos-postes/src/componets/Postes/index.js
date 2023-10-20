import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faCircleCheck } from "@fortawesome/free-solid-svg-icons";

import "./styles.css";

export default function Postes() {
  return (
    <section className="container-fluid productos postes">
      {/* Titulos Postes Rebatibles */}
      <div data-aos="fade-up" className="container titulos">
        <div className="row">
          <div className="col-md-8 offset-md-2">
            <h2>Postes Rebatibles</h2>
            <p>
              Los delineadores rebatibles de poliuretano, ofrecen una solución
              con mínima inversión para organizar flujos de tránsito vehicular,
              mejoras en los tiempos y velocidades de tránsito, como también el
              cuidado de usuarios, tanto conductores como peatones.
            </p>
            <h2>Modelos Disponibles</h2>
          </div>
        </div>
      </div>
      {/* Titulos Postes Rebatibles end */}

      {/* Modelos Postes Rebatibles */}
      <div className="row modelos">
        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>CC-E02</h3>
              <p className="description">
                Altura: 750 mm <br />
                Peso: 1.30 kilos/pieza <br />
                Base: 200 x 200 mm <br />
                Material: Poliuretano <br />
                Reflectivo: 75 mm x 2 u. <br />
                Colores: Amarillo; Gris
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/cc-e02.png")}
              alt="Poste Rebatible cc-e02"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/dp-60.png")}
              alt="Poste Rebatible dp-60"
            />
            <div className="content">
              <h3>DP-60</h3>
              <p className="description">
                Altura: 600 Mm <br />
                Peso: 1.15 Kilos/pieza <br />
                Base: 200 X 200 Mm <br />
                Material: Poliuretano <br />
                Reflectivo: 30 Mm X 6 Unidades <br />
                Colores: Amarillo; Gris
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>DP-80</h3>
              <p className="description">
                Altura: 800 Mm <br />
                Peso: 1.35 Kilos/pieza <br />
                Base: 200 X 200 Mm <br />
                Material: Poliuretano <br />
                Reflectivo: 30 Mm X 6 Unidades <br />
                Colores: Amarillo; Gris
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/dp-80.png")}
              alt="Poste Rebatible dp-80"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/dm-80.png")}
              alt="Poste Rebatible dm-80"
            />
            <div className="content">
              <h3>DM-80</h3>
              <p className="description">
                Altura: 800 Mm <br />
                Peso: 1.35 Kilos/pieza <br />
                Base: 200 X 200 Mm <br />
                Material: Poliuretano <br />
                Reflectivo: 30 Mm X 4 Unidades <br />
                Colores: Amarillo; Gris
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>DS-65</h3>
              <p className="description">
                Altura: 650 Mm <br />
                Peso: 1.10 Kilos/pieza <br />
                Base: 200 X 200 Mm <br />
                Material: Poliuretano <br />
                Reflectivo: 2 Unidades <br />
                Colores: Amarillo
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/ds-65.png")}
              alt="Poste Rebatible ds-65"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/ds-80.png")}
              alt="Poste Rebatible ds-80"
            />
            <div className="content">
              <h3>DS-80</h3>
              <p className="description">
                Altura: 800 Mm <br />
                Peso: 1.25 Kilos/pieza <br />
                Base: 200 X 200 Mm <br />
                Material: Poliuretano <br />
                Reflectivo: 2 Unidades <br />
                Colores: Amarillo
              </p>
            </div>
          </div>
        </div>
      </div>
      {/* Modelos Postes Rebatibles end */}

      {/* Caracteristicas Postes Rebatibles */}
      <div className="container caracteristicas">
        <div className="row iconos">
          <div className="col-md-12">
            <h2 data-aos="fade-up">Características Principales</h2>
          </div>

          <div className="col-md-4">
            <div data-aos="fade-up" className="content">
              <img
                className="img-fluid"
                src={require("./../../img/poste-memoria.png")}
                alt="Postes Rebatibles resistentes a impactos"
              />
              <h4>
                Memoria ante <br />
                impactos
              </h4>
            </div>
          </div>

          <div className="col-md-4">
            <div data-aos="fade-up" className="content">
              <img
                className="img-fluid"
                src={require("./../../img/poste-resistente.png")}
                alt="Postes Rebatibles Resistentes a rayos UV"
              />
              <h4>
                Resistentes <br />a rayos UV
              </h4>
            </div>
          </div>

          <div className="col-md-4">
            <div data-aos="fade-up" className="content">
              <img
                className="img-fluid"
                src={require("./../../img/poste-estabilizado.png")}
                alt="Postes Rebatibles estavilizado con UV"
              />
              <h4>
                Estabilizado <br />
                con UV
              </h4>
            </div>
          </div>
        </div>

        <div className="row cuadros">
          <div className="col-md-4">
            <div data-aos="fade-up" className="content">
              <FontAwesomeIcon icon={faCircleCheck} />
              <h3>Canalizador de tránsito.</h3>
            </div>
          </div>

          <div className="col-md-4">
            <div data-aos="fade-up" className="content">
              <FontAwesomeIcon icon={faCircleCheck} />
              <h3>Restricción de sobrepaso.</h3>
            </div>
          </div>

          <div className="col-md-4">
            <div data-aos="fade-up" className="content last">
              <FontAwesomeIcon icon={faCircleCheck} />
              <h3>Demarcación de bicisendas.</h3>
            </div>
          </div>
        </div>
      </div>
      {/* Caracteristicas Postes Rebatibles end */}
    </section>
  );
}
