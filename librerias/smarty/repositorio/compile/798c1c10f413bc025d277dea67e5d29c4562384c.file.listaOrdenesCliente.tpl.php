<?php /* Smarty version Smarty-3.1.11, created on 2018-10-17 22:26:16
         compiled from "templates/plantillas/modulos/ordenes/listaOrdenesCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18938568225ba1b42c3ef901-11633380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '798c1c10f413bc025d277dea67e5d29c4562384c' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/listaOrdenesCliente.tpl',
      1 => 1539833173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18938568225ba1b42c3ef901-11633380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ba1b42c53eb40_95899239',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba1b42c53eb40_95899239')) {function content_5ba1b42c53eb40_95899239($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Folio</th>
			<th>Fecha del servicio</th>
			<th>Horas</th>
			<th>Cobro</th>
			<th>Calificación</th>
			<th>Estado</th>
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
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['horas'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
				<td class="text-center">
					<?php if ($_smarty_tpl->tpl_vars['row']->value['idEstado']==4){?>
						<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int)ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_smarty_tpl->tpl_vars['row']->value['cliente']+1 - (1) : 1-($_smarty_tpl->tpl_vars['row']->value['cliente'])+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0){
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++){
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
							<i class="fa fa-star" aria-hidden="true"></i>
						<?php }} ?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['row']->value['idEstado']==3){?>
						<?php if ($_smarty_tpl->tpl_vars['row']->value['runner']==0){?>
							<button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#winCalificar" json='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>Calificar</button>
						<?php }?>
					<?php }?>
				</td>
				<td class="text-center" style="color: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>