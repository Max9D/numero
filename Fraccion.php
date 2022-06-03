<?php
class Fraccion{
public $numerador, $denominador;//son de tipo numero
public function __contruct($num,$den){
    $this->numerador= $num;
    $this->denominador= $den;
}
public function dibujar(){
echo $this->numerador->n . "" . $this->denominador->n;
}
public function propia(){

    if($this->numerador->n < $this->denominador->n) return true;
    else return false   ;
} 

}
?>