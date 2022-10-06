<?php
/* Smarty version 4.2.1, created on 2022-10-01 23:24:35
  from 'C:\xampp\htdocs\proyectos\Web2\practico4\ej4\templates\showAll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6338b01324fe90_95589054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a851d24f7da377ff39abcbfe4eab916846f2928' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web2\\practico4\\ej4\\templates\\showAll.tpl',
      1 => 1664659467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6338b01324fe90_95589054 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
