<?php
   session_start();

    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', 1);
            setcookie($name, '', 1, '/');
        }
    }
   
   if(session_destroy()) {
      header("location:../index.php");
   }
