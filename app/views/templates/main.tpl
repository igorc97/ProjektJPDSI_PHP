<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Księgarnia</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
</head>
<body class="landing is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="{rel_url action = 'main'}">Księgarnia</a></h1>
        <br/>
        Zalogowany użytkownik: {$user->login}
        <nav id="nav">
            <ul>
                <li><a href="{rel_url action = 'main'}">Strona główna</a></li>
                <li>
                    <a href="#" class="icon solid fa-angle-down">Opcje</a>
                    <ul>
                        <li><a href="generic.html">Informacje</a></li>
                        <li><a href="contact.html">Kontakt</a></li>
                        <li><a href="{rel_url action='bookList'}">Sklep</a></li>
                        <li>
                            <a href="#">Baza</a>
                            <ul>
                                <li><a href="ResultsCtrl.class.php">Lista</a></li>
                                <li><a href="{$conf->action_root}order">Twoje zamówienia</a></li>
                                <li><a href="#">Option Three</a></li>
                                <li><a href="#">Option Four</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{rel_url action='register'}" class="button">Zarejestruj się</a></li>
                <li><a href="{rel_url action='login'}" class="button">Zaloguj się</a></li>
                <li><a href="{rel_url action='logout'}" class="button">Wyloguj</a></li>
              
            </ul>

        </nav>
    </header>

    <!-- Banner -->
    <section id="banner">
        <h2>Księgarnia</h2>
        <p>Zapraszamy do skorzystania z oferty księgarni!</p>
        <ul class="actions special">
            <li><a href="{$conf->action_root}register" class="button primary">Zarejestruj się</a></li>
            <li><a href="generic.html" class="button">Dowiedz się więcej</a></li>
        </ul>
    </section>
    {block name =content}{/block}
    <!-- Main -->
    <section id="main" class="container">

        <section class="box special">
            <header class="major">
                <h2>Zapraszamy do skorzystania z oferty księgarni,
                    <br />
                    wyjątkowe treści czekają na Ciebie!</h2>
                <p>Dlaczego akurat my? Wiemy jak ważny jest czas naszych klientów dlatego postanowiliśmy wymienić kilka standardów, jakimi cechuje się nasza firma.</p>
            </header>
            <span class="image featured"><img src="{$conf->action_url}/assets/images/pic01.jpg" alt="" /></span>
        </section>

        <section class="box special features">
            <div class="features-row">
                <section>
                    <span class="icon solid major fa-bolt accent2"></span>
                    <h3>Szybkość działania</h3>
                    <p>Na zamówienia nie będziesz czekał dłużej niż do 48 godzin od przyjęcia zamówienia. Podczas wyboru danego produktu zostaniesz poinformowany czy jest on dostępny, w przypadku braku dostępności skontaktuj się z nami a my wypełnimy potrzebne kroki abyś mogł kupić brakujący egzemplarz.</p>
                </section>
                <section>
                    <span class="icon solid major fa-chart-area accent3"></span>
                    <h3>Atrakcyjne ceny i promocje</h3>
                    <p>Wiemy, że jednym z najważniejszych czynników, który wpływa na finalną decyzje klienta jest cena dlatego oferujemy produkty w możliwie najniższej cenie. Dodatkowo dla nowych klientów po zapisaniu się do newsletter'a przewidziany jest rabat w wysokości 10% od ceny zamówienia(Tylko na pierwsze zamówienie!).Po zapisaniu się będziemy Cię informować o aktualnych promocjach.</p>
                </section>
            </div>
            <div class="features-row">
                <section>
                    <span class="icon solid major fa-cloud accent4"></span>
                    <h3>Zapis w bazie</h3>
                    <p>Możesz sprawdzić swoje przeszłe zamówienia, zobaczyć kiedy dostaniesz wyczekiwaną przesyłkę a w razie problemów pracownicy mogą w łatwy sposób zapoznać się z Twoim problem i rozwiązać go.</p>
                </section>
                <section>
                    <span class="icon solid major fa-lock accent5"></span>
                    <h3>Bezpieczeństwo</h3>
                    <p>Staramy się aby Twoje dane były ciągle bezpieczne. Rejestrując się możesz mieć pewność, że nikt nie zrealizuje zamówienia na Twoje dane lub nie uzyska dostępu do Twojego konta.</p>
                </section>
            </div>
        </section>

        <div class="row">
            <div class="col-6 col-12-narrower">

                <section class="box special">
                    <span class="image featured"><img src="{$conf->action_url}/assets/images/pic02.jpg" alt="" /></span>
                    <h3>Kontakt</h3>
                    <p>W razie problemów lub chęci uzyskania odpowiedzi na nurtujące pytanie skontaktuj się z nami!</p>
                    <ul class="actions special">
                        <li><a href="contact.html" class="button alt">Przejdź dalej</a></li>
                    </ul>
                </section>

            </div>
            <div class="col-6 col-12-narrower">

                <section class="box special">
                    <span class="image featured"><img src="{$conf->action_url}/assets/images/pic03.jpg" alt="" /></span>
                    <h3>Nasza oferta</h3>
                    <p>Zapoznaj sie z naszą ofertą! Dalej pracujemy nad pozyskaniem nowych treści.</p>
                    <ul class="actions special">
                        <li><a href="{$conf->action_root}store" class="button alt">Przejdź dalej</a></li>
                    </ul>
                </section>

            </div>
        </div>

    </section>

    <!-- CTA -->
    <section id="cta">

        <h2>Zarejestruj się do naszego newsletter'a!</h2>
        <p>Bądź na bieżąco ze wszystkimi nowościami jakie są w ofercie księgarni. Osoby, które się zarejestrowały otrzymają 10% zniżki na pierwsze zamówienie.</p>

        <form>
            <div class="row gtr-50 gtr-uniform">
                <div class="col-8 col-12-mobilep">
                    <input type="email" name="email" id="email" placeholder="Adres Email" />
                </div>
                <div class="col-4 col-12-mobilep">
                    <input type="submit" value="Dołącz" class="fit" />
                </div>
            </div>
        </form>

    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="https://github.com/igorc97" class="icon brands fa-github"><span class="label">Github</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            <li>Aplikacja została zaprojektowana przez: </li><li>Igor Ceglarz</li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
<script src="{$conf->app_url}/assets/js/jquery.dropotron.min.js"></script>
<script src="{$conf->app_url}/assets/js/jquery.scrollex.min.js"></script>
<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
<script src="{$conf->app_url}/assets/js/util.js"></script>
<script src="{$conf->app_url}/assets/js/main.js"></script>

</body>
</html>