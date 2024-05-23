<?php
class cAlculadora{
   public $primernumero;
   public $segundonumero;
    
   function __construct($num1 =0, $num2 = 0){
          $this->primernumero = $num1;
          $this->segundonumero = $num2;
   }




   public function sumar() {
         return $this->primernumero + $this->segundonumero;
   }
   public function restar() {
         return $this->primernumero - $this->segundonumero;
 
   }
   public function multiplicar() {
         return $this->primernumero * $this->segundonumero;
   }
   public function dividir() {
    if($this->segundonumero == 0) return "no divisible por 0";
    else return $this->primernumero / $this->segundonumero;
   }
   public function potencia () {

      return pow($this->primernumero,$this->segundonumero);
   }
   public function raiz() {
             return sqrt($this->primernumero);
   }

}


?>