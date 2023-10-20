import React from "react";

import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faEnvelope } from "@fortawesome/free-solid-svg-icons";

import "./styles.css";

export default function Footer() {
  return (
    <footer className="container-fluid">
      <div className="container">
        <div className="row">
          <div className="col-md-12">
            <div className="content_mail">
              <FontAwesomeIcon icon={faEnvelope} />
              <a className="transition btn_to_form" href="#formulario">
                info@vialplast.com.ar
              </a>
            </div>

            <div className="copy">
              <p>Copyright &copy; 2023, All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
}
