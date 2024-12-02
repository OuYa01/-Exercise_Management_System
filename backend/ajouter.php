<?php

    include('connection.php');

    $succ_msg = "";
    $error_msg = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $titre = $_POST['titre'];
        $auteur = $_POST['auteur'];
        $date_creation = $_POST['date_creation'];

        $stmt = $connect -> prepare("INSERT INTO exercice (titre, auteur, date_creation) VALUES (?, ?, ?)");
        $stmt-> bind_param("sss", $titre, $auteur, $date_creation);

        if ($stmt->execute())
        {
            $successMessage = "Lexercice a ete ajouter avec succ!";
        }
        else
        {
            $errorMessage = "Error lors l'ajouter de l'exercice (:" . $stmt->error;
        }

        $stmt->close();
    }

    $sql = "SELECT * FROM exercice";
    $result = $connect->query($sql);
?>

