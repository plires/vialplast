import React from "react";
import "./styles.css";
export default function Pasacable() {
  return (
    <section data-aos="fade-up" className="container-fluid pasacable">
        <div className="row">
        <div className="col-md-8 offset-md-2">
          <div className="col-md-12 content_pasacable">
            <img
              className="img-fluid"
              src={require("./../../img/espacio-pasacable.png")}
              alt="reductores de velocidad vial icono espacio pasacable"
            />
            <p>
              Su formato interno permite la <span> conducción de cables de electricidad, gas y mangueras de agua.
              </span>
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}
