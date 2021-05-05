<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->Curso_id : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=AlumnoCurso">Alumno-Cursos</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Curso_id : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumnocurso" action="?c=AlumnoCurso&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    
    <div class="form-group">
        <label>Codigo de Curso</label>
        <input type="text" name="Curso_id" value="<?php echo $alm->Curso_id; ?>" class="form-control" placeholder="Ingrese codigo del curso" data-validacion-tipo="requerido|min:3" />
    </div>
    <div class="form-group">
        <label>Codigo de Alumno</label>
        <input type="text" name="Alumno_id" value="<?php echo $alm->Alumno_id; ?>" class="form-control" placeholder="Ingrese codigo de alumno" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumnocurso").submit(function(){
            return $(this).validate();
        });
    })
</script>