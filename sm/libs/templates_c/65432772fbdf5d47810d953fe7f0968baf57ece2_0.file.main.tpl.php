<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-11 13:27:34
  from "C:\open_server_5_2_5_ultimate\OpenServer\domains\localhost\sm\libs\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-19',
  'unifunc' => 'content_598d8696d53ea6_51310650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65432772fbdf5d47810d953fe7f0968baf57ece2' => 
    array (
      0 => 'C:\\open_server_5_2_5_ultimate\\OpenServer\\domains\\localhost\\sm\\libs\\templates\\main.tpl',
      1 => 1502447252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598d8696d53ea6_51310650 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
<p>
    <!--Переданная переменная - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-->
    <!--<?php if ($_smarty_tpl->tpl_vars['name']->value == 'Vasya') {?>
    Переданная переменная - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

    <?php } else { ?>
    Другая переменная
    <?php }?>-->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arts']->value, 'itemvar', false, 'keyvar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyvar']->value => $_smarty_tpl->tpl_vars['itemvar']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['keyvar']->value;?>
 => <?php echo $_smarty_tpl->tpl_vars['itemvar']->value;?>
<br />
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</p>
</body>
</html><?php }
}
