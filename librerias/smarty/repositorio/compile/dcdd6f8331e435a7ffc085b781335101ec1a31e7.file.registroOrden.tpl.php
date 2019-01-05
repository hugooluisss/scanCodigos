<?php /* Smarty version Smarty-3.1.11, created on 2018-12-01 20:56:58
         compiled from "templates/plantillas/modulos/panelCliente/registroOrden.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5283404425ba1b04c20daf5-18833218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcdd6f8331e435a7ffc085b781335101ec1a31e7' => 
    array (
      0 => 'templates/plantillas/modulos/panelCliente/registroOrden.tpl',
      1 => 1543719410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5283404425ba1b04c20daf5-18833218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ba1b04c2a8706_12598291',
  'variables' => 
  array (
    'hora' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba1b04c2a8706_12598291')) {function content_5ba1b04c2a8706_12598291($_smarty_tpl) {?><form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div id="winNuevaOrden" class="modal modal-primary" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Registra tu servicio</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-7">
							<div class="form-group row">
								<label for="txtFecha" class="col-md-3">Fecha y hora</label>
								<div class="col-md-6">
									<input class="form-control" id="txtFecha" name="txtFecha" type="text">
									<span class="text-muted">En el que se presentará</span>
								</div>
							</div>
							<div class="form-group row">
								<label for="selHoras" class="col-md-3">Horas</label>
								<div class="col-md-4">
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
								<label for="txtFecha" class="col-md-3">Precio</label>
								<div class="col-md-4">
									<input class="form-control text-right" id="txtPrecio" name="txtPrecio" type="text" disabled="true" readonly="true" value="0">
								</div>
							</div>
							<div class="form-group row">
								<label for="txtDireccion" class="col-md-3">Dirección</label>
								<div class="col-md-12">
									<textarea id="txtDireccion" name="txtDireccion" class="form-control" rows="4" placeholder="Dirección donde se realizará el servicio"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="txtReferencia" class="col-md-3">Referencia</label>
								<div class="col-md-12">
									<input class="form-control" id="txtReferencia" name="txtReferencia" type="text">
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div id="dvMapa" class="col-12" style="height: 300px">&nbsp;</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Guardar</button>
					<button type="reset" id="btnReset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<input type="hidden" id="cliente" value="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getId();?>
"/>
					<input type="hidden" id="precioporhora" value="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['inisistema']['sistema']['preciohora'];?>
"/>
				</div>
			</div>
		</div>
	</div>
</form><?php }} ?>