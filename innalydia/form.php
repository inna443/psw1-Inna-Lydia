<?php session_start() ?>
<?php 
   if(isset($_SESSION['login'])){
      if(isset($_POST['acao'])){

      }
      include('index.php');

      }else{
         include('home.php');
      }
   
   $email = $_GET['email'];
   $senha = $_GET['senha'];

   ?>