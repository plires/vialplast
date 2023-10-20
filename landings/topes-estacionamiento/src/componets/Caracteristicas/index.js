import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faCircleCheck } from "@fortawesome/free-solid-svg-icons";

import "./styles.css";
export default function Caracteristicas() {
  return (
    <div className="container caracteristicas">
      <div className="row iconos">
        <div data-aos="fade-up" className="col-md-12">
          <h2>Características Principales</h2>
        </div>

        <div className="col-md-4">
          <div data-aos="fade-up" className="content">
            <img
              className="img-fluid"
              src={require("./../../img/bajo-costo.png")}
              alt="topes de estacionamiento bajo costo"
            />
            <h4>
              Bajo <br />
              costo
            </h4>
          </div>
        </div>

        <div className="col-md-4">
          <div data-aos="fade-up" className="content">
            <img
              className="img-fluid"
              src={require("./../../img/resistentes-uv.png")}
              alt="topes de estacionamiento resistentes UV"
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
              src={require("./../../img/alta-resistencia.png")}
              alt="topes de estacionamiento de alta resistencia al transito"
            />
            <h4>
              Alta resistencia <br />
              al tránsito
            </h4>
          </div>
        </div>
      </div>

      <div className="row cuadros">
        <div className="col-md-4">
          <div data-aos="fade-up" className="content">
            <FontAwesomeIcon icon={faCircleCheck} />
            <h3>Shoppings.</h3>
          </div>
        </div>

        <div className="col-md-4">
          <div data-aos="fade-up" className="content">
            <FontAwesomeIcon icon={faCircleCheck} />
            <h3>Cocheras.</h3>
          </div>
        </div>

        <div className="col-md-4">
          <div data-aos="fade-up" className="content last">
            <FontAwesomeIcon icon={faCircleCheck} />
            <h3>Estaciones de Servicio.</h3>
          </div>
        </div>
      </div>
    </div>
  );
}
