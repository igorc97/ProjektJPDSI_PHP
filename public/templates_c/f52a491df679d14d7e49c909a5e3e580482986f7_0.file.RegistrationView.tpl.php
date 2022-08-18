<?php
/* Smarty version 4.1.0, created on 2022-08-17 16:42:15
  from 'C:\xampp\htdocs\projektPHP\app\views\RegistrationView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62fcfe47bca1d3_62763021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f52a491df679d14d7e49c909a5e3e580482986f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\RegistrationView.tpl',
      1 => 1660747245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62fcfe47bca1d3_62763021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89462278262fcfe47bc3996_44335938', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_89462278262fcfe47bc3996_44335938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_89462278262fcfe47bc3996_44335938',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 style="text-align: center">Rejestracja</h1>
    <p style="text-align: center">Szanowny użytkowniku w celu rejestracji konta w serwisie należy wypełnić poniższe pola.</p>
    <hr>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">
        <p style="text-align: center"><label for="name"><b>Imię</b></label></p>
    <input id="name" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['formr']->value->name;?>
" />
        <br>
        <p style="text-align: center"><label for="surname"><b>Nazwisko</b></label></p>
    <input id="surname" type="text" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['formr']->value->surname;?>
" />
    <br>
        <p style="text-align: center"><label for="email"><b>Email</b></label></p>
    <input id="email" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['formr']->value->email;?>
" />
        <br>
        <p style="text-align: center"><label for="birthDate"><b>Data urodzenia</b></label></p>
        <p style="text-align: center"><input id="birthDate" type="date" name="birthDate" value="<?php echo $_smarty_tpl->tpl_vars['formr']->value->birthDate;?>
" /></p>
        <br>
        <p style="text-align: center"><label for="login"><b>Nazwa użytkownika</b></label></p>
    <input id="login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['formr']->value->login;?>
" />
        <br>
        <p style="text-align: center"><label for="pass"><b>Hasło</b></label></p>
    <input id="pass" type="password" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['formr']->value->pass;?>
" />
        <br>
    <input type="submit" name="create" value="Utwórz" />
        <br>
    </form>
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
