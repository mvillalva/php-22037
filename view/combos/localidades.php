<label for="localidad">Localidades</label>
<select class="form-select" id="localidad" name="localidad" required>
<option value="">Seleccioná...</option>
<?php 
  require_once("../dao/LocalidadDAO.php");
  $dao = new LocalidadDAO();
  $lista = $dao->listarLocalidades();  

  foreach ($lista as $objeto) {
    $html = '<option value="' . $objeto->getIdlocalidad() . ' ?>">' . $objeto->getNombre() . '</option>';
    return $html;
  }
?>
</select>
<div class="invalid-feedback">Seleccioná una localidad válida.</div>