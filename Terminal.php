<?php
/**En la clase Terminal:
1. Se registra la siguiente información: denominación, dirección y la colección empresas registradas en la
terminal.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase.
3. Los métodos de acceso para cada una de las variables instancias de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método ventaAutomatica($cantAsientos, $fecha, $destino, $empresa) que recibe por
parámetro la cantidad de asientos que se requieren, una fecha, un destino y la empresa con la que se
desea viajar. Automáticamente se registra la venta del viaje. (Para la implementación de este método
debe utilizarse uno de los métodos implementados en la clase Viaje).
6. Implementar el método empresaMayorRecaudacion retorna un objeto de la clase empresa que se corresponde con la de mayor recaudación.
7. Implementar el método responsableViaje($numeroViaje) que recibe por parámetro un numero de viaje
y retorna al responsable del viaje. */

class Terminal{
        //denominación, dirección y la colección empresas registradas en la terminal.
        private $denominacion;
        private $direccion;
        private $arrayEmpresas;

        //Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase.
    public function __construct($denominacion,$direccion,$arrayEmpresas)
    {
        $this->denominacion=$denominacion;
        $this->direccion=$direccion;
        $this->arrayEmpresas=$arrayEmpresas;
    }      
    //getter los métodos de acceso de cada uno de los atributos de la clase.
    public function getDenominacion(){
        return $this->denominacion;
    } public function getDireccion(){
        return $this->direccion	;
    }public function getArrayEmp(){
        return $this->arrayEmpresas;
    }
    //setter los métodos de acceso de cada uno de los atributos de la clase.
    public function setDenominacion($deno){
        $this->denominacion =$deno;
    }public function setDireccion($vDireccion){
        $this->direccion =$vDireccion;
    }public function setArrayEmp($coleccionEmp){
        $this->arrayEmpresas =$coleccionEmp	; 
    }
    //metodo magico
    public function __toString(){

        return  "Denominacion : " . $this->getDenominacion()    ."  "  .
                "Direccion: ".$this->getDireccion().      "\n"   .
                "Empresas: ".$this->getArrayEmp()    .   "\n" ;
    }
}

?>
