{extends file="main.tpl"}
{block name = content}
    <h4>Produkt</h4>
    <div class="table-wrapper">
        <table class="alt">
            <thead>
            <tr>
                <th>Tytuł</th>
                <th>Opis</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Wydawnictwo</th>
                <th>Data wydania</th>
                <th>Cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Something</td>
                <td>Ante turpis integer aliquet porttitor.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>29.99</td>
            </tr>

            </tbody>
            <tfoot>
            <tr>
                <td colspan="2"></td>

            </tr>
            </tfoot>
        </table>
    </div>
    </br>
    </br>
    </br>
    </br>
{/block}
{*TODO: Podpiąć pod baze, żeby wczytywało dany produkt i wstawiało wartości w odpowiednie miejsce*}