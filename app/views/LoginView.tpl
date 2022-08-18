{extends file="main.tpl"}

{block name=content}
<section>
    <form action="{rel_url action = 'login'}" method="post" class="pure-form pure-form-aligned bottom-margin">
        <legend><p style="text-align: center;">Logowanie do systemu</p></legend>
        <fieldset>
            <div class="row gtr-uniform gtr-50">
                <div class="col-6 col-12-mobilep">
                    <p style="text-align: center"><label for="id_login">Login: </label></p>
                    <input id="login" type="text" name="login" value="" placeholder="Login"/>
                </div>
                <div class="col-6 col-12-mobilep">
                    <p style="text-align: center"><label for="pass">Hasło: </label></p>
                    <input id="pass" type="password" name="pass" value="" placeholder="Hasło" />
                </div>
            </div>
            <div class="col-12">
                <p class="actions">
                    <p style="text-align: center"><input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/></p>

            </div>
            <br>
            <br>
            <br>
            <br>
            <br>

        </fieldset>
    </form>
    {include file='messages.tpl'}
    </section>
{/block}