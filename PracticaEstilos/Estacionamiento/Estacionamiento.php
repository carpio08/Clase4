<?php
	
	/**
	* 
	*/
	class Estacionamiento 
	{		
		function __construct()
		{
		}

		public static function Guardar ($patente){
			$miArchivo = fopen("Estacionados.txt", "a"); 
			//a: quiere decir que puedo leer y escribir el archivo y que mantiene los datos
			$fecha = date("'Y:m:d H:i:s'");
			$renglon = $patente."=>".$fecha."\n";
			fwrite($miArchivo, $renglon);
			fclose($miArchivo);
			//el primero es el punto al archiva, y el segundo parametro lo que va a agregar al archivo
			return "volvio de guardar";
		}

		public static function Leer(){
			$listadoAutos = array();
			$miArchivo = fopen("Estacionados.txt", "r"); 
			//r: para leer el contenido del archivo
			while (!(feof($miArchivo))) {				
				$renglon = fgets($miArchivo);
				$auto = explode("=>", $renglon);
				if($auto[0] != " "){
					$listadoAutos[] = $auto;					
				}				
			}		
			return $listadoAutos;	
		}

		public static function Sacar($patente){
			$autosEstacionados = Estacionamiento::Leer();
			foreach ($autosEstacionados as $auto) {
				if($auto[0] == $patente){
					$inicio = $auto[1];
					$ahora = date('Y:m:d H:i:s');
					$diferencia = strtotime($ahora) - strtotime($inicio);
					$importe = $diferencia * 10; //se guarda en ticket.txt
					echo "<br> IMPORTE: ".$importe."<br>";
				}
			}

		}

		
	}


?>