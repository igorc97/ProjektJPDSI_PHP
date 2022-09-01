<?php
/* Smarty version 4.1.0, created on 2022-09-01 14:07:56
  from 'C:\xampp\htdocs\projektPHP\app\views\BookList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6310a09c297d16_22977162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '585fcb7e42ab48944b67467532f99eaf9b2ed915' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\BookList.tpl',
      1 => 1662033850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bookListPart.tpl' => 1,
  ),
),false)) {
function content_6310a09c297d16_22977162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13151210586310a09c292406_00855988', 'content');
?>

<br/><br/><br/><br/><br/><br/>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_13151210586310a09c292406_00855988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13151210586310a09c292406_00855988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section style="padding-top: 1em; padding-bottom: 1em">

       
        <form id="form" onsubmit="ajaxPostForm('form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
bookListPart','data'); return false;">
             <div class="row gtr-uniform" style="padding-bottom:0.75em">
                 <div class="col-12">
                     <input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->title;?>
" placeholder="Tytuł szukanej książki" />
                 </div>							
             </div>
             <input type="submit" value="Szukaj" class="primary">
             <a onclick="document.getElementById('form').reset(); ajaxPostForm('form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
bookListPart','data')" class="button">Wyczyść filtr</a>
         </form>

    </section>
<div id="data">
    <?php $_smarty_tpl->_subTemplateRender("file:bookListPart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
 <br/><br/><br/><br/><br/><br/>           
<?php
}
}
/* {/block 'content'} */
}
