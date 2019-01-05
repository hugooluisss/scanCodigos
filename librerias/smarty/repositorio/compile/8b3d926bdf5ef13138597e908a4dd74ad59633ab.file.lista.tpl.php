<?php /* Smarty version Smarty-3.1.11, created on 2018-08-28 18:29:01
         compiled from "templates/plantillas/modulos/clientes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17424962755b85dabd75dcd9-65032109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3d926bdf5ef13138597e908a4dd74ad59633ab' => 
    array (
      0 => 'templates/plantillas/modulos/clientes/lista.tpl',
      1 => 1535498674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17424962755b85dabd75dcd9-65032109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b85dabd82d941_46336361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b85dabd82d941_46336361')) {function content_5b85dabd82d941_46336361($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Razón social</th>
			<th>Representante</th>
			<th>Correo</th>
			<th>Teléfono</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['razonsocial'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['representante'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['correo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</td>
				<td class="text-right">
					<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-edit"></i></button>
					<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idCliente'];?>
"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>