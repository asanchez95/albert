<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo"Bienvenido amigo";
        
       
       class hola{
           function __construct() {
               print "Hola\n";
           }
       }
       
       class Persona{
             public $altura;
             public $peso;
             
             
            public function __construct($altura, $peso){
                  $this->altura = $altura;
                  $this->peso = $peso;
            }
       }
       
       class fantasma{
             
          public $altura;
          public $a=11;
          public $b;
          public function __construct($suma, $a, $b) {
              
              $this->suma=$suma;
              $this->a =$a;
              $this->b =$b; 
              
          }
          
       }
        ?>
    </body>
</html>
