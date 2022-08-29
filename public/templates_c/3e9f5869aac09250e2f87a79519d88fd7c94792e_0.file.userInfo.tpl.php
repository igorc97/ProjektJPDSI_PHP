<?php
/* Smarty version 4.1.0, created on 2022-08-29 16:10:32
  from 'C:\xampp\htdocs\projektPHP\app\views\userInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_630cc8d862f287_47997038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e9f5869aac09250e2f87a79519d88fd7c94792e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\userInfo.tpl',
      1 => 1661782223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630cc8d862f287_47997038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_350819952630cc8d86292a8_16378557', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_350819952630cc8d86292a8_16378557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_350819952630cc8d86292a8_16378557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style="padding-top: 1em; padding-bottom: 1em">

         
        <p>
            <strong>Imię:</strong> <?php echo $_smarty_tpl->tpl_vars['userek']->value["name"];?>
 <br/>
            <strong>Imię:</strong> <?php echo $_smarty_tpl->tpl_vars['userek']->value["surname"];?>
 <br/>
        </p>
        <p>
            <strong>Data urodzin:</strong> <?php echo $_smarty_tpl->tpl_vars['userek']->value["birthdate"];?>
 <br/>             
            <strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['userek']->value["email"];?>
 <br/>
            <strong>login:</strong> <?php echo $_smarty_tpl->tpl_vars['userek']->value["login"];?>
 <br/>
            <strong>Hasło:</strong> <?php echo $_smarty_tpl->tpl_vars['userek']->value["pass"];?>
 <br/>
        </p>
<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'userList'),$_smarty_tpl ) );?>
" class="button primary" style="position: center;">Powrót</a>
    </section> 


<br/><br/><br/><br/><br/><br/><br/>
<?php
}
}
/* {/block 'content'} */
}
