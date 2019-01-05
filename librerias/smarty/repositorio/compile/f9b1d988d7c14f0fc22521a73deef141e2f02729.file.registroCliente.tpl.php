<?php /* Smarty version Smarty-3.1.11, created on 2018-12-01 22:19:36
         compiled from "templates/plantillas/modulos/frontend/registroCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13691320545ba1a85c5b0990-82246853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9b1d988d7c14f0fc22521a73deef141e2f02729' => 
    array (
      0 => 'templates/plantillas/modulos/frontend/registroCliente.tpl',
      1 => 1543724338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13691320545ba1a85c5b0990-82246853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ba1a85c62b375_52605088',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba1a85c62b375_52605088')) {function content_5ba1a85c62b375_52605088($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2">
			<div class="col-8 offset-2">
				<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
logo.png" class="img-fluid" />
			</div>
			<div class="card card-default">
				<div class="card-body">
					<form id="frmRegistro" class="registroFrontEnd">
						<div class="row">
							<div class="col-xs-12">
								<h3 class="text-center">Crea tu cuenta ahora y reserva a tu runner</h3>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-12">
								<input id="txtRazonSocial" name="txtRazonSocial" class="form-control" placeholder="Razón social o nombre de la empresa" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input id="txtRepresentante" name="txtRepresentante" class="form-control" placeholder="Nombre del representante" />
							</div>
							<div class="col-md-6">
								<input id="txtRFC" name="txtRFC" class="form-control" placeholder="RFC" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<textarea id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Dirección"></textarea>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-6">
								<input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Correo electrónico" />
							</div>
							<div class="col-md-6">
								<input type="tel" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Teléfono (+521 999 99 99999)" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Contraseña" />
							</div>
							<div class="col-md-6">
								<input type="password" id="txtPass2" name="txtPass2" class="form-control" placeholder="Confirma" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary">Registrar</button>
								<br /><br />
								¿Ya tienes una cuenta? <a href="logincliente">Inicia sesión aquí</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>