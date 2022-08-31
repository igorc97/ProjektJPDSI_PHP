<?php
/* Smarty version 4.1.0, created on 2022-08-31 14:11:26
  from 'C:\xampp\htdocs\projektPHP\app\views\moreInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_630f4fee62a652_96863456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3909d343b5c8cf34d325b35555165fc11d0c7e3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\moreInfo.tpl',
      1 => 1661947882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_630f4fee62a652_96863456 (Smarty_Internal_Template $_smarty_tpl) {
?>


    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <section id="main" class="container">
	
			<h3>Informacje wstępne</h3>
			<p>Witam w internetowej księgarni! Strona została stworzona do umożliwienia zakupów internetowych. Klient chcący złożyć zamówienie jest zobligowany do zarejestrowania/zalogowania się na stronie. Każdy klient może złożyć więcej niż jedno zamówienie. </p>
			<!--TODO: Informacje-->
			<div class="row">
				<div class="row-6 row-12-mobilep">
					<h3><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'yourOrder'),$_smarty_tpl ) );?>
">Twoje zamówienia</a></h3>
					<p>Kliknij powyżej aby przejść do swoich zamówień</p>
				</div>
				<div class="row-6 row-12-mobilep">
					<h3>Kontakt z pracownikiem</h3>
					<p>Jeśli masz jakikolwiek problem skontaktuj się z naszym pracownikiem lub <a onclick="loadPage('main', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"contact"),$_smarty_tpl ) );?>
')">napisz do nas</a>.</p>
				</div>
			</div>
		</div>
	</section>


<br/><br/><br/><br/><br/>

<?php }
}
