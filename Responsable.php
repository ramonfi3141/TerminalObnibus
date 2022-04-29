<?php
/**En la clase Responsable:
1. Se registra la siguiente información: nombre, apellido, Nro de Documento, direccion, mail y telefono.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método toString para que retorne la información de los atributos de la clase. */

class Responsable{
        //nombre, apellido, Nro de Documento, direccion, mail y telefono.
        private $nombreResponsable;
        private $apellidoResponsable;
        private $docResponsable;
        private $direResponsable;
        private $mailResponsable;
        private $telResponsable;

        //Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase.
    public function __construct($nombreResponsable,$apellidoResponsable,$docResponsable,$direResponsable,$mailResponsable,$telResponsable)
    {
        $this->nombreResponsable=$nombreResponsable;
        $this->apellidoResponsable=$apellidoResponsable;
        $this->docResponsable=$docResponsable;
        $this->direResponsable=$direResponsable;
        $this->mailResponsable=$mailResponsable;
        $this->telResponsable=$telResponsable;

    }      
    //getter los métodos de acceso de cada uno de los atributos de la clase.
    public function getNombre(){
        return $this->nombreResponsable;
    } public function getApellido(){
        return $this->apellidoResponsable	;
    }public function getDocumento(){
        return $this->docResponsable;
    } public function getDireccion(){
        return $this->direResponsable	;
    }public function getMail(){
        return $this->mailResponsable;
    } public function getTelefono(){
        return $this->telResponsable	;
    }
    //setter los métodos de acceso de cada uno de los atributos de la clase.
    public function setNombre($nom){
        $this->nombreResponsable =$nom;
    }public function setApellido($apell	){
        $this->apellidoResponsable =$apell	;
    }public function setDocumento($doc){
        $this->docResponsable =$doc	; 
   }public function setDireccion($dire){
        $this->direResponsable =$dire	;
    }public function setMail($mail){
        $this->mailResponsable =$mail	; 
   }public function setTelefono($tel){
        $this->telResponsable =$tel	;
    }
    //metodo magico
    public function __toString(){

        return  "nombre y apellido del responsable : " . $this->getNombre()    ."  "  .
                $this->getApellido() ."\n"   .
                "dni: ".$this->getDocumento()."\n"   .
                "direccion: ".$this->getDireccion() . "\n" .  
                "mail: ".$this->getMail()    .  "\n" .
                "telefono: ".$this->getTelefono()    .  "\n" ;
    }
}

?>
