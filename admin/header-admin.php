<?php 
session_start();
if(!isset($_SESSION['autenticacion']) && $_SESSION['autenticacion']!=='SI'
){

header('location:../../index.php');

}