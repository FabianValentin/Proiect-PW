<?php

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }	
	
  $dbhost='localhost';
  $username = 'root';
  $password='';
  $db='formula1database'; 
  //connect to the database
  $con = mysqli_connect("$dbhost","$username","","$db");	
  
