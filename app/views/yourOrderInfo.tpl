{extends file="main.tpl"}

{block name=content}
    <center>
    <section style="padding-top: 1em; padding-bottom: 1em">

       
        <p>
            <strong>Data złożenia zamówienia:</strong> {$myorder["dateOfOrder"]}
        </p>
        <p>
            <strong>Przybliżona data przybycia zamówienia:</strong> {$myorder["dateOfReceive"]} <br/>             
       
        </p>
        
<a href="{url action = 'yourOrder'}" class="button primary" style="position: center;">Powrót</a>
    </section> 
    </center>

<br/><br/><br/><br/><br/><br/><br/>
{/block}
