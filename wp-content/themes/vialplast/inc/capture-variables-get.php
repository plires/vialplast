<?php

  if (isset($_GET['nombre'])) {
    $name = $_GET['nombre'];
  } else {
    $name = '';
  }

  if (isset($_GET['email'])) {
    $email = $_GET['email'];
  } else {
    $email = '';
  }

  if (isset($_GET['phone'])) {
    $phone = $_GET['phone'];
  } else {
    $phone = '';
  }

  if (isset($_GET['comments'])) {
    $comments = $_GET['comments'];
  } else {
    $comments = '';
  }

  if (isset($_GET['errors'])) {
    $errors = $_GET['errors'];
  } else {
    $errors = [];
  }

  if (isset($_GET['msg_success'])) {
    $msg_success = $_GET['msg_success'];
  }

?>