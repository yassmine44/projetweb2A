<?php
session_start();
include_once '../model/client.php';
include_once '../controller/clientC.php';
$message="";

$clientC = new clientC();
if (isset($_POST["email"])&&
isset($_POST["email"]))
{ 
    if (!empty($_POST["email"])&&
    !empty($_POST["password"])
       )
       { 
           $message=$clientC->connexionUser($_POST["email"],$_POST["password"]);
          // $_SESSION['email']=$_POST["email"];
          
           echo $message;
           if ($message!='pseudo ou le mot de passe est incorrect')
           {
               header('Location:FrontLayout.php');
           }
               else
                 {
               $message='pseudo ou le mot de passe est incorrect';
               echo $message;
               
               
                 }


       }
       else
      { 
        $message="Missing information";
       echo $message;}
}
?>