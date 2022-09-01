<?php
/* Smarty version 4.1.0, created on 2022-09-01 12:49:18
  from 'C:\xampp\htdocs\projektPHP\app\views\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63108e2eaa8311_05664613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdd4184ee6c48a82bec521e9dfd4dd72e18c7912' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\contact.tpl',
      1 => 1662029193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63108e2eaa8311_05664613 (Smarty_Internal_Template $_smarty_tpl) {
?>       <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
       <section id="main" class="container">
        <header>
			<h2>Skontaktuj się z nami!</h2>
			<p>Jeśli masz jakiekolwiek pytanie napisz do nas a my odpowiemy najszybciej jak to możliwe.</br>Dodatkowo możesz do nas zadzwonić.</p>
		</header>
		<div class="box">
			<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sendEmail">
				<div class="row gtr-50 gtr-uniform">
					<div class="col-6 col-12-mobilep">
						<input type="text" name="name" id="name" value="" placeholder="Imię" />
					</div>
					<div class="col-6 col-12-mobilep">
						<input type="email" name="email" id="email" value="" placeholder="Email" />
					</div>
					<div class="col-12">
						<input type="text" name="subject" id="subject" value="" placeholder="Temat" />
					</div>
					<div class="col-12">
						<textarea name="message" id="message" placeholder="Wpisz swoją wiadomość" rows="6"></textarea>
					</div>
					<div class="col-12">
						<ul class="actions special">
							<li><input type="submit" value="Wyślij" /></li>
						</ul>
						<p>Nasz numer kontaktowy: +48 111-222-333  i  +48 444-555-666</p>
					</div>
				</div>
			</form>
		</div>
        </section><?php }
}
