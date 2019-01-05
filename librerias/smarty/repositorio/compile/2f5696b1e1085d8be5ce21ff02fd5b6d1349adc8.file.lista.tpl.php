<?php /* Smarty version Smarty-3.1.11, created on 2018-10-17 22:50:17
         compiled from "templates/plantillas/modulos/runners/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21330725575b7f82ace786d5-48977427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f5696b1e1085d8be5ce21ff02fd5b6d1349adc8' => 
    array (
      0 => 'templates/plantillas/modulos/runners/lista.tpl',
      1 => 1539834571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21330725575b7f82ace786d5-48977427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b7f82ad043226_54717766',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7f82ad043226_54717766')) {function content_5b7f82ad043226_54717766($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Teléfono</th>
			<th>Género</th>
			<th>Saldo</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr title="<?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
">
				<td style="border-left: 3px solid <?php if ($_smarty_tpl->tpl_vars['row']->value['situacion']==1){?>blue<?php }else{ ?>orange<?php }?>"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['correo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</td>
				<td class="text-center">
					<?php if ($_smarty_tpl->tpl_vars['row']->value['sexo']=='H'){?>
						<i class="fas fa-male"></i>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['row']->value['sexo']=='M'){?>
						<i class="fas fa-female"></i>
					<?php }?>
				</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['saldo'];?>
</td>
				<td class="text-right">
					<button type="button" class="btn btn-default btn-xs" title="Movimientos" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idRunner'];?>
" data-toggle="modal" data-target="#winMov"><i class="fa fa-list" aria-hidden="true"></i></button>
					<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-edit"></i></button>
					<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idRunner'];?>
"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>