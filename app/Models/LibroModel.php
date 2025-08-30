<?php
namespace App\Models;

class LibroModel {

    public $Id;
    public $Titulo;
    public $Autor;
    public $Aniopublicacion;
    public $Editorial;
    public $Genero;

    public function obtenerTodos() {
        $l1 = new LibroModel();
        $l1 -> Id = 1;
        $l1 -> Titulo= 'Tostadora';
        $l1 -> Autor = 'TopHouse';
        $l1 -> Aniopublicacion = 'RM3S';
        $l1 -> Editorial = '$45.000';
        $l1 -> Genero = 25;

        $l2 = new LibroModel();
        $l2 -> Id = 2;
        $l2 -> Titulo = 'AirFryer';
        $l2 -> Autor ='Acme';
        $l2 -> Aniopublicacion = 'IVAN-7';
        $l2 -> Editorial = '$70.000';
        $l2 -> Genero = 30;

        $l3 = new LibroModel();
        $l3 -> Id = 3;
        $l3 -> Titulo = 'El principito';
        $l3 -> Autor = 'mmmm';
        $l3 -> Aniopublicacion = '1991';
        $l3 -> Editorial = 'San martin';
        $l3 -> Genero = 'Adultos';

        $l4 = new LibroModel();
        $l4 -> Id = 4;
        $l4 -> Titulo = 'duelo';
        $l4 -> Autor= 'rolon';
        $l4 -> Aniopublicacion= '2025';
        $l4 -> Editorial= 'lll';
        $l4 -> Genero = 'adultos';

         $l5 = new LibroModel();
        $l5 -> Id = 5;
        $l5 -> Titulo = 'Resultados';
        $l5 -> Autor= 'Bernardo';
        $l5 -> Aniopublicacion= '2016';
        $l5 -> Editorial= 'Bernardo';
        $l5 -> Genero = 'Adultos';




        $Libro = [$l1, $l2, $l3, $l4, $l5];
        return $Libro;
    }
}