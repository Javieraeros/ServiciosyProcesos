<?php
class Texto{
  //Atributos
  private $texto;
  
  //Constructores
  public function __construct($texto){
    $this->texto=$texto;
  }
  
  //Getters
  public function getTexto(){
    return $this->texto;
  }
  
  //Setters
  public function setTexto($T){
    $this->texto=$t;
  }
  /* 
	 * Interfaz 
	 * Cabecera:publci function cuentaPalabras($palabra)
	 * Proceso:Cuenta el número de veces que se repite una palabra en concreto
	 * Precondiciones:$palabra debe ser una cadena
	 * Entrada:Una cadena para la palabra
	 * Salida:EL número de veces que se repite esa palabra
	 * Entrada/Salida:
	 * Postcondiciones:Se distinguirán minúsculas y mayúsculas.Ejemplo:
                  Si buscamos la palabra "es" en le texto:
                  Hay una pelota en esos matorrales
                  La tendremos DOS veces, por esos y por matorrales 
                  SOLUCIONAAAAAR
	 */
  public function cuentaPalabras($palabra){
    $arrayPalabra=str_split($palabra);
    $arrayTexto=str_split($this->texto);
    $tamanyoTexto=count($arrayTexto);
    $tamanyoPalabra=count($arrayPalabra);
    $total=0;
    $letrasIguales=0;  //contador para saber cuantas letras son iguales, al legar a $tamanyoPalabra, se sabrá que la palabra es la misma
    
    //bucle para recorrer el texto
    for($i=0;$i<$tamanyoTexto;$i++){
      for($j=0;$j<$tamanyoPalabra ;$j++){
        if($arrayTexto[$i]==$arrayPalabra[$j]){
          $letrasIguales++;
          $i++;
          if($letrasIguales==$tamanyoPalabra){
            $total++;
            $letrasIguales=0;
          }
        }else{
          $letrasIguales=0;
          $j=$tamanyoPalabra; //para que salga de la comprobación de la palabra
        }
      }
    }
    
    return $total;
  }
  
  /* 
	 * Interfaz 
	 * Cabecera:public function indicaPosicion($palabra)
	 * Proceso:Indica todas las posiciones en la que aparece una palabra
	 * Precondiciones:
	 * Entrada:Una cadena
	 * Salida:Un array con las posiciones de la palabra
	 * Entrada/Salida:Nada
	 * Postcondiciones:
	 */
  public function indicaPosicion($palabra){
    $arrayTexto=explode(" ",$this->texto);
    $tamanyoarray=count($arrayTexto);
    $resultado=[];
    $j=0;
    for($i=0;$i<$tamanyoarray;$i++){
      if($arrayTexto[$i]==$palabra){
        $resultado[$j]=$i+1;    //Pongo +1 para que la primera palabra sea la 1, y no la 0
        $j++;
      }
    }
   return $resultado; 
  }
	
	 /* 
	 * Interfaz 
	 * Cabecera:public function sustituyePalabras($palabra1,$palabra2)
	 * Proceso:Sustituye todas las palabras "$palabra1" por "$palabra2" y viceversa
	 * Precondiciones:
	 * Entrada:Dos cadenas
	 * Salida:El texto cambiado
	 * Entrada/Salida:Nada
	 * Postcondiciones:
	 */
	public function sustituyePalabras($palabra1,$palabra2){
		$arrayTexto=explode(" ",$this->texto);
		$tamanyoarray=count($arrayTexto);
		
		//guardamos las posiciones de ambas palabras
		$posicionespalabra1=$this->indicaPosicion($palabra1);
		$posicionespalabra2=$this->indicaPosicion($palabra2);
		
		
		//guardamos el tamaño de los arrays para recorrerlos
		$tamanyoarrayPalabra1=count($posicionespalabra1);
		$tamanyoarrayPalabra2=count($posicionespalabra2);
		
		//En las posiciones en las que nos indique el array de palabra 1, cambiamos en el texto las palabras
		//del array 2
		for($i=0;$i<$tamanyoarrayPalabra1;$i++){
			$arrayTexto[$posicionespalabra1[$i]-1]=$palabra2; //Pongo menos uno porque las posiciones de palabra empiezan en 1
		}
		
		//Igual para la palabra 2
		for($i=0;$i<$tamanyoarrayPalabra2;$i++){
			$arrayTexto[$posicionespalabra2[$i]-1]=$palabra1;
		}
		$this->texto=implode(" ",$arrayTexto);
	}
	
	/* 
	 * Interfaz 
	 * Cabecera:public function sustituyePosiciones($posicion1,$posicion2)
	 * Proceso:Sustituye la palabra de la posicion1 por la de posicion2 y viceversa
	 * Precondiciones:
	 * Entrada:Dos cadenas
	 * Salida:El texto cambiado
	 * Entrada/Salida:Nada
	 * Postcondiciones:
	 */
	public function sustituyePosiciones($posicion1,$posicion2){
		$arrayTexto=explode(" ",$this->texto);
		$aux=$arrayTexto[$posicion1];
		$arrayTexto[$posicion1]=$arrayTexto[$posicion2];
		$arrayTexto[$posicion2]=$aux;
		$this->texto=implode(" ",$arrayTexto);
	}
	
}