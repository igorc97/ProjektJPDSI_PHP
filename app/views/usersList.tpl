{extends file="main.tpl"}

{block name=content}
<p><b><center>Lista użytkowników</center></b></p>
 <section style = "padding-top: 1em; padding-bottom: 1em">

        {if {$numRecords} > 0}
            <table class="default">
                <tbody>
                    {foreach $records as $r}
                    {strip}
                        <tr>
                            <td style="width: 10%">{$r["idUser"]}</td>
                            <td style="width: 90%">{$r["name"]}</td>
                            <td style="width: 90%">{$r["surname"]}</td>
                            <td style="width: 10%"><center><a href="{url action = 'userInfo'}/{$r['idUser']}" class="pure-button pure-button-primary">Informacje</a></center></td>
                        </tr>
                    {/strip}
                    {/foreach}
                </tbody>
            </table>
                 
                <center>
                    <button class="primary" formaction="{url action = "userList" p = 1}" {if {$page}==1}disabled{/if}> &lt;&lt; </button>
                    <button class="primary" formaction="{url action = "userList" p = {$page-1}}" {if {$page-1}==0}disabled{/if}> &lt; </button>
                    <span style="margin:5%">Strona {$page} z {$lastPage-1}</span>
                    <button class="primary" formaction="{url action = "userList" p = {$page+1}}" {if {$page+1}=={$lastPage}}disabled{/if}> &gt; </button>
                    <button class="primary" formaction="{url action = "userList" p = {$lastPage-1}}" {if {$page}=={$lastPage-1}}disabled{/if}> &gt;&gt; </button>
                </center>
            </form>
        {else}
            <h4><center>Nie znaleziono szukanych osób w bibliotece.</center></h4>
        {/if}
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
    </section>

{/block}
