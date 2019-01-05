<?php /* Smarty version Smarty-3.1.11, created on 2018-12-02 20:31:47
         compiled from "templates/plantillas/modulos/frontend/loginCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6661390105ba19f212b2912-74058118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c99c89934df360c32c16a1f7bf632bb6cf35e6' => 
    array (
      0 => 'templates/plantillas/modulos/frontend/loginCliente.tpl',
      1 => 1543724416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6661390105ba19f212b2912-74058118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ba19f21306bb8_99502337',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba19f21306bb8_99502337')) {function content_5ba19f21306bb8_99502337($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 offset-sm-1 col-md-6 offset-md-3">
			<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
logo.png" class="img-fluid" />
			<div class="card card-default">
				<div class="card-body">
					<form id="frmLogin" action="#" id="frmLogin" method="post">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email" id="txtUsuario" name="txtUsuario">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Contraseña" id="txtPass" name="txtPass">
						</div>
						<div class="row">
							<div class="col-12">
								<button type="submit" class="btn btn-primary btn-block">Iniciar</button>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-12 text-center">
								¿Aún no tienes una cuenta? <a href="registrocliente">regístrate ahora</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>