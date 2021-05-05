<?php
require_once 'model/alumnocurso.php';

class AlumnoCursoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new AlumnoCurso();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/alumnocurso/alumnocurso.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new AlumnoCurso();
        
        if(isset($_REQUEST['Curso_id'])){
            $alm = $this->model->Obtener($_REQUEST['Curso_id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/alumnocurso/alumnocurso.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new AlumnoCurso();
        
        $alm->Curso_id = $_REQUEST['Curso_id'];
        $alm->Alumno_id = $_REQUEST['Alumno_id'];
        

        $alm->Curso_id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: indexalumnocurso.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: indexalumnocurso.php');
    }
}