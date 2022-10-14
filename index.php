<?php
    require("connexion.php");
    require("check-tasks.php");

    $sql = mysqli_query($connexion,"SELECT * FROM `tasks`");

    $data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>ToDo List Application</title>
    </head>
    <body>
        <div class="container d-flex align-items-center justify-content-center">
            <form action="check-tasks.php" method="POST">
                    <h1>TODO APPLICATION</h1>
                <div>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?=$_GET['error']?>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['validated'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?=$_GET['validated']?>
                        </div>
                    <?php } ?>
                    <input type="text" name="task">
                    <button class="btn btn-dark" type="submit" name="submit">Ajouter une tâche</button>
                </div>
                <table class="table mt-5">
                    <thead class="text-align-center table-dark">
                        <tr class="text-center">
                            <th>ID</th>
                            <th >Tâches</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <td><?= $value['id']?></td>
                                <td><?= $value['taches']?></td>
                                <td class="text-center">
                                    <button class="btn btn-secondary" ><a class="text-decoration-none text-white" href="delete.php?id=<?= $value['id']?>">Supprimer</a></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    </table>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
    </html>