<?php
/* Smarty version 4.1.0, created on 2022-08-31 13:17:22
  from 'C:\xampp\htdocs\projektPHP\app\views\BookAddView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_630f434212f169_07902789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c46647ea2160f4d36c95dd635c68611de85c2b25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\BookAddView.tpl',
      1 => 1661944640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_630f434212f169_07902789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_922278681630f4342128435_44335988', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_922278681630f4342128435_44335988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_922278681630f4342128435_44335988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

</br>
    <p><b><h1 style="text-align: center">Formularz dodawania nowego produktu</h1></b></p>
    <hr>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addBook" method="post">

        <p style="text-align: center"><label for="title"><b>Tytuł</b></label></p>
    <input id="title" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->title;?>
" />
        <br>


        <p style="text-align: center"><label for="author"><b>Autor</b></label></p>
    <input id="author" type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->author;?>
" />
    <br>


        <p style="text-align: center"><label for="isbn"><b>ISBN</b></label></p>
    <input id="isbn" type="text" name="isbn" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->isbn;?>
" />
        <br>


        <p style="text-align: center"><label for="publishingHouse"><b>Wydawnictwo</b></label></p>
    <input id="publishingHouse" type="text" name="publishingHouse" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->publishingHouse;?>
" />
        <br>


        <p style="text-align: center"><label for="releaseDate"><b>Data wydania</b></label></p>
    <p style="text-align: center"><input id="releaseDate" type="date" name="releaseDate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->releaseDate;?>
" /></p>
        <br>


        <p style="text-align: center"><label for="price"><b>Cena</b></label></p>
    <input id="price" type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->price;?>
" />
        <br>


        <p style="text-align: center"><label for="availability"><b>Dostępność</b></label></p>
    <input id="availability" type="text" name="availability" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->availability;?>
" />
        <br>


        <p style="text-align: center"><label for="description"><b>Opis</b></label></p>
    <input id="description" type="text" name="description" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
" />
        <br>

    <center><input type="submit" name="create" value="Utwórz" /></center>
        <br>
    </form>
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <br/><br/><br/><br/>
<?php
}
}
/* {/block 'content'} */
}
