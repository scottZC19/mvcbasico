<h1 class="page-header">Alumno-Curso</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=AlumnoCurso&a=Crud">Nuevo Alumno-Curso</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Codigo del curso</th>   
            <th >Codigo de alumno</th>   
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Curso_id; ?></td>
            <td><?php echo $r->Alumno_id; ?></td>
            
            <td>
                <a href="?c=AlumnoCurso&a=Crud&id=<?php echo $r->Curso_id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=AlumnoCurso&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
