<?php

namespace App\Controller;

class HomeController extends AbstractController{

     public function index(){
          if( !isset($_GET['action']) ){
               
               $this->render("home");

          }
     }

}