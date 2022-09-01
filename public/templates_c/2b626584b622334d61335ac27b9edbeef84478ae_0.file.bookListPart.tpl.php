<?php
/* Smarty version 4.1.0, created on 2022-09-01 14:07:56
  from 'C:\xampp\htdocs\projektPHP\app\views\bookListPart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6310a09c2f8ea2_59688928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b626584b622334d61335ac27b9edbeef84478ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\bookListPart.tpl',
      1 => 1662033852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6310a09c2f8ea2_59688928 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/><br/>


<section style = "padding-top: 1em; padding-bottom: 1em">

        <?php ob_start();
echo $_smarty_tpl->tpl_vars['numRecords']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 0) {?>
            <table class="default">
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <tr><td style="width: 90%"><?php echo $_smarty_tpl->tpl_vars['r']->value["title"];?>
</td><td style="width: 10%"><center><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookInfo'),$_smarty_tpl ) );?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['idBook'];?>
" class="pure-button pure-button-primary">Informacje</a></center></td><?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->Role_idRole;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "1") {?><td style="width: 10%"><center><a onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
bookDelete/<?php echo $_smarty_tpl->tpl_vars['r']->value['idBook'];?>
', 'Czy na pewno chcesz usunąć rekord? ')" class="button primary">Usuń</a></center></td><?php }?></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
                
            <form method="post">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['searchForm']->value->title;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
                    <input type="hidden" name="title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->title;?>
">
                <?php }?>
     
                <center>
                    <button class="primary" formaction="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bookList",'p'=>1),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 1) {?>disabled<?php }?>> &lt;&lt; </button>
                    <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value-1;
$_prefixVariable5 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bookList",'p'=>$_prefixVariable5),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value-1;
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 == 0) {?>disabled<?php }?>> &lt; </button>
                    <span style="margin:5%">Strona <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['lastPage']->value-1;?>
</span>
                    <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value+1;
$_prefixVariable7 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bookList",'p'=>$_prefixVariable7),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value+1;
$_prefixVariable8 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value;
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable8 == $_prefixVariable9) {?>disabled<?php }?>> &gt; </button>
                    <button class="primary" formaction="<?php ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable10 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"bookList",'p'=>$_prefixVariable10),$_smarty_tpl ) );?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable11 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable11 == $_prefixVariable12) {?>disabled<?php }?>> &gt;&gt; </button>
                </center>
            </form>
        <?php } else { ?>
            <h4>Nie znaleziono szukanych tytułów w bibliotece.</h4>
        <?php }?>

    </section>



<br/><br/><br/><br/><br/><br/>
<?php }
}
