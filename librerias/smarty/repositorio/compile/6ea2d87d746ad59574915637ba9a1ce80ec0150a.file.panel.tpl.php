<?php /* Smarty version Smarty-3.1.11, created on 2018-12-01 21:29:24
         compiled from "templates/plantillas/modulos/panelCliente/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6154889645ba1ac58d1ee09-94274860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ea2d87d746ad59574915637ba9a1ce80ec0150a' => 
    array (
      0 => 'templates/plantillas/modulos/panelCliente/panel.tpl',
      1 => 1543721363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6154889645ba1ac58d1ee09-94274860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ba1ac58d21a70_99219269',
  'variables' => 
  array (
    'PAGE' => 0,
    'cliente' => 0,
    'anio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba1ac58d21a70_99219269')) {function content_5ba1ac58d21a70_99219269($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-6 offset-3 col-sm-4 offset-sm-0">
			<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
logo.png" class="img-fluid" />
		</div>
		<div class="col-12 col-sm-8">
			<br />
			<h1>Bienvenido <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getRazonSocial();?>
</h1>
		</div>
	</div>
	
	<div class="card card-default esquinasRedondas">
		<div class="card-body">
			<div class="row">
				<div class="col-xs-12">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#winNuevaOrden">Solicita tu runner</button>
					<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#winPerfil">Perfil</button>
				</div>
			</div>
			<div id="dvOrdenes"></div>
		</div>
	</div>
	<!--
	<div class="card card-default esquinasRedondas">
		<div class="card-body">
			<ul class="nav nav-tabs" id="panelTabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#registrar" role="tab" aria-controls="registrar" aria-selected="true">Solicitar un runner</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#lista" role="tab" aria-controls="profile" aria-selected="false">Servicios solicitados</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="contact" aria-selected="false">Perfil</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="registrar" role="tabpanel" aria-labelledby="registrar-tab">
					<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/panelCliente/registroOrden.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
				<div class="tab-pane fade" id="lista" role="tabpanel" aria-labelledby="lista-tab">
					<div id="dvOrdenes"></div>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/panelCliente/perfilCliente.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</div>
		</div>
	</div>-->
	
	<input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getId();?>
" />
</div>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/panelCliente/registroOrden.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/panelCliente/perfilCliente.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<form onsubmit="javascript: return false" method="post" id="frmPago" name="frmPago" action="">
	<div id="winPago" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
					
					<div class="row">
						<div class="col-12 text-center">
							<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
conekta_logo.png" />
						</div>
					</div>
					<br /><br />
					<div class="form-group row">
						<label for="email" class="col-12">Nombre del tarjetahabiente</label>
						<div class="col-12">
							<input type="text" class="form-control name col-12" data-conekta="card[name]"/>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="email" class="col-12">Número de tarjeta</label>
						<div class="col-12">
							<input type="text" class="form-control number col-12" data-conekta="card[number]" placeholder=""/>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="email" class="col-12">Expira</label>
						<div class="col-6">
							<select data-conekta="card[exp_month]" class="form-control exp_month">
								<option value="01">Enero</option>
								<option value="02">Febrero</option>
								<option value="03">Marzo</option>
								<option value="04">Abril</option>
								<option value="05">Mayo</option>
								<option value="06">Junio</option>
								<option value="07">Julio</option>
								<option value="08">Agosto</option>
								<option value="09">Septiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembre</option>
								<option value="12">Diciembre</option>
							</select>
						</div>
						<div class="col-6">
							<select class="form-control exp_year col-" data-conekta="card[exp_year]">
								<?php $_smarty_tpl->tpl_vars['anio'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['anio']->step = 1;$_smarty_tpl->tpl_vars['anio']->total = (int)ceil(($_smarty_tpl->tpl_vars['anio']->step > 0 ? date('Y')+10+1 - (date('Y')) : date('Y')-(date('Y')+10)+1)/abs($_smarty_tpl->tpl_vars['anio']->step));
if ($_smarty_tpl->tpl_vars['anio']->total > 0){
for ($_smarty_tpl->tpl_vars['anio']->value = date('Y'), $_smarty_tpl->tpl_vars['anio']->iteration = 1;$_smarty_tpl->tpl_vars['anio']->iteration <= $_smarty_tpl->tpl_vars['anio']->total;$_smarty_tpl->tpl_vars['anio']->value += $_smarty_tpl->tpl_vars['anio']->step, $_smarty_tpl->tpl_vars['anio']->iteration++){
$_smarty_tpl->tpl_vars['anio']->first = $_smarty_tpl->tpl_vars['anio']->iteration == 1;$_smarty_tpl->tpl_vars['anio']->last = $_smarty_tpl->tpl_vars['anio']->iteration == $_smarty_tpl->tpl_vars['anio']->total;?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['anio']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['anio']->value;?>
</option>
								<?php }} ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-12">CVC</label>
						<div class="col-4">
							<input type="text" class="form-control cvc col-12" data-conekta="card[cvc]" placeholder="CVC"/>
						</div>
						<div class="col-5 offset-3 text-center">
							<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
visa.png" style="width: 100%" />
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-6 col-offset-3 text-center">
								<input type="hidden" name='conektaTokenId' id="conektaTokenId" />
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" id="publicConekta" value="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['inisistema']['conekta']['public'];?>
" />
					<button type="button" class="btn btn-primary" id="submitPago">Pagar ahora</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>
</form>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/ordenes/winCalificar.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>