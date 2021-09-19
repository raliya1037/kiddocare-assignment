<?php
/*
* This file is to process the logout and remove authentication session.
*
*/
logout();

function logout()
  {
    session_start();
    session_unset();
    header("Location: login.php");
    die();
  }