	<?php 
	class Coche{

		protected $ruedas;//propiedad o atributo;
		var $color;
		protected $motor;

                //function Coche(){  //es declarado obsoleto. (ver manual PHP)
		function __construct(){//Metodo constructor
			$this->ruedas=4;
			$this->color="";
			$this->motor="1600";
		}

		function getRuedas(){//Ver las propiedadel objeto
			return $this->ruedas;
		}

		function getMotor(){
			return $this->motor;
		}

		function arrancar(){//metodo o funcionalidad
			echo "Estoy arrancando <br/>";
		}

		function girar(){
			echo "Estoy girando <br/>";
		}

		function frenar(){
			echo "Estoy frenando <br/>";
		}	

		function setColor($color_coche, $nombre_coche){ //Modificar las propiedades de un objeto.
			$this->color=$color_coche;
			echo "El color del " . $nombre_coche . "  es: " . $this->color . "<br/>";
		}	
	}

	$renault = new Coche();//(Instancias de)estado inicial al objeto o instancia
	$mazda = new Coche();

	//$mazda->girar();
	//echo $mazda->ruedas;

	//$renault->establece_color("Rojo", "Renault");
	
	//$mazda->establece_color("Azul", "Mazda");
	

//***********************************

	class Camion extends Coche {

	/*	var $ruedas;//propiedad o atributo;
 		var $color;
		var $motor;
*/
//function Coche(){  es declarado obsoleto. (ver manual PHP)
		function __construct(){//Metodo constructor
			$this->ruedas=8;
			$this->color="";
			$this->motor="2600";
		}

/*			function setColor($color_camion, $nombre_camion){
			$this->color=$color_camion;
			echo "El color del " . $nombre_camion . "  es: " . $this->color . "<br/>";
		}	

		function arrancar(){
			parent::arrancar();
			echo "Camión arrancado. <br/>";
		}


	function arrancar(){//metodo o funcionalidad
			echo "Estoy arrancando";
		}

		function girar(){
			echo "Estoy girando";
		}

		function frenar(){
			echo "Estoy frenando";
		}	

		function establece_color($color_coche, $nombre_coche){
			$this->color=$color_coche;
			echo "El color del " . $nombre_coche . "  es: " . $this->color . "<br/>";
		}	
	}

	$renault = new Coche();//estado inicial al objeto o instancia
	$mazda = new Coche();

	//$mazda->girar();
	//echo $mazda->ruedas;

	$renault->establece_color("Rojo", "Renault");
	
	$mazda->establece_color("Azul", "Mazda");*/

}

?>