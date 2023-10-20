import { React, useState } from "react";
import { Formik, Field, Form, ErrorMessage } from "formik";
import { useGoogleReCaptcha } from "react-google-recaptcha-v3";
import ErrorInput from "./../Commons/ErrorInput";
import RotateLoader from "react-spinners/RotateLoader";
import axios from "axios";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

import "./styles.css";

const override = {
  display: "block",
  position: "absolute",
  left: "50%",
  top: "50vh",
  zIndex: "1",
  background: "#36d7b7",
};

export default function Formulario() {
  let [loading, setLoading] = useState(false);
  const { executeRecaptcha } = useGoogleReCaptcha();
  const [isSubscribed, setIsSubscribed] = useState(true);

  const validation = (values) => {
    const errors = {};
    if (!values.name) {
      errors.name = "Ingresá un nombre";
    }
    if (!values.email) {
      errors.email = "Ingresá tu email";
    } else if (!/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i.test(values.email)) {
      errors.email = "Ingresá un correo válido";
    }
    if (!values.phone) {
      errors.phone = "Ingresá un teléfono";
    }
    if (!values.comments) {
      errors.comments = "Enviá tu consulta";
    }
    return errors;
  };

  const handleChange = (event) => {
    setIsSubscribed(event.target.checked);
  };

  const sendForm = async (values, { setSubmitting, resetForm }) => {
    setLoading(true);

    const token = await executeRecaptcha("form_contacto");
    values["recaptchaToken"] = token;
    values["rubro"] = "Productos Viales"; // Nombre del rubro tal cual figura en Perfit
    values["origin"] = "Landing Reductores de Velocidad"; // Nombre del origin tal cual figura en Perfit
    values["path"] = "reductores-velocidad"; // nombre de carpeta contenedora
    values["interest_number"] = "12"; // numero del interes tal cual figura en Perfit
    const urlParams = new URLSearchParams(window.location.search);

    if (urlParams.has("utm_medium")) {
      values["medium"] = urlParams.get("utm_medium");
    } else {
      values["medium"] = "No Set";
    }

    try {
      const res = await axios.post(
        process.env.REACT_APP_ROOT + "/php/process.php",
        values
      );

      const myJson = JSON.stringify(res.data);
      const responseData = JSON.parse(myJson);

      if (responseData.success) {
        toast.success(responseData.msg_success);
        window.dataLayer.push({
          'formLocation': 'form_reductores',
          'event': 'send_form_reductores'
        });
        resetForm();
      } else {
        responseData.errors.map((error) => {
          return toast.error(error);
        });
      }
    } catch (error) {
      // Realizar acciones en caso de error
      toast.error(
        "Aparentemente en este momento no hay conexión con el servidor, por favor intente mas tarde."
      );
    }

    setSubmitting(false);
    setLoading(false);
  };

  const initFormDefault = {
    name: "",
    email: "",
    phone: "",
    comments: "",
    newsletter: true,
  };

  return (
    <section className="container-fluid formulario">
      <div className="container">
        <div className="row">
          <div className="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 content_form">
            <h1 data-aos="fade-up">
              Reductores <br />
              de Velocidad.
            </h1>

            <div className="sweet-loading">
              <RotateLoader
                loading={loading}
                color="#36d7b7"
                speedMultiplier={1}
                size={15}
                cssOverride={override}
                aria-label="Loading Spinner"
                data-testid="loader"
              />
            </div>

            <div>
              <ToastContainer />
            </div>

            <div className="row">
              <div id="formulario" className="col-md-12">
                <Formik
                  initialValues={initFormDefault}
                  validate={validation}
                  onSubmit={sendForm}>
                  {({ handleSubmit, isSubmitting }) => (
                    <Form
                      data-aos="fade-up"
                      id="form_contacto"
                      onSubmit={handleSubmit}>
                      <div className="content_barra">
                        <span className="bar_white"></span>
                      </div>
                      <h2>¡Presupuestá ahora!</h2>

                      <div className="form-group">
                        <Field
                          className="form-control"
                          type="text"
                          name="name"
                          placeholder="Nombre"
                        />
                        <ErrorMessage name="name" component={ErrorInput} />
                      </div>

                      <div className="form-group">
                        <Field
                          className="form-control"
                          type="email"
                          name="email"
                          placeholder="Email"
                        />
                        <ErrorMessage name="email" component={ErrorInput} />
                      </div>

                      <div className="form-group">
                        <Field
                          className="form-control"
                          type="number"
                          name="phone"
                          placeholder="Teléfono"
                        />
                        <ErrorMessage name="phone" component={ErrorInput} />
                      </div>

                      <div className="form-group">
                        <Field
                          className="form-control"
                          as="textarea"
                          name="comments"
                          rows="4"
                          placeholder="Que necesitás?"
                        />
                        <ErrorMessage name="comments" component={ErrorInput} />
                      </div>

                      <div className="form-group form-check">
                        <label>
                          <Field
                            onChange={handleChange}
                            checked={isSubscribed}
                            type="checkbox"
                            name="newsletter"
                          />
                          <label
                            className="form-check-label"
                            htmlFor="newsletter">
                            Suscribir newsletter
                          </label>
                        </label>
                      </div>

                      <button
                        id="send"
                        className="btn btn-primary transition"
                        type="submit"
                        disabled={isSubmitting}>
                        ENVIAR
                      </button>
                    </Form>
                  )}
                </Formik>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="faja">
        <div className="container">
          <div className="row">
            <div className="col-md-8 offset-md-2">
              <p>
                Los reductores de velocidad son ideales para aquellos lugares,
                donde se requiere la reducción de velocidad de vehículos de gran
                porte, como camiones, micros, etc.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
