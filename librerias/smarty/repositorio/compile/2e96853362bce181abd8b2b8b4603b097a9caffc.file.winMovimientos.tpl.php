<?php /* Smarty version Smarty-3.1.11, created on 2018-10-17 23:07:22
         compiled from "templates/plantillas/modulos/runners/winMovimientos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4455707535bc80351810d50-26976356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e96853362bce181abd8b2b8b4603b097a9caffc' => 
    array (
      0 => 'templates/plantillas/modulos/runners/winMovimientos.tpl',
      1 => 1539835641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4455707535bc80351810d50-26976356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5bc80351813bd3_16046696',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc80351813bd3_16046696')) {function content_5bc80351813bd3_16046696($_smarty_tpl) {?><div class="modal fade" id="winMov" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" datos="">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Movimientos</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnCalificar" data-toggle="modal" data-target="#winAddMov">Agregar</button>
				<input type="hidden" value="" id="runner" />
			</div>
		</div>
	</div>
</div>

<form role="form" id="frmAddMov" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="modal fade" id="winAddMov" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" datos="">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Agregar movimiento</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="txtConcepto" class="col-md-2">Concepto</label>
						<div class="col-md-10">
							<input class="form-control" id="txtConcepto" name="txtConcepto">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtMonto" class="col-md-2">Monto</label>
						<div class="col-md-6">
							<input class="form-control" id="txtMonto" name="txtMonto" type="number">
						</div>
					</div>
					<div class="form-group row">
						<label for="selTipo" class="col-md-2">Tipo</label>
						<div class="col-md-6">
							<select id="selTipo" name="selTipo" class="form-control">
								<option value="">Selecciona uno</option>
								<option value="C">Cargo</option>
								<option value="A">Abono</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submmit" class="btn btn-primary" id="btnCalificar">Guardar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<input type="hidden" value="" id="runner" />
				</div>
			</div>
		</div>
	</div>
</form><?php }} ?>