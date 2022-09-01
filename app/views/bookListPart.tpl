
<br/><br/>


<section style = "padding-top: 1em; padding-bottom: 1em">

        {if {$numRecords} > 0}
            <table class="default">
                <tbody>
                    {foreach $records as $r}
                    {strip}
                        <tr>
                            <td style="width: 90%">{$r["title"]}</td>
                            <td style="width: 10%"><center><a href="{url action = 'bookInfo'}/{$r['idBook']}" class="pure-button pure-button-primary">Informacje</a></center></td>
                            {if {$user->Role_idRole} == "1"}<td style="width: 10%"><center><a onclick="confirmLink('{$conf->action_url}bookDelete/{$r['idBook']}', 'Czy na pewno chcesz usunąć rekord? ')" class="button primary">Usuń</a></center></td>{/if}
                        </tr>
                    {/strip}
                    {/foreach}
                </tbody>
            </table>
                
            <form method="post">
                {if {$searchForm->title}}
                    <input type="hidden" name="title" value="{$searchForm->title}">
                {/if}
     
                <center>
                    <button class="primary" formaction="{url action = "bookList" p = 1}" {if {$page}==1}disabled{/if}> &lt;&lt; </button>
                    <button class="primary" formaction="{url action = "bookList" p = {$page-1}}" {if {$page-1}==0}disabled{/if}> &lt; </button>
                    <span style="margin:5%">Strona {$page} z {$lastPage-1}</span>
                    <button class="primary" formaction="{url action = "bookList" p = {$page+1}}" {if {$page+1}=={$lastPage}}disabled{/if}> &gt; </button>
                    <button class="primary" formaction="{url action = "bookList" p = {$lastPage-1}}" {if {$page}=={$lastPage-1}}disabled{/if}> &gt;&gt; </button>
                </center>
            </form>
        {else}
            <h4>Nie znaleziono szukanych tytułów w bibliotece.</h4>
        {/if}

    </section>



<br/><br/><br/><br/><br/><br/>
