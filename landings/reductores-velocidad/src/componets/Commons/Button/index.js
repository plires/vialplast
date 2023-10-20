import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faAngleRight } from "@fortawesome/free-solid-svg-icons";
import "./styles.css";

export default function Button() {
  return (
    <a
      href="#formulario"
      data-aos="fade-up"
      type="button"
      className="btn btn-outline-primary btn_to_form">
      Consultar
      <FontAwesomeIcon className="transition" icon={faAngleRight} />
    </a>
  );
}
