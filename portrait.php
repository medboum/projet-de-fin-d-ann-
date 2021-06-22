<?php
session_start();
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
        
<li><i class="fas fa-home"></i><a class="active" href="">ACCUEIL</a></li>
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
              <li><a href="" >formation d'ingenieur</a></li>
              <li><a href="" > activité pedagogique </a></li>
              <li class="hover-me"><a href=""> resource pedarogique </a>
              <div class="sub-menu-2">
           <ul>
              <li><a href="http://localhost/index2.php" >Ingenieur </a></li>
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
              <li><a href="plannngin.php" >planning</a></li>
            <li><a href="" >Emploi du temps </a>
           <div class="sub-menu">
 <ul>
   <li><a href="" >G2 </a></li>
   <li><a href="" >G4 </a></li>
  
</ul>
        </div>
              </li>
     
       </ul>
      </div>
</li>
<li><a  href="" > CONTACTEZ NOUS </a></li>

   </div>
    <div id="left">
        <h2>  Menu</h2>
        <div id="menu">
<a  href="" class="btn"><i class="fas fa-home"></i> ACCUEIL   <br/><br/></a>
        <a  href="" class="btn"> ACTUALITÉS <br/><br/></a>
        <a  href="" class="btn"> RECHERCHE  <br/><br/></a>
        <a  href="" class="btn"> A PROPOS   <br/><br/></a>
        <a  href="" class="btn"> FORMATION  <br/><br/></a>
        <a  href="" class="btn"> CONTACTE   <br/><br/></a>
        <p>----------------------------</p>
        </div>
       
        <h2>Connexion </h2>
       <form method="post" action="">
      <label for=" pseudo">
          votre Email
      </label>
         <input type="text "name="email" id="pseudo">
         <br/><br/>
          <label for="pass">
           voter mot de passe
         </label>
         <input type="password" name="pass" id="pass"/>
         <br/><br/>
         <input type="submit" name="Valider" value="Valider" class="ch"/>
<?php
$conn = mysqli_connect("localhost","root","hxty10841","portrait");
if(isset($_POST['Valider']))
{
    $email=$_POST['email'];
    $mp=$_POST['pass'];
$res=mysqli_query($conn,"select * from portrait where email='$email' and password='$mp'");
$nbr=mysqli_num_rows($res);
if($nbr==0)
echo '<br><br>login ou mot de passe incorrects ';
else
{
    $data=mysqli_fetch_assoc($res);
    $_SESSION['id_user']=$data['id_user'];
    $_SESSION['nom']=$data['nom'];
    $_SESSION['prenom']=$data['prenom'];
     $_SESSION['adress']=$data['adress'];
    $_SESSION['pays']=$data['pays'];
    $_SESSION['sex']=$data['sex'];
    $_SESSION['telephone']=$data['telephone'];
    $_SESSION['login']=$data['email'];
    $_SESSION['mp']=$data['password'];
    echo'<script>window.location="portraitva.php"</script>';
                     
} }
?>
        <a  href="http://localhost/inscriptionn.php" class="btn"> Inscription <br/><br/>  </a>
    

       </form>
         <p>----------------------------</p>
<h2><i class="fas fa-link"></i>lieu utiles </h2>
         <P><a href =“http://www.um5.ac.ma/node” class="titre1" >&#10003 universit med 5<br/><br/></a></P>
         <p><a href="http://ensias.um5.ac.ma/node" class="titre1"> &#10003 ENSIAS</a> <br /></p>
          <p><a href=" http://elearning.um5.ac.ma" class="titre1"> &#10003 e_elearning center</a><br/></p>
          <p><a href=" http://www.enssup.gov.ma/en" class="titre1"> &#10003 ENSSUP</a> <br/></p>
          <p><a href=" https://www.csefrs.ma" class="titre1"> &#10003 CSEFRS</a> <br/></p>
          <p><a href=" http://fm6education.ma/portal/" class="titre1"> &#10003 UM6</a> <br /></p>
           <p>---------------------------- <br/><br/><br/> <br/><br/><br/><br/></p>
        </div>
  <div id="rt">
<div class="google">
<FORM method=GET action="http://www.google.be/search">
<TABLE bgcolor="#FFFFFF" width="250">
<tr>
<td>
<div align="center"><A HREF="http://www.google.be/">
<IMG SRC="http://www.google.com/logos/Logo_40wht.gif" border="0" ALT="Logo Google" align="absmiddle"></A>
<div class="forum-groupe">
<INPUT TYPE=text name=q size=31 maxlength=255 value="">
<INPUT TYPE=hidden name=hl value=fr>
    <div class="bouton">
<INPUT type=submit name=btnG VALUE="Recherche Google">
</div>
</div>
</div>
</td></tr></TABLE></FORM></div>

   <p><br/><br/><br/><br/><br/></p>
   <h2>New</h2>
     <a href="http://ensias.um5.ac.ma/article/anniversaire-20-ans-ensias"><img src="new.jpg"  >
<h2 style="color: #000000";><i class="fas fa-user-friends"></i>Forum</h2>
   <p><a href="http://localhost/index.php"> <img  src="forum.jpg" width="250px" height="130px"></a></p>
     
<h2>  <i class="far fa-calendar-alt"></i> Calendrier  </h2>
<iframe src="https://calendar.google.com/calendar/embed?src=boumaaza.5.bm%40gmail.com&ctz=Africa%2FCasablanca" style="border:solid 1px #777" width="250" height="230" frameborder="0" scrolling="no"></iframe>
    </div>
   <h2>ACTUALITÉS</h2>
  <div class="slider">
    <div class="slider-items">
        <div class="item active">
       <img  src="image1.jpg" ></div>
        <div class="item">
    <img  src="image7.jpg" ></div>
        <div class="item">
    <img  src="image2.jpg" ></div>
         <div class="item">
    <img  src="image3.jpg" ></div>
         <div class="item">
    <img  src="image4.jpg" ></div>
</div>
    <div  class="left-slider">< </div>
    <div  class="right-slider">></div>
  </div>
  <div class="venement">
   <h2>EVENEMENT</h2>
   <div class=zoom>
    <div class=image>
  <a href="page evenement.html"> <img  src="evenement.jpg" alt=Text de remplacement/></a>
  <a href="evenement2.html"><img  src="evenement1.jpg" alt=Text de remplacement/></a>
  <a href="evenement3.html"><img  src="evenement2.jpg" alt=Text de remplacement/></a>
  <a href="evenement4.html"><img  src="evenement3.jpg" alt=Text de remplacement/></a>
    </div>
    </div>
   </div>
  <div id="down">
   <p>L’École Nationale Supérieure d’Informatique et d’Analyse des Systèmes <br/><br/>
   Avenue Mohamed Ben Abdellah Regragui, Rabat -Télé : 0661828977- fax:0537778579 </p>
    </div>
 
  <script  src="image.js"></script>
  
</body>
</html>
