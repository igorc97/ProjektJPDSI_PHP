{extends file="main.tpl"}
{block name=content}
    <h1 style="text-align: center">Rejestracja</h1>
    <p style="text-align: center">Szanowny użytkowniku w celu rejestracji konta w serwisie należy wypełnić poniższe pola.</p>
    <hr>
    <form action="{$conf->action_root}register" method="post">
        <p style="text-align: center"><label for="name"><b>Imię</b></label></p>
    <input id="name" type="text" name="name" value="{$formr->name}" />
        <br>
        <p style="text-align: center"><label for="surname"><b>Nazwisko</b></label></p>
    <input id="surname" type="text" name="surname" value="{$formr->surname}" />
    <br>
        <p style="text-align: center"><label for="email"><b>Email</b></label></p>
    <input id="email" type="text" name="email" value="{$formr->email}" />
        <br>
        <p style="text-align: center"><label for="birthDate"><b>Data urodzenia</b></label></p>
        <p style="text-align: center"><input id="birthDate" type="date" name="birthDate" value="{$formr->birthDate}" /></p>
        <br>
        <p style="text-align: center"><label for="login"><b>Nazwa użytkownika</b></label></p>
    <input id="login" type="text" name="login" value="{$formr->login}" />
        <br>
        <p style="text-align: center"><label for="pass"><b>Hasło</b></label></p>
    <input id="pass" type="password" name="pass" value="{$formr->pass}" />
        <br>
    <input type="submit" name="create" value="Utwórz" />
        <br>
    </form>
    {include file='messages.tpl'}
{/block}