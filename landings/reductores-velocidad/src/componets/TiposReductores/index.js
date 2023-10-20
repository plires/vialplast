import React from "react";
import "./styles.css";
export default function TiposReductores() {
  return (
    <section className="tipos_reductores container-fluid">
      <div className="row">
        <div className="col-lg-10 offset-lg-1">
          <div className="row">
            <div className="titles col-md-12">
              <p className="intro">
                Pueden soportar el paso de camiones y micros de gran envergadura
                <br />
                ya que su robusta estructura esta fabricada en PVC flexible de
                alta resistencia.
              </p>
            </div>
            <div className="col-sm-6 col-md-3 content">
              <img
                className="img-fluid"
                src={require("./../../img/reductor-velocidad-despertador.png")}
                alt="reductores de velocidad tipo despertador"
              />
              <h3>
                Reductor de alto <br />
                impacto
              </h3>
            </div>
            <div className="col-sm-6 col-md-3 content">
              <img
                className="img-fluid small"
                src={require("./../../img/reductor-velocidad-banda-frenado.png")}
                alt="reductores de velocidad banda de frenado"
              />
              <h3>
                Reductor de velocidad <br />
                tipo Banda de Frenado
              </h3>
            </div>
            <div className="col-sm-6 col-md-3 content">
              <img
                className="img-fluid"
                src={require("./../../img/reductor-velocidad-macizo.png")}
                alt="reductores de velocidad tipo macizo"
              />
              <h3>
                Reductor de velocidad <br />
                Macizo
              </h3>
            </div>
            <div className="col-sm-6 col-md-3 content">
              <img
                className="img-fluid"
                src={require("./../../img/reductor-velocidad-tacha.png")}
                alt="reductores de velocidad tipo tacha"
              />
              <h3>
                Reductor de velocidad <br />
                tipo Tacha
              </h3>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
