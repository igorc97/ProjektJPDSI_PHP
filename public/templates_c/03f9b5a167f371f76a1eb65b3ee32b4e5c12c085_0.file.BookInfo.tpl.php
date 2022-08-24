<?php
/* Smarty version 4.1.0, created on 2022-08-23 15:07:52
  from 'C:\xampp\htdocs\projektPHP\app\views\BookInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6304d128b4c320_85175216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03f9b5a167f371f76a1eb65b3ee32b4e5c12c085' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\BookInfo.tpl',
      1 => 1661260058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6304d128b4c320_85175216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16726733366304d128b448a2_90972125', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_16726733366304d128b448a2_90972125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16726733366304d128b448a2_90972125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style="padding-top: 1em; padding-bottom: 1em">

        <h3 class="content"><?php echo $_smarty_tpl->tpl_vars['book']->value["title"];?>
</h3>   
        <p>
            <strong>Kod tytułu:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["isbn"];?>

        </p>
        <p>
            <strong>Autor:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["author"];?>
 <br/>             
            <strong>Wydawnictwo:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["publishingHouse"];?>
 <br/>
            <strong>Data wydania:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["releaseDate"];?>
 <br/>
            <strong>Cena:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["price"];?>
 <br/>
        </p>
        <p>
            <strong>Dostępność:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["availability"];?>
 <br/>
            <strong>Opis:</strong> <?php echo $_smarty_tpl->tpl_vars['book']->value["description"];?>
 <br/>
        </p>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'buy'),$_smarty_tpl ) );?>
" class="button primary" style="position: center;">Zamów</a>
<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookList'),$_smarty_tpl ) );?>
" class="button primary" style="position: center;">Powrót</a>
    </section> 


<br/><br/><br/><br/><br/><br/><br/>
<?php
}
}
/* {/block 'content'} */
}
