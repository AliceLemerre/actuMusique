<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="/actuMusique/framework/dist/css/main.css">

     <title>Document</title>
</head>
<body class="grid">
     <h1> ceci est un test pour le ficher index.php</h1>





<section>
    <h1>.banner</h1>
    <div class="banner banner-text" style="background-image: url('/actuMusique/framework/assets/images/header-default\ 1.png')">
       <div class="card col-3">
         <p>Avec Actumusique, créez un site pour tenir les fans à jour sur l'actualité de votre groupe de musique préféré, enregistrer ses prochains évènements, se renseigner sur le groupe et ses œuvres, s'organiser pour se rencontrer aux concerts.</p>
       <div> <a href="#" class="button button-primary">découvrir l'artiste</a></div>
        </div>
    </div> 
</section>




<h1>.button</h1>
<p>
    <button class="button button-lg button-primary">button</button>   
    <button class="button button-nav-active">button</button>   
    <button class="button button-sm button-primary">button</button>   
</p>

<ul class="interactions-list">
    <li><a href="" class="interaction interaction-share"><img src="./assets/images/share-icon.svg" alt=""></a></li>
    <li><a href="" class="interaction interaction-like"><img src="./assets/images/heart-icon.svg" alt=""></a></li>
    <li><a href="" class="interaction interaction-save"><img src="./assets/images/save-icon.svg" alt=""></a></li>
</ul>

<div class="row">
<article class="card card-article col-4">
    <header class="card-header card-article-header">
        <h1>Titre de l'article</h1>
        <p class="card-header-date-posted">date posted</p>
    </header>
    <div class="card-content card-article-content">
        <div class="card-image">
            <img src="assets/images/img-default.png" alt="image placeholder article">
        </div>
        <div class="card-infos card-article-infos"> 
            <p>Ceci est un article, écrivez y ce que vous voulez. Actualité, billet d’humeur, résumé de
                concert... à vous de jouer !</p>
            <a href="#" class="button button-primary">lire la suite</a>
        </div>
    </div>

    <footer class="card-footer card-footer-article">
        <a href="#">xx commentaires</a>
        <p>par <a href="#">utilisateur54</a></p>
        <ul class="interactions-list">
            <li><a href="" class="interaction interaction-share"><img src="./assets/images/share-icon.svg" alt=""></a></li>
            <li><a href="" class="interaction interaction-like"><img src="./assets/images/heart-icon.svg" alt=""></a></li>
            <li><a href="" class="interaction interaction-save"><img src="./assets/images/save-icon.svg" alt=""></a></li>
        </ul>
    </footer>
</article>
</div>


<article class="card card-event col-4">
    <header class="card-header card-event-header">
        <h1>Titre de l'évènement</h1>
        <p>15 janvier 2023 - La Vilette - Paris (75)</p>
    </header>

    <div class="card-content card-article-content">
        <div class="card-image" >
            <img src="assets/images/img-default.png" alt="image placeholder article">
        </div>
        <div class="card-infos card-event-infos">
            <p>Ceci est un post d’évènement. Publiez l’intitulé, la date, le lieu et permettez aux utilisateurs
                de l’enregistrer dans leur calendrier et de s’organiser pour...</p>
            <a href="#" class="button button-primary">lire la suite</a>
        </div>
    </div>

    <footer class="card-footer card-event-footer">
        <p>date posted</p>
        <a class="button button-sm button-add-calendar" href="#">ajouter à mon calendrier</a>
        <ul class="interactions-list">
            <li><a href="" class="interaction interaction-share"><img src="./assets/images/share-icon.svg" alt=""></a></li>
            <li><a href="" class="interaction interaction-like"><img src="./assets/images/heart-icon.svg" alt=""></a></li>
            <li><a href="" class="interaction interaction-save"><img src="./assets/images/save-icon.svg" alt=""></a></li>
        </ul>
    </footer>
</article>





