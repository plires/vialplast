import React from "react";
import "./styles.css";

export default function Header() {
  return (
    <header className="container-fluid">
      <div className="row">
        <div className="col-md-12">
          <img
            className="img-fluid"
            src={require("./../../img/logo-vialplast.png")}
            alt="logo vialplast"
          />
        </div>
      </div>
    </header>
  );
}
