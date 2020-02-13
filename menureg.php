<?php
try {
    $db = new PDO('mysql:host=localhost:3306;dbname=cmerlin', 'cmerlin', '280390');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
    die();
}

$requete = $db->prepare("SELECT * FROM regions");
$requete->execute();

while ($ligne = $requete->fetch()) {
    echo "<option value='".$ligne["reg_id"]."'>" . $ligne["reg_v_nom"] . "</option>";
}