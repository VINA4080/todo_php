<?php
    require('connexion.php');

    if (isset($_GET['id'])) {
        $userid = $_GET['id'];
        $req = mysqli_query($connexion, "DELETE FROM tasks WHERE id = $userid");
    }
    
    header("location: index.php");
    exit(0);
?>