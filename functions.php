<?php

class Login
{
  public $username;
  public $password;
  public $user;
  public $pass;
  public $data;

  public function __construct()
  {
    $this->username = @htmlentities($_POST['username']);
    $this->password = @htmlentities($_POST['password']);
  }

  public function login()
  { 
    if ($this->verify()) {
    $_SESSION['username'] = $this->username;
    $_SESSION['password'] = $this->password;
    $_SESSION['is_auth'] = true;

    header("Location: index.php");
    die();
    } else {
      echo 'Invalid login credentials';
      header("refresh:1; url=login.php");
      die();
    }
  }

  public function logout()
  {
    session_start();
    session_unset();
    header("Location: login.php");
    die();
  }

  public function verify()
  {
    $d = file_get_contents("users.txt");
    $data = explode("\n", $d);

    foreach ($data as $row =>$data) {
      $row_user = explode('|', $data);
      $this->user = @($row_user[0]);
      $this->pass = @trim($row_user[1], "\r");

      if (strcmp($this->user, $this->username) === 0 && strcmp($this->pass, $this->password) === 0) {
        return true;
      }
    }
    return false;
  }
}

