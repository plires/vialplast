import React from "react";

import Button from "./../Commons/Button";
import "./styles.css";

export default function Distribuidor() {
  return (
    <section className="container-fluid distribuidor">
      <div className="container">
        <div className="row">
          <div className="col-md-12 content">
            <h3 data-aos="fade-up">
              ¿Querés ser distribuidor <br />
              de nuestros productos?
            </h3>
            <Button />
          </div>
        </div>
      </div>
    </section>
  );
}
