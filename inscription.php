<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
   <title>page dinscription</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<h1 class="titre">Formulaire pour ajouter un Groupe </h1>

<?php
   
    $conn = mysqli_connect("localhost","root","hxty10841","portrait");
    
if (!$conn){ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible");
}
    if(isset($_POST['save']))
    {
    $nom=$_POST['nomde'];
    $PRE=$_POST['description'];
        
    $req="INSERT INTO  groupe(id_groupe,nom,prenom,email,nom_du_groupe,id_user,description) VALUES (NULL,'','','','$nom',5,'$PRE')";
    // Exécution de la reqête
   mysqli_query($conn,$req)or trigger_error(mysqli_error($conn));
    echo '<script>window.location="portraitva.php"</script>';}
    
    
    $_SESSION['nomde']=$nom;
    mysqli_close($conn);
?>

<form method="post"  id="flogin">
   <table align="center">
   
<tr>
    <td align="right">nom de groupe</td>
    <td><input type="text "name="nomde"placeholder=" nom de groupe"></td>
</tr>
<tr>
    <td align="right">description de groupe</td>
    <td><input type="text "name="description"placeholder="description de groupe"></td>
</tr>

     <tr>
    <td></td>

  

    </tr>
     </table>
<tr>
<td></td>
<INPUT type=submit name="save" VALUE="save">
   </form>

</section>
</body>
</html>
