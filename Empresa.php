<?php
/**En la clase Empresa :
1. Se registra la siguiente información: identificación, nombre y la colección de Viajes que realiza.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método darViajeADestino($elDestino) que recibe por parámetro un destino junto a una
cantidad de asientos y retorna una colección con todos los viajes disponibles a ese destino.
6. Implementar el método incorporarViaje($objViaje) que recibe como parámetro un viaje, verifica que no
se encuentre registrado ningún otro viaje al mismo destino, en la misma fecha y con el mismo horario de
partida. El método retorna verdadero si la incorporación del viaje se realizó correctamente y falso en caso
contrario.
7. Implementar el método venderViajeADestino($canAsientos, $destino) método que recibe por parámetro la cantidad de asientos y el destino y se registra la asignación del viaje en caso de ser posible. (invocar
al método asignarAsientosDisponibles). El método retorna la instancia del viaje asignado o null en caso
contrario.
8. Implementar el método montoRecaudado que retorna el monto recaudado por la Empresa.
( tener en cuenta los asientos vendidos y el importe del viaje) */

class Empresa{
        //identificación, nombre y la colección de Viajes que realiza
        private $identificacion;
        private $nombreEmpresa;
        private $coleccionViajes;

        //Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase.
    public function __construct($identificacion,$nombreEmpresa,$coleccionViajes)
    {
        $this->identificacion=$identificacion;
        $this->nombreEmpresa=$nombreEmpresa;
        $this->coleccionViajes=$coleccionViajes;

    }      
    //getter los métodos de acceso de cada uno de los atributos de la clase.
    public function getIde(){
        return $this->identificacion;
    } public function getNomEmpresa(){
        return $this->nombreEmpresa	;
    }public function getColViaje(){
        return $this->coleccionViajes;
    }
    //setter los métodos de acceso de cada uno de los atributos de la clase.
    public function setIde($vIde){
        $this->identificacion =$vIde;
    }public function setNomEmpresa($vNomEmp){
        $this->nombreEmpresa =$vNomEmp	;
    }public function setColViaje($vArrayViajes){
        $this->coleccionViajes =$vArrayViajes	; 
   }
    //metodo magico
    public function __toString(){

        return  "Identificacion: " . $this->getIde()    ."  "  .
                "Nombre de la empresa: ".$this->getNomEmpresa()."\n"   .
                "Viajes de la empresa: ".$this->getColViaje()     .  "\n" ;
    }
}

?>
