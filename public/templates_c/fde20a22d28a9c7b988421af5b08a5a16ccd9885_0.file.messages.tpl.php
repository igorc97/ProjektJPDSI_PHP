<?php
/* Smarty version 4.1.0, created on 2022-08-17 13:45:23
  from 'C:\xampp\htdocs\projektPHP\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62fcd4d36540b4_87717001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde20a22d28a9c7b988421af5b08a5a16ccd9885' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\templates\\messages.tpl',
      1 => 1660736597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fcd4d36540b4_87717001 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<section style="padding-top: 1em; padding-bottom: 1em">
    <div class="messages err">
        <ol>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
    </div>
    </section>
<?php }
if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<section style="padding-top: 1em; padding-bottom: 1em">
    <div class="messages inf bottom-margin">
        <ol>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
    </div>
    </section>
<?php }
}
}
