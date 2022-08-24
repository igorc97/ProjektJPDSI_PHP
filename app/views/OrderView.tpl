{extends file="main.tpl"}
{block name=content}
<section>
<div style="text-align: center;">
    <h2>Dziękujemy za złożenie zamówienia</h2>
</div>
<div style="text-align: center;">
    <h3>Twoja książka została wysłana i już do Ciebie zmierza</h3>
</div>
<div style="text-align: center;">
    <h2>Spodziewaj się jej: {$dateOfRec}</h2>
</div>
<p style="margin-left:45%; margin-right:50%;">
<a href="{url action = 'bookList'}" class="button primary" style="position: center;">Powrót</a>
</p>
</section>
<br/>
<br/>
<br/>
<br/>
<br/>
{/block}