<section>
<h1>.grid</h1>
<div class="grid">
    <div class="row">
        <div class="col-2"><div class="content">col 2</div></div>
        <div class="col-2"><div class="content">col 2</div></div>
        <div class="col-8"><div class="content">col 8</div></div>
    </div>

    <div class="row">
        <div class="col-12"><div class="content">col 1</div></div>
    </div>

    <div class="row">
        <div class="col-4"><div class="content">col 4</div></div>
        <div class="col-4"><div class="content">col 4</div></div>
        <div class="col-4"><div class="content">col 4</div></div>
    </div>

    <div class="row">
        <div class="col-6"><div class="content">col 6</div></div>
        <div class="col-6"><div class="content">col 6</div></div>
    </div>

    <div class="row">
        <div class="col-3"><div class="content">col 3</div></div>
        <div class="col-3"><div class="content">col 3</div></div>
        <div class="col-3"><div class="content">col 3</div></div>
        <div class="col-3"><div class="content">col 3</div></div>

    </div>

</div>
</section>


<section class="card card-comments col-3">
<header class="card-header">
  <div>  <p>utilisateur 17</p></div>
    <p class="card-header-date-posted">26/02/2023 à 9h15</p>
</header>
<div>
    <p>Bonjour c’est vraiment super, cet article est génial et très instructif</p>
    <a href="">signaler le commentaire</a>
</div>


</section>


<section class="card col-4">
<header class="card-header">
  <div>  <h1>Connexion</h1></div>
</header>
<form action="POST" class="card-form">

    <label for="user-id">
        pseudonyme ou adresse mail :        </label>
        <input class="col-4" type="text" id="user-id" name="user-id" />

    <label for="password">      

        mot de passe :  </label> <input class="col-4" type="password" id="user-password" name="user-password" />
        <a href="" class="forgot-password">mot de passe oublié ?</a>
<div class="card-form-stay-logged">
        <input type="checkbox" id="stay-logged-in" name="stay-logged-in" />
        <label for="stay-logged-in">rester connecté</label>
    </div>


        <button class="button" type="submit">Se connecter</button>
      
</form>


</section>


<section class="card card-album col-4">
<header class="card-header card-header-album">
    <h1>Titre de l'album</h1>
</header>
<div class="card-content card-content-album">
    <div class="card-image card-image-album">
        <img src="assets/images/img-default.png" alt="image placeholder album">
        <p>2015 - 12 titres - 1h38</p>

    </div>

    <div class="card-infos card-album-infos"> 
        <ul>
            <li class="card-album-infos-titles">titre</li>
            <li class="card-album-infos-titles">titre</li>
            <li class="card-album-infos-titles">titre</li>
            <li class="card-album-infos-titles">titre</li>
            <li class="card-album-infos-titles">titre</li>
            <li class="card-album-infos-titles">titre</li>
            <li class="card-album-infos-titles">titre</li>
            <li class="card-album-infos-titles">titre</li>
        </ul>
    </div> 
</div>


</section>

<section class="card card-event-link col-4">
<a class="card-event-link-wrapper" href="">
<header class="card-header card-header-event-link">
<h1>Nom de l'évènement</h1>

<div class="card-content card-content-event-link">
    <h2>date et lieu de l'évènement</h2>
</div>

</header>
</section>
</a>

<section class="card card-section-tabs col-4">




<main>
<h1 tabindex="1">Pure CSS Accessible Tabs</h1>
<p tabindex="1">The tab component below is accessible via the keyboard and is built with pure HTML and CSS (no JavaScript). Use the left/right or up/down arrow keys to move between the tabs after tabbing into or otherwise focusing the component.</p>
<div class="tabs">
<input class="radiotab" name="tabs" tabindex="1" type="radio" id="tabone" checked="checked">
<label class="label" for="tabone">Tab One</label>
<div class="panel" tabindex="1">
  <h2>Tab One Content</h2>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
</div>
<input class="radiotab" tabindex="1" name="tabs" type="radio" id="tabtwo">
<label class="label" for="tabtwo">Tab Two</label>
<div class="panel" tabindex="1">
  <h2>Tab Two Content</h2>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
</div>
<input class="radiotab" tabindex="1" name="tabs" type="radio" id="tabthree">
<label class="label" for="tabthree" >Tab Three</label>
<div class="panel" tabindex="1">
  <h2>Tab Three Content</h2>
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
  
  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
</div>
</div>

<p tabindex="1">The tab component will switch to a vertical accordion on smaller screens.</p>
</main>


</section>
</body>

</html>