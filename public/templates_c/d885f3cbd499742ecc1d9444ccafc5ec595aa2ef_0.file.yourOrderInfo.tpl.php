<?php
/* Smarty version 4.1.0, created on 2022-08-29 14:14:25
  from 'C:\xampp\htdocs\projektPHP\app\views\yourOrderInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_630cada18e06e8_85120701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd885f3cbd499742ecc1d9444ccafc5ec595aa2ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\yourOrderInfo.tpl',
      1 => 1661775264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630cada18e06e8_85120701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_307097880630cada18db489_16103573', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_307097880630cada18db489_16103573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_307097880630cada18db489_16103573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <center>
    <section style="padding-top: 1em; padding-bottom: 1em">

       
        <p>
            <strong>Data złożenia zamówienia:</strong> <?php echo $_smarty_tpl->tpl_vars['myorder']->value["dateOfOrder"];?>

        </p>
        <p>
            <strong>Przybliżona data przybycia zamówienia:</strong> <?php echo $_smarty_tpl->tpl_vars['myorder']->value["dateOfReceive"];?>
 <br/>             
       
        </p>
        
<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'yourOrder'),$_smarty_tpl ) );?>
" class="button primary" style="position: center;">Powrót</a>
    </section> 
    </center>

<br/><br/><br/><br/><br/><br/><br/>
<?php
}
}
/* {/block 'content'} */
}
