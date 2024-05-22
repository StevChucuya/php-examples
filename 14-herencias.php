<?php
class Animal{
    public $nombre;
    public $color;
    public $estaExtincion;
    public $archivoSonido;

    public function __construct($nombre1,$color1,$estaExtincion1,$archivoSonido1){
               $this->nombre = $nombre1;
               $this->color = $color1;
               $this->estaExtincion = $estaExtincion1;
               $this->archivoSonido = $archivoSonido1;
    }

    public function obtenerInformacion(){
        if ("Verde" == $this->color) {
             
        $colortext= $this->color == "Verde" ? "\033[32m" : "";
        $mensaje = "Nombre: ".$this->nombre
        ."\n"."Color: ".$colortext.$this->color."\033[0m"
        ."\n"."En extencion?: ".($this->estaExtincion? "Si" : "No");
        return $mensaje;




        
        }
        elseif("Rojo" == $this->color){
        $colortext= $this->color == "Rojo" ? "\033[33m" : "";
        $mensaje = "Nombre: ".$this->nombre
        ."\n"."Color: ".$colortext.$this->color."\033[0m"
        ."\n"."En extencion?: ".($this->estaExtincion? "Si" : "No");
        return $mensaje;

        }
    }
    






        public function hacerSonido(){
            $audiofile="C:\\xampp\\htdocs\\php-examples\\".$this->archivoSonido;
            shell_exec("start wmplayer ".escapeshellarg($audiofile));
        }
    
}


class Perro extends Animal {
    public function hacerSonido($sonido =""){
        parent::hacerSonido();
        return $sonido;
    }

}

class Gato extends Animal{
public function hacerSonido($sonido =""){
    parent::hacerSonido();
    return $sonido;
}


}













?>