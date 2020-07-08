<h1 class="page-header">
    <?php echo $region->ID != null ? $region->COD_REG : 'Nuevo Registro'; ?>
</h1>
<ol class="breadcrumb">
  <li><a href="?c=cliente">Region</a></li>
  <li class="active"><?php echo $region->ID != null ? $region->COD_REG : 'Nuevo Registro'; ?></li>
</ol>
<form id="frm-alumno" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="ID" value="<?php echo $region->ID; ?>" />
    <div class="form-group">
        <label>Codigo region</label>
        <input type="text" name="dni" value="<?php echo $cliente->COD_REG; ?>" class="form-control" placeholder="Ingrese su dni" required>
    </div>
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $cliente->DESC_REG; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    <hr /> 
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>