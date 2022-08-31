{extends file="main.tpl"}
{block name=content}
</br>
    <p><b><h1 style="text-align: center">Formularz dodawania nowego produktu</h1></b></p>
    <hr>
    <form action="{$conf->action_root}addBook" method="post">

        <p style="text-align: center"><label for="title"><b>Tytuł</b></label></p>
    <input id="title" type="text" name="title" value="{$form->title}" />
        <br>


        <p style="text-align: center"><label for="author"><b>Autor</b></label></p>
    <input id="author" type="text" name="author" value="{$form->author}" />
    <br>


        <p style="text-align: center"><label for="isbn"><b>ISBN</b></label></p>
    <input id="isbn" type="text" name="isbn" value="{$form->isbn}" />
        <br>


        <p style="text-align: center"><label for="publishingHouse"><b>Wydawnictwo</b></label></p>
    <input id="publishingHouse" type="text" name="publishingHouse" value="{$form->publishingHouse}" />
        <br>


        <p style="text-align: center"><label for="releaseDate"><b>Data wydania</b></label></p>
    <p style="text-align: center"><input id="releaseDate" type="date" name="releaseDate" value="{$form->releaseDate}" /></p>
        <br>


        <p style="text-align: center"><label for="price"><b>Cena</b></label></p>
    <input id="price" type="text" name="price" value="{$form->price}" />
        <br>


        <p style="text-align: center"><label for="availability"><b>Dostępność</b></label></p>
    <input id="availability" type="text" name="availability" value="{$form->availability}" />
        <br>


        <p style="text-align: center"><label for="description"><b>Opis</b></label></p>
    <input id="description" type="text" name="description" value="{$form->description}" />
        <br>

    <center><input type="submit" name="create" value="Utwórz" /></center>
        <br>
    </form>
    {include file='messages.tpl'}
    <br/><br/><br/><br/>
{/block}