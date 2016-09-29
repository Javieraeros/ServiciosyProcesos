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
}