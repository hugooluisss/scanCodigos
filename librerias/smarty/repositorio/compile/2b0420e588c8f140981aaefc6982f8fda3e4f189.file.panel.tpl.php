<?php /* Smarty version Smarty-3.1.11, created on 2018-12-01 22:28:48
         compiled from "templates/plantillas/modulos/clientes/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5095901785b85da6491c339-62148434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0420e588c8f140981aaefc6982f8fda3e4f189' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/panel.tpl',
      1 => 1543724927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5095901785b85da6491c339-62148434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b85da649538e1_08818879',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b85da649538e1_08818879')) {function content_5b85da649538e1_08818879($_smarty_tpl) {?><div class="row">
	<div class="col-md-12">
		<h1 class="page-header">
			Clientes
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
						<label for="txtRazonSocial" class="col-md-2">Razón social</label>
						<div class="col-md-8">
							<input class="form-control" id="txtRazonSocial" name="txtRazonSocial">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtRepresentante" class="col-md-2">Representante</label>
						<div class="col-md-8">
							<input class="form-control" id="txtRepresentante" name="txtRepresentante">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtEmail" class="col-md-2">Correo electrónico</label>
						<div class="col-md-8">
							<input class="form-control" id="txtEmail" name="txtEmail" type="email">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtTelefono" class="col-md-2">Teléfono</label>
						<div class="col-md-8">
							<input class="form-control" id="txtTelefono" name="txtTelefono" type="tel">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtEntidad" class="col-md-2">Entidad</label>
						<div class="col-md-8">
							<input class="form-control" id="txtEntidad" name="txtEntidad" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label for="txtDireccion" class="col-md-2">Dirección</label>
						<div class="col-md-8">
							<textarea id="txtDireccion" name="txtDireccion" class="form-control" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="txtPass" class="col-md-2">Contraseña</label>
						<div class="col-md-8">
							<input class="form-control" id="txtPass" name="txtPass" type="password">
						</div>
					</div>
					<hr />
					<h3>Facturación</h3>
					<div class="form-group row">
						<label for="txtRFC" class="col-md-2">R. F. C.</label>
						<div class="col-md-9">
							<input id="txtRFC" name="txtRFC" class="form-control" placeholder="" value="" />
						</div>
					</div>
					<div class="form-group row">
						<label for="txtRazonSocialFiscal" class="col-md-2">Razón Social</label>
						<div class="col-md-9">
							<input id="txtRazonSocialFiscal" name="txtRazonSocialFiscal" class="form-control" value="" />
						</div>
					</div>
					<div class="form-group row">
						<label for="txtCalle" class="col-md-2">Calle</label>
						<div class="col-md-9">
							<input id="txtCalle" name="txtCalle" class="form-control" value="" />
						</div>
					</div>
					<div class="form-group row">
						<label for="txtInterno" class="col-md-2">Núm. Interno</label>
						<div class="col-md-5">
							<input id="txtInterno" name="txtInterno" class="form-control" value="" />
						</div>
					</div>
					<div class="form-group row">
						<label for="txtExterno" class="col-md-2">Num. Externo</label>
						<div class="col-md-5">
							<input id="txtExterno" name="txtExterno" class="form-control" value="" />
						</div>
					</div>
					<div class="form-group row">
						<label for="txtColonia" class="col-md-2">Colonia</label>
						<div class="col-md-9">
							<input id="txtColonia" name="txtColonia" class="form-control" value="" />
						</div>
					</div>
					<div class="form-group row">
						<label for="txtLocalidad" class="col-md-2">Localidad</label>
						<div class="col-md-9">
							<input id="txtLocalidad" name="txtLocalidad" class="form-control" value="" />
						</div>
					</div>
					<div class="form-group row">
						<label for="txtMunicipio" class="col-md-2">Municipio</label>
						<div class="col-md-9">
							<input id="txtMunicipio" name="txtMunicipio" class="form-control" value="" />
						</div>
					</div>
					<div class="form-group row">
						<label for="txtEstado" class="col-md-2">Estado</label>
						<div class="col-md-9">
							<input id="txtEstado" name="txtEstado" class="form-control" value="" />
						</div>
					</div>
					<div class="form-group row">
						<label for="txtCodigoPostal" class="col-md-2">Código Postal</label>
						<div class="col-md-5">
							<input id="txtCodigoPostal" name="txtCodigoPostal" class="form-control" maxlength="5" value="x" />
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
</div><?php }} ?>