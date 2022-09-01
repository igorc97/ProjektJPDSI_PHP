{extends file="main.tpl"}
<br/>
<br/>
<br/>
<br/>
<br/>
{block name=content}
    
    <section style="padding-top: 1em; padding-bottom: 1em">

       
        <form id="form" onsubmit="ajaxPostForm('form','{$conf->action_root}bookListPart','data'); return false;">
             <div class="row gtr-uniform" style="padding-bottom:0.75em">
                 <div class="col-12">
                     <input type="text" name="title" id="title" value="{$searchForm->title}" placeholder="Tytuł szukanej książki" />
                 </div>							
             </div>
             <input type="submit" value="Szukaj" class="primary">
             <a onclick="document.getElementById('form').reset(); ajaxPostForm('form','{$conf->action_root}bookListPart','data')" class="button">Wyczyść filtr</a>
         </form>

    </section>
<div id="data">
    {include file = "bookListPart.tpl"}
    </div>
 <br/><br/><br/><br/><br/><br/>           
{/block}
<br/><br/><br/><br/><br/><br/>
