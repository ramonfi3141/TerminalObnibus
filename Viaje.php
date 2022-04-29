<?php
/**En la clase Viaje:
1. Se registra la siguiente información: destino, hora de partida, hora de llegada, número, importe, fecha,
cantidad de asientos totales, cantidad de asientos disponibles, y una referencia a la persona responsable
del viaje.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método asignarAsientosDisponibles($catAsientos) que recibe por parámetros la cantidad de asientos que desean asignarse. El método retorna verdadero en caso que la asignación pueda
concretarse y falso en caso contrario. */

class Viaje{
        //destino, hora de partida, hora de llegada, número, importe, fecha,cantidad de asientos totales, cantidad de asientos disponibles, y una referencia a la persona responsable del viaje.
        private $destino;
        private $horaPartida;
        private $horaLLegada;
        private $numero;
        private $importe;
        private $fecha;
        private $cantidadAsientosTotales;
        private $cantidadAsientosDisponibles;
        private $objResponsable;


        //Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase.
    public function __construct($destino,$horaPartida,$horaLLegada,$numero,$importe,$fecha,$cantidadAsientosTotales,$cantidadAsientosDisponibles)
    {
        $this->destino=$destino;
        $this->horaPartida=$horaPartida;
        $this->horaLLegada=$horaLLegada;
        $this->numero=$numero;
        $this->importe=$importe;
        $this->fecha=$fecha;
        $this->cantidadAsientosTotales=$cantidadAsientosTotales;
        $this->cantidadAsientosDisponibles=$cantidadAsientosDisponibles;
        $this->objResponsable=[];

    }      
    //getter los métodos de acceso de cada uno de los atributos de la clase.
    public function getDestino(){
        return $this->destino;
    } public function getHoraPartida(){
        return $this->horaPartida	;
    }public function getHoraLLegada(){
        return $this->horaLLegada;
    } public function getNumero(){
        return $this->numero	;
    }public function getImporte(){
        return $this->importe;
    } public function getFecha(){
        return $this->fecha	;
    }public function getCantAsiTotal(){
        return $this->cantidadAsientosTotales;
    } public function getCantAsiDis(){
        return $this->cantidadAsientosDisponibles	;
    }public function getObjResponsable(){
        return $this->objResponsable;
    }
    //setter los métodos de acceso de cada uno de los atributos de la clase.
    public function setDestino($vDestino){
        $this->destino =$vDestino;
    }public function setHoraPartida($vHpart	){
        $this->horaPartida =$vHpart	;
    }public function setHoraLLegada($vHarribo){
        $this->horaLLegada =$vHarribo	; 
    }public function setNumero($vNum){
        $this->numero =$vNum	;
    }public function setImporte($vCosto){
        $this->importe =$vCosto	;
    }public function setFecha($vFecha){
        $this->fecha =$vFecha;
    }public function setCantAsiTotal($vCantAT){
        $this->cantidadAsientosTotales =$vCantAT	;
    }public function setCantAsiDis($vCantAD){
        $this->cantidadAsientosDisponibles =$vCantAD	; 
    }public function setObjResponsable($objResponsable){
        $this->objResponsable =$objResponsable	; 
    }

    public function cadenaDatosResponsable(){
        $datosResp="";
        $colResp= $this->getObjResponsable();
        $i=1;
        foreach ($colResp as $value) {
            $datosResp= $datosResp ."\n~~~~~~~responsable " . ($i) ."~~~~~~~~~\n";
            $datosResp= $datosResp . $value;
            $i++;
        };
         return $datosResp;
    
    }
    //metodo magico
    public function __toString(){

        return  "Destino : " . $this->getDestino()    ."\n" .
                "Hora de partida: ". $this->getHoraPartida() ."\n"   .
                "Hora de arribo: ".$this->getHoraLLegada()."\n"   .
                "Numero de viaje: ".$this->getNumero()    .  "\n".
                "Importe: $".$this->getImporte()    .  "\n".
                "Fecha: ".$this->getFecha()    .  "\n" .
                "Cantidad de asientos totales: ".$this->getCantAsiTotal()    .  "\n" .
                "Cantidad de asientos disponibles: ".$this->getCantAsiDis()    .  "\n" .
                "Responsable del viaje: ".$this->cadenaDatosResponsable()    .  "\n" ;

    }
}

?>