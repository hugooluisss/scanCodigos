<?php /* Smarty version Smarty-3.1.11, created on 2018-10-17 23:06:29
         compiled from "templates/plantillas/modulos/runners/listaMovimientos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1605568255bc805e19951d2-13959302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f81b6c535844805a40fae2320bad3fbd207448e0' => 
    array (
      0 => 'templates/plantillas/modulos/runners/listaMovimientos.tpl',
      1 => 1539835439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1605568255bc805e19951d2-13959302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5bc805e1a50ac4_86952050',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc805e1a50ac4_86952050')) {function content_5bc805e1a50ac4_86952050($_smarty_tpl) {?><table id="tblMovimientos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Tipo</th>
			<th>Concepto</th>
			<th>Monto</th>
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
				<td style="border-left: 3px solid <?php if ($_smarty_tpl->tpl_vars['row']->value['tipo']=='C'){?>blue<?php }else{ ?>orange<?php }?>"><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
				<td class="text-center"><?php if ($_smarty_tpl->tpl_vars['row']->value['tipo']=='C'){?>Cargo<?php }else{ ?>Abono<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['concepto'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>
</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>