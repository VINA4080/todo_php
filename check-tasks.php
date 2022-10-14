<?php  
include "connexion.php";

if (isset($_POST['task'])) {
	$task = $_POST['task'];
	if (empty($task)) {
		header("Location: index.php?error= Aucune tâche");   
	}else if (condition) {
        header("Location: index.php?validated= Tâche ajoutée");
        if (isset($_POST['submit'])) {
            $task = $_POST['task']; 
            
            mysqli_query($connexion, "INSERT INTO tasks (taches) VALUES ('$task')");   
            
        }
    }
    
}