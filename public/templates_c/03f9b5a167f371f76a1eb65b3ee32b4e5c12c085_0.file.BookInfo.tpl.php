<?php
/* Smarty version 4.1.0, created on 2022-08-31 12:29:57
  from 'C:\xampp\htdocs\projektPHP\app\views\BookInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_630f3825b8be07_77951628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03f9b5a167f371f76a1eb65b3ee32b4e5c12c085' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\BookInfo.tpl',
      1 => 1661941788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630f3825b8be07_77951628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_565331461630f3825b84a22_43987393', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_565331461630f3825b84a22_43987393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_565331461630f3825b84a22_43987393',
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
        
        <a onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
buy', 'Czy na pewno chcesz zamówić ten przemdmiot? ')" class="button primary" style="position: center;">Zamów</a>
<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'bookList'),$_smarty_tpl ) );?>
" class="button primary" style="position: center;">Powrót</a>
    </section> 


<br/><br/><br/><br/><br/><br/><br/>
<?php
}
}
/* {/block 'content'} */
}
