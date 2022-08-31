{extends file="main.tpl"}

{block name=content}
    
    <section style="padding-top: 1em; padding-bottom: 1em">

        <h3 class="content">{$book["title"]}</h3>   
        <p>
            <strong>Kod tytułu:</strong> {$book["isbn"]}
        </p>
        <p>
            <strong>Autor:</strong> {$book["author"]} <br/>             
            <strong>Wydawnictwo:</strong> {$book["publishingHouse"] } <br/>
            <strong>Data wydania:</strong> {$book["releaseDate"] } <br/>
            <strong>Cena:</strong> {$book["price"]} <br/>
        </p>
        <p>
            <strong>Dostępność:</strong> {$book["availability"]} <br/>
            <strong>Opis:</strong> {$book["description"]} <br/>
        </p>
        
        <a onclick="confirmLink('{$conf->action_url}buy', 'Czy na pewno chcesz zamówić ten przemdmiot? ')" class="button primary" style="position: center;">Zamów</a>
<a href="{url action = 'bookList'}" class="button primary" style="position: center;">Powrót</a>
    </section> 


<br/><br/><br/><br/><br/><br/><br/>
{/block}
