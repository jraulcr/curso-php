<html>
    <head>
    <title></title>
    </head>
    <body>
    <?php
    class Menu {
      private $enlaces=array();
      private $titulos=array();
     
      //Función que guarda el enlace y el títutulo
      //dentro cada array.
      public function cargarOpcion($en,$tit)
      {
        $this->enlaces[]=$en;
        $this->titulos[]=$tit;
      }
     
      //Método que muestra el menú horizontal
      public function mostrarHorizontal()
      {
        for($f=0;$f<count($this->enlaces);$f++)
        {
          echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
          echo "-";
        }
      }
     
      //Función que muestra el menú vertical
      public function mostrarVertical()
      {
        for($f=0;$f<count($this->enlaces);$f++)
        {
          echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
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
    $menu1->mostrarVertical();
    echo "<hr>";
    $menu1->mostrarHorizontal();
    ?>
    </body>
    </html>