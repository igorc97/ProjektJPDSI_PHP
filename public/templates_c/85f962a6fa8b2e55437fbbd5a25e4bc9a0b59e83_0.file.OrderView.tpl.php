<?php
/* Smarty version 4.1.0, created on 2022-08-31 12:30:01
  from 'C:\xampp\htdocs\projektPHP\app\views\OrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_630f3829ad13b3_70107543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f962a6fa8b2e55437fbbd5a25e4bc9a0b59e83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\OrderView.tpl',
      1 => 1661350325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630f3829ad13b3_70107543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1907954318630f3829acd347_09737716', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1907954318630f3829acd347_09737716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1907954318630f3829acd347_09737716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section>
<div style="text-align: center;">
    <h2>Dziękujemy za złożenie zamówienia</h2>
</div>
<div style="text-align: center;">
    <h3>Twoja książka została wysłana i już do Ciebie zmierza</h3>
</div>
<div style="text-align: center;">
    <h2>Spodziewaj się jej: <?php echo $_smarty_tpl->tpl_vars['dateOfRec']->value;?>
</h2>
</div>
<p style="margin-left:45%; margin-right:50%;">
<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookList'),$_smarty_tpl ) );?>
" class="button primary" style="position: center;">Powrót</a>
</p>
</section>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php
}
}
/* {/block 'content'} */
}
