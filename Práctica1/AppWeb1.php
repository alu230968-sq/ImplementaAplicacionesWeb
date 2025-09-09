<?php
//Programa para imprimir mensaje de Bienvenida
//Creado por Ashley Rivera Padilla
//Fecha: 09/Septiembre/2025
//appWeb1.php
class texto
{
    public $texto1=" Bienvenidos a Programación de App Web";
    public function imprimirtexto()
    {
        print $this->texto1;
    }
}
$obj1=new texto;
$obj1->imprimirtexto();
?>