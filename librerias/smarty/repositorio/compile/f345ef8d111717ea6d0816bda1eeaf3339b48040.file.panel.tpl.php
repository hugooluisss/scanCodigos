<?php /* Smarty version Smarty-3.1.11, created on 2018-10-17 22:51:45
         compiled from "templates/plantillas/modulos/runners/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6941953465b7f81486c5b73-33812212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f345ef8d111717ea6d0816bda1eeaf3339b48040' => 
    array (
      0 => 'templates/plantillas/modulos/runners/panel.tpl',
      1 => 1539834704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6941953465b7f81486c5b73-33812212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b7f8148749375_45726449',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7f8148749375_45726449')) {function content_5b7f8148749375_45726449($_smarty_tpl) {?><div class="row">
	<div class="col-md-12">
		<h1 class="page-header">
			Runners
		</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-pills">
  <li class="nav-item">
  	<a class="nav-link active" role="tab" data-toggle="pill" href="#listas">Lista</a>
  </li>
  <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane container active">
		<div id="dvLista">
		</div>
	</div>
	
	<div id="add" class="tab-pane container">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="card">
				<div class="card-body">
					<div class="form-group row">
						<label for="txtNombre" class="col-md-2">Nombre</label>
						<div class="col-md-6">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtEmail" class="col-md-2">Correo electrónico</label>
						<div class="col-md-3">
							<input class="form-control" id="txtEmail" name="txtEmail" type="email">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtTelefono" class="col-md-2">Teléfono</label>
						<div class="col-md-3">
							<input class="form-control" id="txtTelefono" name="txtTelefono" type="tel">
						</div>
					</div>
					<div class="form-group row">
						<label for="selSexo" class="col-md-2">Sexo</label>
						<div class="col-md-3">
							<select id="selSexo" name="selSexo" class="form-control">
								<option value="">Sin declarar</option>
								<option value="H">Hombre</option>
								<option value="M">Mujer</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="txtEntidad" class="col-md-2">Entidad</label>
						<div class="col-md-3">
							<input class="form-control" id="txtEntidad" name="txtEntidad" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label for="selSituacion" class="col-md-2">Situación</label>
						<div class="col-md-3">
							<select id="selSituacion" name="selSituacion" class="form-control">
								<option value="0">No aprobado</option>
								<option value="1">Aprobado</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="txtPass" class="col-md-2">Contraseña</label>
						<div class="col-md-3">
							<input class="form-control" id="txtPass" name="txtPass" type="password">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtPrecio" class="col-md-2">Precio por hora</label>
						<div class="col-md-2">
							<input class="form-control" id="txtPrecio" name="txtPrecio" type="number">
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/runners/winMovimientos.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>