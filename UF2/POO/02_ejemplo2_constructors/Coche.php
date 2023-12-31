<!-- EJEMPLO 2: Constructores
El uso de constructores nos facilita la instancia de la clase, 
ya que podremos instanciar y asignar los atributos al mismo tiempo.
Como desventaja, estamos obligados a pasar todos los parámetros definidos en el constructor 
si no queremos obtener errores.
El ejemplo de coches anterior mediante el uso de constructores podría ser como sigue: -->

<?php

class Coche{

    //Variables o atributos
    var $marca;
    var $modelo;
    var $color;
    var $propietario;

    //Método constructor antiguo

    /*function Coche($miMarca,$miModelo,$miColor,$miPropietario){
        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->propietario = $miPropietario;
    }*/

    function __construct($miMarca,$miModelo,$miColor,$miPropietario){
        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->propietario = $miPropietario;
    }

    //Funciones o métodos

    function setMarca($miMarca){
        $this->marca = $miMarca;
    }

    function getMarca(){
        return $this->marca;
    }

    function setModelo($miModelo){
        $this->modelo = $miModelo;
    }

    function getModelo(){
        return $this->modelo;
    }

    function setColor($miColor){
        $this->color = $miColor;
    }

    function getColor(){
        return $this->color;
    }

    function setPropietario($miPropietario){
        $this->propietario = $miPropietario;
    }

    function getPropietario(){
        return $this->propietario;
    }
}


//Título

echo "
Ejemplo 2: Constructores
";


//Instancio y configuro los coches

$coche1 = new Coche("Wolkswagen","Polo","negro","Rebeca");

$coche2 = new Coche("Toyota","Corolla","verde","Marcos");


//Accedo a las funciones o métodos get() para recuperar la información del coche 1 (opción 1)

echo "

        <strong>".$coche1->getPropietario()."</strong> se ha comprado un

        <strong>".$coche1->getMarca()." ".$coche1->getModelo()."</strong> de color

        <strong>".$coche1->getColor()."</strong>.

";


//Accedo directamente a los atributos para recuperar la información del coche 2 (opción 2)

echo "

        <strong>".$coche2->propietario."</strong> se ha comprado un

        <strong>".$coche2->marca." ".$coche2->modelo."</strong> de color

        <strong>".$coche2->color."</strong>.

";