{extends file="main.tpl"}

{block name=content}
    
    <section style="padding-top: 1em; padding-bottom: 1em">

         
        <p>
            <strong>Imię:</strong> {$userek["name"]} <br/>
            <strong>Imię:</strong> {$userek["surname"]} <br/>
        </p>
        <p>
            <strong>Data urodzin:</strong> {$userek["birthdate"]} <br/>             
            <strong>Email:</strong> {$userek["email"] } <br/>
            <strong>login:</strong> {$userek["login"] } <br/>
            <strong>Hasło:</strong> {$userek["pass"]} <br/>
        </p>
<a href="{url action = 'userList'}" class="button primary" style="position: center;">Powrót</a>
    </section> 


<br/><br/><br/><br/><br/><br/><br/>
{/block}
