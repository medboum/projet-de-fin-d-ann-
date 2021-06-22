<?php
session_start();
if(isset($_SESSION['login']) and isset($_SESSION['mp']))
{
    $conn= mysqli_connect("localhost","root","hxty10841","portrait");
    
?>
<html>
<head>
	<title></title>
 <meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <nav>
  <ul>
    <li><a href="index.php">accueil</a></li>
  
      <?php
    if(isset($_SESSION['nom']))
    {
      echo '<li><a href="logout.php">Déconnexion</a></li>';
    }
    ?>
  </ul>
  </nav>
</header>
<section>
 <h1 class="titre">Bienvenue dans notre forum</h1> 
</section>
<section id="sect1">
<?php
  /* changer le format de la date en français*/
function changedate($dt)
{
$tab = explode("-",$dt);
$nd = $tab[2]."-".$tab[1]."-".$tab[0];
return $nd;
}
$res=mysqli_query($conn,"SELECT * FROM portrait,message WHERE portrait.id_user=message.id_user ORDER BY  id_message DESC");
while($data=mysqli_fetch_assoc($res))
{
    echo '<div id="div1">
    <img src="photo/'.$data['id_user'].'.jpg" class="photo" width="30px" height="30px">';
  echo $data['nom'];
  echo '<br>'.$data['prenom'].'</div>';
   echo '<div id="div2">Posté le : '.changedate($data['date_message']);
  echo ' à '.$data['heure_message'];
  echo '<br>'.$data['text_message'] ;
    

    echo  '</div>';

}
?>
<form action="" method="post">
<textarea name="message"  placeholder="Votre message" id="zmessage"></textarea>
<input type="file" name="photo"  class="ch">
<input type="submit" name="envoyer" value="Envoyer" class="btn2">
</form>
<?php
if(isset($_POST['envoyer']))
{
  $id=$_SESSION['id_user'];
  $msg=$_POST['message'];
  $date=date('Y-m-d');
  $heure=date('H:i');
  $req1="INSERT INTO  message (id_message,text_message,date_message,heure_message,id_user) VALUES (NULL,'$msg','$date','$heure','$id')";
  mysqli_query($conn,$req1)or trigger_error(mysqli_error($conn));
echo '<script>window.location="forum.php"</script>';
}
mysqli_close($conn);
?>

</section>
</body>
</html>
<?php
}
else echo '<script>window.location="index.php"</script>';

?>
