<html>
    <head>
    <title></title>
    </head>
    <body>
        
    <?php
    
    class Menu {
      //Declaración de las dos variables del tipo array  
      private $enlaces = array();
      private $titulos = array();
     
      //Función que guarda el enlace y el títutulo
      //dentro cada array.
      public function cargarOpcion($enlaces, $titulos) {
        $this->enlaces[]=$enlaces;
        $this->titulos[]=$titulos;
      }
     
      //Método que muestra el menú horizontal
      public function mostrarHorizontal() {
        for($i=0; $i<count($this->enlaces); $i++) {
          echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
          echo " - ";
        }
      }
     
      //Función que muestra el menú vertical
      public function mostrarVertical() {
        for($i=0; $i<count($this->enlaces); $i++) {
          echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
          echo "<br>";
        }
      }
    }
     
    //instanciamos menu1
    $menu1=new Menu();
    
    //guardamos cada enlace mediante el método
    //cargarOpcion
    $menu1->cargarOpcion('http://entreunosyceros.hol.es','entreunosyceros');
    $menu1->cargarOpcion('http://about.me/sapoclay','About SapoClay');
    $menu1->cargarOpcion('http://sapobuskedas.hol.es','SapoBuskedas');
     
    //Mostramos los menús
    $menu1->mostrarHorizontal();
    echo "<hr>";
    $menu1->mostrarVertical();
    ?>
    </body>
    </html>