<?php

require_once('data.php');
session_start();

$resultat = isset($_SESSION['resultat']) ? $_SESSION['resultat'] : NULL;
$erreur = isset($_SESSION['erreur']) ? $_SESSION['erreur'] : NULL;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Calcul d'itinéraires</title>
</head>
<body>
    <form method="POST" action="itineraire.php">
        <select name="depart">
            <option value="">-- Ville de départ --</option>
                <option value="Midgard">Midgard</option>
                <option value="Asgard">Asgard</option>
                <option value="Vanaheim">Vanaheim</option>
                <option value="Jotunheim">Jotunheim</option>
                <option value="Niflheim">Niflheim</option>
                <option value="Muspelheim">Muspelheim</option>
                <option value="Alfheim">Alfheim</option>
                <option value="Nidavellir">Nidavellir</option>
                <option value="Hel">Hel</option>
                <option value="Odin's Pass">Odin's Pass</option>
                <option value="Ravenclaws">Ravenclaws</option>
                <option value="Shadow Steps">Shadow Steps</option>
                <option value="Iron Castle">Iron Castle</option>

        </select>
        <select name="arrivee" placeholder="-- Ville d'arrivée --">
            <option value="">-- Ville d'arrivée --</option>
                <option value="Midgard">Midgard</option>
                <option value="Asgard">Asgard</option>
                <option value="Vanaheim">Vanaheim</option>
                <option value="Jotunheim">Jotunheim</option>
                <option value="Niflheim">Niflheim</option>
                <option value="Muspelheim">Muspelheim</option>
                <option value="Alfheim">Alfheim</option>
                <option value="Nidavellir">Nidavellir</option>
                <option value="Hel">Hel</option>
                <option value="Odin's Pass">Odin's Pass</option>
                <option value="Ravenclaws">Ravenclaws</option>
                <option value="Shadow Steps">Shadow Steps</option>
                <option value="Iron Castle">Iron Castle</option>
        </select>
        <button type="submit">Go !</button>
    </form>

</body>
