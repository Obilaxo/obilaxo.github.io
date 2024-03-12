<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil - NeoRetro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    setcookie('user_id', '1234');
    setcookie('user_pref', 'dark_theme', time()+3600*24, '/', '', true, true);
?>
    <style>
    .titre, .slogan, .description{
        text-align: center;
    }
    .description{
        color:   #b6b6b6;
    }
    
    .center-table {
            margin: 0 auto; /* Centrer la table horizontalement */
            width: 80%; /* Largeur de la table */
    </style>
    <nav>
        <ul
            <li><a href="index.php">Accueil</a></li>
            <li><a href="chat.php">Chat</a></li>
            <li><a href="contact.html">Contact</a></li>
            <!-- Ajoutez d'autres éléments de menu si nécessaire -->
        </ul>
    </nav>
    <div class="titre"><h1>NeoRetro</h1></div>
    <div class="slogan"><h5>Le Premier Chat Multiplatforme</h5></div>
    <div class="description"><h5>NeoRetro est une mini platforme qui permet de parler avec n'importe quelle appareil <p>qui possède un navigateur internet (n'imorte lequel).<p>C'est pourquoi il y a le mot "Retro" à l'interieur de notre nom</h5></div>
    <div class="center-table">
    <h1>Liste d'appareil compatible :</h1>
    <ul class="grid">
        <li>Internet Explorer (All Compatible Windows)</li>
        <li>Nintendo Consoles (3DS/2DS, WiiU/Wii)</li>
        <li>Playstation Consoles (PS2 (Maybe) PS3, PSX, PSP, PSVita, PS4, PS5)</li>
        <li>Linux</li>
        <li>MacOS 8.0.5 to 9.2.2 and MacOSX 1.0</li>
        <li>Android / SymbianOS / PalmOS / FireOS</li>
        <li>iOS</li>
    </ul>

  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>CONTACTEZ-NOUS</h6>
            <p class="text-justify">NeoRetro <i>| CHAT WANT TO BE SIMPLE |</i> C'est un site qui permet de communiquer avec le monde entier avec de simple lignes de codes.</p>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text"> Open Source Website by <a href="https://www.youtube.com/@obilaxo">Obilaxo</a>
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="dribbble" href="https://www.youtube.com/@neoretro2000"><i class="fa fa-youtube"></i></a></li>
              <li><a class="linkedin" href="https://twitter.com/neoretro2000"><i class="fa fa-twitter"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
      <style>
.site-footer{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
      </style>
</footer>
</body>
</html>
