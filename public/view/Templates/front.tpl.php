<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ActuMusique</title>
</head>

<body>

    <header>

        <header>
            <nav>
                <a href="" class="logo"></a>
                <ul>
                    <li><a href=""></a>accueil</li>
                    <li><a href=""></a>artiste</li>
                    <li><a href=""></a>évènements</li>
                    <li><a href=""></a>médias</li>
                    <li><a href=""></a>connexion</li>
                    <li><a class="button button-register" href=""></a>inscription</li>
                </ul>

            </nav>
            <div class="header-card">
                <h1>Nom de l'artiste</h1>
                <p>Avec Actumusique, créez un site pour tenir les fans à jour sur l'actualité de votre groupe de musique
                    préféré, enregistrer ses prochains évènements, se renseigner sur le groupe et ses œuvres,
                    s'organiser pour se rencontrer aux concerts.
                </p>
                <a href="#">découvrir l’artiste</a>
            </div>
        </header>

        <main>
            <section>

                <h1>Dernières publication</h1>

                <article class="article card-article">
                    <img src="/assets/images/Rectangle 1(1).png" alt="totoro">
                    <h1>Titre de l'article</h1>
                    <p>date posted</p>
                    <p>Ceci est un article, écrivez y ce que vous voulez. Actualité, billet d’humeur, résumé de
                        concert... à vous de jouer !</p>
                    <a href="#" class="button button-sm button-primary">lire la suite</a>
                    <footer>
                        <a href="#">commentaires</a>
                        <p>par<a href="#">utilisateur54</a></p>
                        <ul>
                            <li><a href="" class="interaction interaction-share"></a></li>
                            <li><a href="" class="interaction interaction-like"></a></li>
                            <li><a href="" class="interaction interaction-save"></a></li>
                        </ul>
                    </footer>
                </article>

                <article class="card card-event">
                    <img src="/assets/images/Rectangle 1(1).png" alt="totoro">
                    <h1>Titre de l'évènement</h1>
                    <p>15 janvier 2023 - La Vilette - Paris (75)</p>
                    <p>Ceci est un post d’évènement. Publiez l’intitulé, la date, le lieu et permettez aux utilisateurs
                        de l’enregistrer dans leur calendrier et de s’organiser pour...</p>
                    <a href="#" class="button button-sm button-primary">lire la suite</a>
                    <footer>
                        <p>date posted</p>
                        <a class="button button-add-calendar" href="#">ajouter à mon calendrier</a>
                        <ul>
                            <li><a href="" class="interaction interaction-share"></a></li>
                            <li><a href="" class="interaction interaction-like"></a></li>
                            <li><a href="" class="interaction interaction-save"></a></li>
                        </ul>
                    </footer>
                </article>
            </section>
            <aside>
                <div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                    <p></p>
                </div>
            </aside>
        </main>

        <h1>Template Front</h1>

        <?php include $this->viewName;?>

</body>

</html>