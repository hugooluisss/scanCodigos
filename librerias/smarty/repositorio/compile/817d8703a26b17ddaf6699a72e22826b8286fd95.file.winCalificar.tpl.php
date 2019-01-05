<?php /* Smarty version Smarty-3.1.11, created on 2018-10-17 20:00:58
         compiled from "templates/plantillas/modulos/ordenes/winCalificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18565900325bc7d1bfa1b174-01986692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '817d8703a26b17ddaf6699a72e22826b8286fd95' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/winCalificar.tpl',
      1 => 1539824457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18565900325bc7d1bfa1b174-01986692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5bc7d1bfa23780_19327951',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc7d1bfa23780_19327951')) {function content_5bc7d1bfa23780_19327951($_smarty_tpl) {?><div class="modal fade" id="winCalificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" datos="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="alert alert-success" role="alert">
					<h4 class="alert-heading">Califica el servicio que te prestaron</h4>
						<p>Para nosotros es muy importante la calidad del servicio. Por favor seleccionar una o varias estrellas de acuerdo a la calidad del servicio prestado. Una estrella es un servicio mal y cinco estrellas es un excelente servicio</p>
						<hr>
						<p class="mb-0">Al calificar el servicio nosotros estaremos liberando el pago al runner</p>
				</div>
				
				<p class="calificacion">
					<input id="radio1" type="radio" name="estrellas" value="5">
					<label for="radio1"><i class="fa fa-2x fa-star" aria-hidden="true"></i></label>
					
					<input id="radio2" type="radio" name="estrellas" value="4">
					<label for="radio2"><i class="fa fa-2x fa-star" aria-hidden="true"></i></label>
					
					<input id="radio3" type="radio" name="estrellas" value="3">
					<label for="radio3"><i class="fa fa-2x fa-star" aria-hidden="true"></i></label>
					
					<input id="radio4" type="radio" name="estrellas" value="2">
					<label for="radio4"><i class="fa fa-2x fa-star" aria-hidden="true"></i></label>
	    
					<input id="radio5" type="radio" name="estrellas" value="1">
					<label for="radio5"><i class="fa fa-2x fa-star" aria-hidden="true"></i></label>
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnCalificar">Calificar</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">En otro momento...</button>
			</div>
		</div>
	</div>
</div><?php }} ?>