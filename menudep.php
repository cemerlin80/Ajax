<?php
$reg_id=$_GET["reg_id"];

try {
    $db = new PDO('mysql:host=localhost:3306;dbname=cmerlin', 'cmerlin', '280390');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Erreur !:".$e->getMessage()."<br>";
    die();
}

$requete = $db->prepare("SELECT * FROM departements WHERE dep_reg_id=:reg_id");
$requete->bindParam(":reg_id",$reg_id);
$requete->execute();
echo  "<select name=''>";
while ($ligne= $requete->fetch()){
    echo "<option value='".$ligne["dep_id"]."'>".$ligne["dep_nom"]."</option>";
}
echo "</select>";