import React from "react";
import "./styles.css";

export default function Conos() {
  return (
    <section className="container-fluid productos conos">
      {/* Titulos Viales */}
      <div className="container titulos">
        <div className="row">
          <div data-aos="fade-up" className="col-md-8 offset-md-2">
            <h2>Conos Viales</h2>
            <p>
              Los conos viales son indispensables en obras viales de reparación
              y desviaciones en situaciones donde los vehículos están
              restringidos al paso, evitando accidentes.
            </p>
            <h2>Modelos Disponibles</h2>
          </div>
        </div>
      </div>
      {/* Titulos Viales end */}

      {/* Modelos Conos Viales */}
      <div className="row modelos">
        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>CC-A70</h3>
              <p className="description">
                Altura: 70 cm. <br />
                Peso: 1.8 kgs. <br />
                Base: 35 x 35 cm. <br />
                Reflectivo Alta <br />
                intensidad: 10 cm.x2 u. <br />
                Material: PVC
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/cc-a70.png")}
              alt="cono vial cc-a70"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/cc-pv70.png")}
              alt="cono vial cc-pv70"
            />
            <div className="content">
              <h3>CC-PV70</h3>
              <p className="description">
                Altura: 70 cm. <br />
                Peso: 3.1 kgs. <br />
                Base: 36 x 36 cm. <br />
                Reflectivo Alta <br />
                intensidad: 10 cm.+10 cm. <br />
                Material: PVC
              </p>
            </div>
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_izq">
          <div className="content_all">
            <div className="content">
              <h3>CC-F02</h3>
              <p className="description">
                Altura: 110 cm. Peso: 9 kgs. <br />
                Base de goma: 45 x 45 cm. <br />
                Reflectivo Alta <br />
                intensidad: 10 cm.x2 u. <br />
                Material: PVC <br />2 Piezas cono + base
              </p>
            </div>
            <img
              className="img-fluid"
              src={require("./../../img/cc-pv90.png")}
              alt="cono vial cc-f02"
            />
          </div>
        </div>

        <div data-aos="fade-up" className="col-md-6 col_der">
          <div className="content_all">
            <img
              className="img-fluid"
              src={require("./../../img/cc-f02.png")}
              alt="cono vial cc-f02"
            />
            <div className="content">
              <h3>CC-PV90</h3>
              <p className="description">
                Altura: 90 cm. <br />
                Peso: 4.1 kgs. <br />
                Base: 36 x 36 cm. <br />
                Reflectivo Alta <br />
                intensidad: 10 cm.+10 cm. <br />
                Material: PVC
              </p>
            </div>
          </div>
        </div>
      </div>
      {/* Modelos Conos Viales end */}

      {/* Caracteristicas Conos Viales */}
      <div className="container caracteristicas">
        <div className="row iconos">
          <div data-aos="fade-up" className="col-md-12">
            <h2>Características Principales</h2>
          </div>

          <div className="col-md-4">
            <div data-aos="fade-up" className="content">
              <img
                className="img-fluid"
                src={require("./../../img/conos-resistentes.png")}
                alt="conos viales resistentes a impactos"
              />
              <h4>
                Resistentes <br />a impactos viales
              </h4>
            </div>
          </div>

          <div className="col-md-4">
            <div data-aos="fade-up" className="content">
              <img
                className="img-fluid"
                src={require("./../../img/conos-rayos-uv.png")}
                alt="conos viales resistentes a rayos UV"
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
                src={require("./../../img/conos-facil-almacenaje.png")}
                alt="conos viales resistentes a impactos"
              />
              <h4>
                Fácil de <br />
                almacenar
              </h4>
            </div>
          </div>
        </div>

        <div className="row cuadros">
          <div className="col-md-4">
            <div data-aos="fade-up" className="content">
              <h3>BASE DE GOMA</h3>
              <p>Resistente a vientos de hasta 70 kms. / hora.</p>
            </div>
          </div>

          <div className="col-md-4">
            <div data-aos="fade-up" className="content">
              <h3>MEMORIA MOLECULAR</h3>
              <p>Ante impactos, vuelve a su posición original.</p>
            </div>
          </div>

          <div className="col-md-4">
            <div data-aos="fade-up" className="content last">
              <h3>GRAN FLEXIBILIDAD</h3>
              <p>
                Su flexibilidad no causa daños ni a vehículos, ni a personas.
              </p>
            </div>
          </div>

          <div data-aos="fade-up" className="col-md-12 frase">
            <img
              className="img-fluid"
              src={require("./../../img/conos-reflectivos.png")}
              alt="cono vial reflectivos"
            />
            <p>
              Gracias a su superficie con reflectivos de alta intensidad,
              permiten <span>gran visibilidad en condiciones nocturnas.</span>
            </p>
          </div>
        </div>
      </div>
      {/* Caracteristicas Conos Viales end */}
    </section>
  );
}
