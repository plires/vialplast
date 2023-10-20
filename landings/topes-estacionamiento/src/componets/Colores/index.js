import React from "react";
import "./styles.css";
export default function Colores() {
  return (
    <section className="colores container colores">
      <div className="row">
        <div className="col-md-12">
          <h2>Colores disponibles</h2>
        </div>
      </div>

      <div className="row">
        <div className="col-md-8 offset-md-2">
          <div className="row">
            <div className="col-6 col-md-3 content">
              <img
                className="img-fluid"
                src={require("./../../img/tope-estacionamiento-color-negro.png")}
                alt="tope de estacionamiento color negro"
              />
            </div>
            <div className="col-6 col-md-3 content">
              <img
                className="img-fluid"
                src={require("./../../img/tope-estacionamiento-color-amarillo.png")}
                alt="tope de estacionamiento color amarillo"
              />
            </div>
            <div className="col-6 col-md-3 content">
              <img
                className="img-fluid"
                src={require("./../../img/tope-estacionamiento-color-azul.png")}
                alt="tope de estacionamiento color azul"
              />
            </div>
            <div className="col-6 col-md-3 content">
              <img
                className="img-fluid"
                src={require("./../../img/tope-estacionamiento-color-verde.png")}
                alt="tope de estacionamiento color verde"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
