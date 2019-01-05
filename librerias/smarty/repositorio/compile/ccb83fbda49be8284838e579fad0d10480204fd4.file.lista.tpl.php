<?php /* Smarty version Smarty-3.1.11, created on 2018-10-03 10:54:24
         compiled from "templates/plantillas/modulos/ordenes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17863478595b993d1ed57271-09584104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccb83fbda49be8284838e579fad0d10480204fd4' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/lista.tpl',
      1 => 1538582062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17863478595b993d1ed57271-09584104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b993d1edfc594_42340913',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b993d1edfc594_42340913')) {function content_5b993d1edfc594_42340913($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Folio</th>
			<th>Fecha del servicio</th>
			<th>Cliente</th>
			<th>Horas</th>
			<th>Cobrado</th>
			<th>Estado</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
">
				<td style="border-left: 3px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['folio'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['razonsocial'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['horas'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
				<td class="text-center" style="color: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
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