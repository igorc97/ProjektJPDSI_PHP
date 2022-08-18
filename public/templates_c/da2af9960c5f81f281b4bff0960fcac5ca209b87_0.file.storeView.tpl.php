<?php
/* Smarty version 4.1.0, created on 2022-08-17 17:12:07
  from 'C:\xampp\htdocs\projektPHP\app\views\storeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62fd05474cb034_92912371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da2af9960c5f81f281b4bff0960fcac5ca209b87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektPHP\\app\\views\\storeView.tpl',
      1 => 1660749123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fd05474cb034_92912371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148912093962fd05474ca8e6_41087904', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_148912093962fd05474ca8e6_41087904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_148912093962fd05474ca8e6_41087904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="table-wrapper">
        <table>
            <thead>
            <tr>
                <th>Tytuł</th>
                <th>Opis</th>
                <th>Cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Harry Potter i Kamień Filozoficzny</td>
                <td>W dniu jedenastych urodzin Harry dowiaduje się, że jest czarodziejem. Czeka na niego szkoła magii pełna tajemnic.</td>
                <td>19.99</td>
                <td><a href="#" class="button alt">Kup teraz!</a></td>
            </tr>
            <tr>
                <td>Harry Potter i Komnata Tajemnic</td>
                <td>W Hogwarcie dochodzi do tajemniczych ataków na uczniów. Tymczasem Harry'ego prześladuje dziwny głos, którego nikt, poza nim, nie słyszy.</td>
                <td>29.99</td>
                <td><a href="#" class="button alt">Kup teraz!</a></td>
            </tr>
            <tr>
                <td>Harry Potter i Wiezień Azkabanu</td>
                <td>Z więzienia ucieka Syriusz Black, Harry nie może już czuć się bezpiecznie w szkole.</td>
                <td>29.99</td>
                <td><a href="#" class="button alt">Kup teraz!</a></td>
            </tr>
            <tr>
                <td>Harry Potter i Czara Ognia</td>
                <td>Harry Potter musi wziąć udział w Turnieju Trójmagicznym, kiedy jego nazwisko zostaje wybrane przez tajemniczą Czarę Ognia.</td>
                <td>39.99</td>
                <td><a href="#" class="button alt">Kup teraz!</a></td>
            </tr>
            <tr>
                <td>Harry Potter i Zakon Feniksa</td>
                <td>Harry i jego przyjaciele zakładają tajne stowarzyszenie "Gwardię Dumbledore'a", aby przygotować się do starcia z Voldemortem.</td>
                <td>49.99</td>
                <td><a href="#" class="button alt">Kup teraz!</a></td>
            </tr>
            <tr>
                <td>Harry Potter i Książe Półkrwi</td>
                <td>Harry, by ostatecznie pokonać Voldemorta, musi poznać jego przeszłość.</td>
                <td>49.99</td>
                <td><a href="#" class="button alt">Kup teraz!</a></td>
            </tr>
            <tr>
                <td>Harry Potter i Insygnia Śmierci</td>
                <td>Młody czarodziej musi zniszczyć wszystkie horkruksy, aby ostatecznie pokonać Voldemorta.</td>
                <td>59.99</td>
                <td><a href="#" class="button alt">Kup teraz!</a></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="2"></td>
            </tr>
            </tfoot>
        </table>
       
    </div>
<?php
}
}
/* {/block 'content'} */
}
