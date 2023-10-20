import React from "react";
import "./styles.css";

export default function Imagenes() {
  return (
    <div className="container imagenes_prod">
      <div className="row">
        <div data-aos="fade-up" className="col-md-10 offset-md-1">
          <div className="row">
            <div className="col-md-6 content">
              <img
                className="img-fluid"
                src={require("./../../img/tope-estacionamiento-negro.jpg")}
                alt="tope estacionamiento negro"
              />
            </div>
            <div className="col-md-6 content">
              <img
                className="img-fluid"
                src={require("./../../img/tope-estacionamiento-verde.jpg")}
                alt="tope estacionamiento verde"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
