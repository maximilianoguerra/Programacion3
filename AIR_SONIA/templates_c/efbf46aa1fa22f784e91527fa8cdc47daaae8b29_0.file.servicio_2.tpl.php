<?php
/* Smarty version 3.1.31, created on 2018-06-25 17:11:48
  from "C:\xampp\htdocs\proyectos\c6\templates\servicio_2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b310634a1e780_23765136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efbf46aa1fa22f784e91527fa8cdc47daaae8b29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\c6\\templates\\servicio_2.tpl',
      1 => 1529939497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:filtro_servicio_2.tpl' => 1,
  ),
),false)) {
function content_5b310634a1e780_23765136 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cuerpo">
   <h1>menú</h1>

   <?php $_smarty_tpl->_subTemplateRender("file:filtro_servicio_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


   <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
   <div class="alert alert-danger row" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
   <?php }?>








<?php if (!empty($_smarty_tpl->tpl_vars['ciudad']->value) && !empty($_smarty_tpl->tpl_vars['fecha1']->value) && !empty($_smarty_tpl->tpl_vars['fecha2']->value)) {?>

<h2> los departamentos disponibles en

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ciudades']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
     <?php if (($_smarty_tpl->tpl_vars['ciudad']->value == $_smarty_tpl->tpl_vars['c']->value['id_ciudad'])) {?>
    <?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>

     <?php }?>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

 entre  <?php echo $_smarty_tpl->tpl_vars['fecha1']->value;?>
 y <?php echo $_smarty_tpl->tpl_vars['fecha2']->value;?>
 son </h2>

<div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <table class="dpto" id = "<?php echo $_smarty_tpl->tpl_vars['ciudades']->value['nombre'];?>
" >
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departamentos']->value, 'departamento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['departamento']->value) {
?>
      <tr>
         <td id="descripcion" class = "descripcion" ><?php echo $_smarty_tpl->tpl_vars['departamento']->value['descripcion'];?>
  </td>
   <td id="descripcion" class = "celda_precio" ><?php echo $_smarty_tpl->tpl_vars['departamento']->value['superficie'];?>
  Mts2</td>
   <td id="descripcion" class = "celda_precio" >$ <?php echo $_smarty_tpl->tpl_vars['departamento']->value['precio_noche'];?>
  </td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

   </table>

</div>
    <?php }?>

</div>
<?php }
}
