<?php
namespace App\Controllers;
use App\Models\LibroModel;

class LibrosController {
    private $model;

    public function __construct() {
        $this->model = new LibroModel();
    }

    public function index() {
        $libros = $this->model->obtenerTodos();
        $title = 'Lista de Libros';
        $css_specific = 'Libros';
        $content = '../app/Views/Libros/index.php';
        require '../app/Views/layout.php';
    }

    public function crear() {
        $title = 'Crear Libros';
        $css_specific = 'Libros';
        $content = '../app/Views/Libros/crear.php';
        require '../app/Views/layout.php';
    }

    public function guardar() {
        $this->model->agregar($_POST);
        header('Location: ' . BASE_URL . '/Libros');
    }

    public function editar($id) {
        $Libros = $this->model->obtenerPorId($id);
        $css_specific = 'Libros';
        $content = '../app/Views/Libros/editar.php';
        require  '../app/Views/layout.php';
    }

    public function actualizar($id) {
        $this->model->actualizar($id, $_POST);
        header('Location: ' . BASE_URL . '/Libros');
    }

    public function eliminar($id) {
        $this->model->eliminar($id);
        header('Location: ' . BASE_URL . '/Libros');
    }
}
