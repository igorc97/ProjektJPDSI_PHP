<?php
/* Smarty version 4.1.0, created on 2022-08-17 15:54:46
  from 'C:\xampp\htdocs\projektPHP\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62fcf326b46fc8_33881446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f3bc74de120c9b21a3ff3f995a78fe688ec7a64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\LoginView.tpl',
      1 => 1660744484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62fcf326b46fc8_33881446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122808097562fcf326b42962_67814955', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_122808097562fcf326b42962_67814955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_122808097562fcf326b42962_67814955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section>
    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'login'),$_smarty_tpl ) );?>
" method="post" class="pure-form pure-form-aligned bottom-margin">
        <legend><p style="text-align: center;">Logowanie do systemu</p></legend>
        <fieldset>
            <div class="row gtr-uniform gtr-50">
                <div class="col-6 col-12-mobilep">
                    <p style="text-align: center"><label for="id_login">Login: </label></p>
                    <input id="login" type="text" name="login" value="" placeholder="Login"/>
                </div>
                <div class="col-6 col-12-mobilep">
                    <p style="text-align: center"><label for="pass">Hasło: </label></p>
                    <input id="pass" type="password" name="pass" value="" placeholder="Hasło" />
                </div>
            </div>
            <div class="col-12">
                <p class="actions">
                    <p style="text-align: center"><input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/></p>

            </div>
            <br>
            <br>
            <br>
            <br>
            <br>

        </fieldset>
    </form>
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>
<?php
}
}
/* {/block 'content'} */
}
