<?php /* Smarty version Smarty-3.1.11, created on 2018-09-18 19:51:55
         compiled from "templates/plantillas/modulos/frontend/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8004057565b739e3117a066-13103504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5da9e2c4ed8f64468284d328fd2e6858ceb48a6b' => 
    array (
      0 => 'templates/plantillas/modulos/frontend/login.tpl',
      1 => 1537318314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8004057565b739e3117a066-13103504',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b739e31185be9_19563983',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b739e31185be9_19563983')) {function content_5b739e31185be9_19563983($_smarty_tpl) {?><div class="container">
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
							<!-- /.col -->
							<div class="col-12">
								<button type="submit" class="btn btn-primary btn-block">Iniciar</button>
							</div><!-- /.col -->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>