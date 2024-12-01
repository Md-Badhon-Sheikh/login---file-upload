<?php
 session_start();

 if(!isset($_SESSION['mySession'])){
     header('location:login.php');
 }


    include_once "nav.php";
    include_once "class.php";
    // include_once "registration.php";
    

        Student::display();
?>