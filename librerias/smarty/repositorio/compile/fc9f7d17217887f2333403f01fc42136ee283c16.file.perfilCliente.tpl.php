<?php /* Smarty version Smarty-3.1.11, created on 2018-12-01 22:17:06
         compiled from "templates/plantillas/modulos/panelCliente/perfilCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20628521555ba4649311a9b4-51299057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc9f7d17217887f2333403f01fc42136ee283c16' => 
    array (
      0 => 'templates/plantillas/modulos/panelCliente/perfilCliente.tpl',
      1 => 1543724224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20628521555ba4649311a9b4-51299057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ba4649311fe73_95921696',
  'variables' => 
  array (
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba4649311fe73_95921696')) {function content_5ba4649311fe73_95921696($_smarty_tpl) {?><form id="frmRegistro" class="registroFrontEnd form-horizontal" onsubmit="javascript: return false;" role="form">
	<div id="winPerfil" class="modal modal-primary" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Perfil del cliente</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#misDatos">Mis datos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#facturacion">Facturación</a>
						</li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active container" id="misDatos">
							<div class="form-group row">
								<label for="txtRazonSocial" class="col-md-3">Nombre</label>
								<div class="col-md-9">
									<input id="txtRazonSocial" name="txtRazonSocial" class="form-control" placeholder="Razón social o nombre de la empresa" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getRazonSocial();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtRepresentante" class="col-md-3">Representante</label>
								<div class="col-md-9">
									<input id="txtRepresentante" name="txtRepresentante" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getRepresentante();?>
"/>
								</div>
							</div>
							<div class="form-group row">
								<label for="txtDireccion" class="col-md-3">Dirección oficinas</label>
								<div class="col-md-9">
									<textarea id="txtDireccion" name="txtDireccion" class="form-control" placeholder="" rows="4"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->getDireccion();?>
</textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="txtEmail" class="col-md-3">Correo electrónico</label>
								<div class="col-md-6">
									<input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getCorreo();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtPass" class="col-md-3">Contraseña</label>
								<div class="col-md-6">
									<input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtTelefono" class="col-md-3">Teléfono</label>
								<div class="col-md-6">
									<input type="tel" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="(+521 999 99 99999)"  value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getTelefono();?>
"/>
								</div>
							</div>
							
							
						</div>
						<div class="tab-pane container" id="facturacion">
							<div class="form-group row">
								<label for="txtRFC" class="col-md-3">R. F. C.</label>
								<div class="col-md-9">
									<input id="txtRFC" name="txtRFC" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getRFC();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtRazonSocialFiscal" class="col-md-3">Razón Social</label>
								<div class="col-md-9">
									<input id="txtRazonSocialFiscal" name="txtRazonSocialFiscal" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getRazonSocialFiscal();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtCalle" class="col-md-3">Calle</label>
								<div class="col-md-9">
									<input id="txtCalle" name="txtCalle" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getCalle();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtInterno" class="col-md-3">Núm. Interno</label>
								<div class="col-md-5">
									<input id="txtInterno" name="txtInterno" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getInterno();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtExterno" class="col-md-3">Num. Externo</label>
								<div class="col-md-5">
									<input id="txtExterno" name="txtExterno" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getExterno();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtColonia" class="col-md-3">Colonia</label>
								<div class="col-md-9">
									<input id="txtColonia" name="txtColonia" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getColonia();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtLocalidad" class="col-md-3">Localidad</label>
								<div class="col-md-9">
									<input id="txtLocalidad" name="txtLocalidad" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getLocalidad();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtMunicipio" class="col-md-3">Municipio</label>
								<div class="col-md-9">
									<input id="txtMunicipio" name="txtMunicipio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getMunicipio();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtEstado" class="col-md-3">Estado</label>
								<div class="col-md-9">
									<input id="txtEstado" name="txtEstado" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getEstado();?>
" />
								</div>
							</div>
							<div class="form-group row">
								<label for="txtCodigoPostal" class="col-md-3">Código Postal</label>
								<div class="col-md-5">
									<input id="txtCodigoPostal" name="txtCodigoPostal" class="form-control" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getCodigoPostal();?>
" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->getId();?>
" />
					<button type="submit" class="btn btn-primary">Guardar</button>
					<button type="reset" id="btnReset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>
</form>
<?php }} ?>