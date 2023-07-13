<?php

namespace App\Controller;

use Exception;

abstract class AbstractController{

     public function render(string $view){

          ob_start();
          
          $page = "Views/" . $view. '.phtml';

          //teste de sécurité
          $page = str_replace("../", "protect", $page);
          $page = str_replace(";", "protect", $page);
          $page = str_replace("%", "protect", $page);

          if( !file_exists($page) ){
               throw new Exception("Cette page n'existe pas. En tout cas pas dans ce site");
          }

          include $page;

          $content = ob_get_clean();

          include 'Views/template.phtml';

     }
}