<?php
session_start();
    if(isset($_SESSION['login']) and isset($_SESSION['mp']))
    {
        $conn= mysqli_connect("localhost","root","hxty10841","portrait");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTf-8">
    <title>portrait communitaire ensias </title>
    <link rel="stylesheet" href="CSS-1.css">
<link rel="stylesheet" href="all.min.css">
    
   
</head>
<body>

    <div class="header">
    <div class="container">
    <div class="navbar">
    <div class ="logo">
    <img src="ensais.jpg" >
</div>
    <div class="menu-bar">
    <ul>

<li><i class="fas fa-home"></i><a class="active" href="http://localhost/portraitva.php">ACCUEIL</a></li>
       <li><a  href="" ><i class="fas fa-newspaper"></i> ACTUALITÉS </a></li>
       <li><a  href="#" ><i class="fas fa-cube"></i> A PROPOS DE ENSIAS </a>
       <div class="sub-menu">
       <ul>
              <li><a href="" >le mot de directeur </a></li>
              <li><a href="" > hoistoire  de ecole  </a></li>
              <li class=""> chiffre clés</a></li>
      </ul>
       </div>
       </li>
      <li ><a  href="" ><i class="fas fa-book"></i> FORMATION </a>
      <div class="sub-menu">
           <ul>
              <li><a href="" >formation d'ingenieur </a></li>
              <li><a href="" > activité pedagogique </a></li>
              <li class="hover-me"><a href=""> resource pedarogique </a>
              <div class="sub-menu-2">
           <ul>
              <li><a href="http://localhost/envoicour.php" >Ingenieur </a></li>
              <li><a href="" >MASTER </a></li>
             
           </ul>
        </div>
              </li>
      </li>
       </ul>
      </div>
<li><a  href="" ><i class="fas fa-male"></i> VIS ESTUDIANTINE </a>
<div class="sub-menu">
<ul>
      <li><a href="" >Clubs & Activités Parascolaires </a>
       <li><a href="plannngin.php" >planning</a></li>
     <li><a href="" >Emploi du temps </a>

    
       </li>

</ul>
</div>
</li>
 
<li><a  href="" > <i class="fas fa-user-circle" >  Profil</i> </a>

<div class="sub-menu">
<FORM method=post action="">
<h2 style:color:><i class="fas fa-user-graduate"></i>Etudient</h2>
<p style="color:#ffffff";>
<?php
    
    $conn= mysqli_connect("localhost","root","hxty10841","portrait");
    echo
        '<img src="photo/'.$_SESSION['id_user'].'.jpg"  width="50px" height="50px">';
    echo  '<br>';
   
    echo 'Nom:'.$_SESSION['nom'];
     echo '<br>';
    echo  '<br>';
    echo 'Prenom:'.$_SESSION['prenom'];
    echo  '<br>';
    echo  '<br>';
    echo 'Sex:'.$_SESSION['sex'];
    echo  '<br>';
    echo  '<br>';
    echo 'Email:'.$_SESSION['login'];
    echo  '<br>';
    echo  '<br>';
    echo 'Adress:'.$_SESSION['adress'];
    echo  '<br>';
    echo  '<br>';
    echo 'Pays:'.$_SESSION['pays'];
    echo  '<br>';
    echo  '<br>';
    echo'Telephone:'.$_SESSION['telephone'];
    echo  '<br>';
    echo  '<br>';
    
    ?>
    </p>
<p><br/></p>
    <INPUT type=submit name="Déconnexion" VALUE="Déconnexion">
</li>
</div>
   </div>
<?php
if(isset($_POST['Déconnexion'])){

    echo '<script>window.location="portrait.php"</script>';
}
?>
<div class="menu-bar">
    <h2 align="center">Club & Activité Parascolaire 2020-2021</h2>
</div>
<h3>ENSIAS RADIO</h3>
<p>ENSIAS RADIO, la voix de toute l’entité ENSIASTE.

ENSIAS radio , la seule radio qui t’aide à réaliser l’impossible (impossible est toujours possible avec nous) ..
partager, servir, travailler ensemble , discuter,.</p>

<h3>Club Japonais ENSIAS</h3>
<img src="club.jpg" >
<p>Le CJE ou Club Japonais de l’ENSIAS, créé en 2013, est parmi les clubs les plus actifs au sein de l’Ecole Nationale Supérieure d’informatique et d’Analyse des Systèmes. Les connaissances d’un futur ingénieur n’étant pas limitées aux compétences techniques et managériales, le CJE vide à créer pour ses membres un cadre adéquat de l’enseignement de la langue japonaise et du rapprochement à la culture nippone.
Le Japon étant un pays où les technologies de l’information prédominent et interfèrent avec la culture, l’intégration de son expansion cultuelle dans une école d’ingénierie spécialisée en informatique ne peut être que bénéfique pour les membres du club.
Notre mission:
– Faire connaître la culture Japonaise au sein de notre école et ailleurs.
– Créer des liens culturels et d’échanges avec le Japon.
– Passer d’agréables moments avec des personnes qui partagent les mêmes goûts.
Nos activités :
Au long de l&#39;année, le CJE organise plusieurs activités entre les membres du club :
– Apprentissage de la langue Japonaise.
– Organisation d’événements en rapport avec la culture nippone.
– Organisation de tournois jeux-vidéo.
– Projection de film Japonais.
– Découverte de la culture Japonaise par l’animation de divers ateliers, chaque mercredi :
– Origami : l’art de pliage du papier.
– Shodô : forme de calligraphie de la langue japonaise.
– iGo : jeu de stratégie originaire de la chine, très connu au Japon.
– Ikebana : l’art de faire vivre les fleurs, basé sur la composition florale.
– Cuisine japonaise : cuisine reconnue pour son extême raffinement.
– Cérémonie de Thé : art traditionnel dans le quel le thé vert en poudre (Matcha) est préparé de
manière codifiée par un praticien expérimenté et servi à un petit groupe d’invités dans un cadre
calme.
– Essayage de Yukata : essayage d’un léger Kimono d’été porté à la fois par les hommes et par les
femmes.
– Dessin de Manga : dessins humoristiques ou dans une acception plus large, bandes dessinées.
– Atelier Karuta : jeu de cartes japonais.
– Atelier Tanabata : fête japonaise des étoiles.
– Karaoke : animation de séances de karaoke.
– Jeux vidéo, jeux traditionnels, atelier dessin…</p>
<h3>CINDH Ensias</h3>
<p>Crée en 2007, CINDH est un club social à but non lucratif, constitué des élèves-ingénieurs et lauréats de l’ENSIAS.
Son but principal consiste à aider au maximum les autres.
Notre club a pour but d’apporter un peu de joie et de réconfort aux personnes défavorisées.
-Nos valeurs:
* Solidarité : L’esprit d’équipe s’exprime à travers la solidarité de tous les membres
* Engagement : Nous nous engageons à aller au bout des projets les plus difficiles
* Respect : Les échanges s’appuient sur un respect mutuel et l’acceptation de la diversité des opinions</p>

<div class="menu-bar">
<h2>Upload des Evenement</h2>
<form action="" method="post">
<input type="file" name="photo"  class="ch">
</div>
</form>
</body>
</html>


       
