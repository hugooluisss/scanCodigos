<?php /* Smarty version Smarty-3.1.11, created on 2018-10-17 20:17:07
         compiled from "templates/plantillas/modulos/ordenes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16764617055b743fdb364774-80288331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b41b2cd4b65a3beb86339193dded29b382ba17c' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/panel.tpl',
      1 => 1539821989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16764617055b743fdb364774-80288331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b743fdb546231_74163309',
  'variables' => 
  array (
    'estados' => 0,
    'item' => 0,
    'PAGE' => 0,
    'hora' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b743fdb546231_74163309')) {function content_5b743fdb546231_74163309($_smarty_tpl) {?><div class="row">
	<div class="col-md-12">
		<h1 class="page-header">
			Ordenes
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
						<label for="txtRazonSocial" class="col-md-2">Cliente</label>
						<div class="col-md-10">
							<input class="form-control" id="txtCliente" name="txtCliente">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtRepresentante" class="col-md-2">Estado</label>
						<div class="col-md-6">
							<select class="form-control" id="selEstado" name="selEstado">
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['idEstado'];?>
" <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getPerfil()==2&&in_array($_smarty_tpl->tpl_vars['item']->value['idEstado'],array(6,7))){?>disabled="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>

								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="txtFecha" class="col-md-2">Fecha</label>
						<div class="col-md-3">
							<input class="form-control" id="txtFecha" name="txtFecha" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label for="selHoras" class="col-md-2">Horas</label>
						<div class="col-md-2">
							<select class="form-control" id="selHoras" name="selHoras">
								<?php $_smarty_tpl->tpl_vars['hora'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['hora']->step = 1;$_smarty_tpl->tpl_vars['hora']->total = (int)ceil(($_smarty_tpl->tpl_vars['hora']->step > 0 ? 24+1 - (1) : 1-(24)+1)/abs($_smarty_tpl->tpl_vars['hora']->step));
if ($_smarty_tpl->tpl_vars['hora']->total > 0){
for ($_smarty_tpl->tpl_vars['hora']->value = 1, $_smarty_tpl->tpl_vars['hora']->iteration = 1;$_smarty_tpl->tpl_vars['hora']->iteration <= $_smarty_tpl->tpl_vars['hora']->total;$_smarty_tpl->tpl_vars['hora']->value += $_smarty_tpl->tpl_vars['hora']->step, $_smarty_tpl->tpl_vars['hora']->iteration++){
$_smarty_tpl->tpl_vars['hora']->first = $_smarty_tpl->tpl_vars['hora']->iteration == 1;$_smarty_tpl->tpl_vars['hora']->last = $_smarty_tpl->tpl_vars['hora']->iteration == $_smarty_tpl->tpl_vars['hora']->total;?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
</option>
								<?php }} ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="txtFecha" class="col-md-2">Precio</label>
						<div class="col-md-2">
							<input class="form-control text-right" id="txtPrecio" name="txtPrecio" type="text" disabled="true" readonly="true" value="0">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtDireccion" class="col-md-2">Dirección</label>
						<div class="col-md-10">
							<input class="form-control" id="txtDireccion" name="txtDireccion" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtReferencia" class="col-md-2">Referencia</label>
						<div class="col-md-10">
							<input class="form-control" id="txtReferencia" name="txtReferencia" type="text">
						</div>
					</div>
					<div class="row">
						<div id="dvMapa" class="col-12" style="height: 300px">&nbsp;</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<input type="hidden" id="id"/>
					<input type="hidden" id="precioporhora" value="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['inisistema']['sistema']['preciohora'];?>
"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>