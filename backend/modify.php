<?php
include('connection.php');


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $connect->prepare("SELECT * FROM exercice WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $exercise = $result->fetch_assoc();
    $stmt->close();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date_creation = $_POST['date_creation'];

    $stmt = $connect->prepare("UPDATE exercice SET titre = ?, auteur = ?, date_creation = ? WHERE id = ?");
    $stmt->bind_param("sssi", $titre, $auteur, $date_creation, $id);

    if ($stmt->execute()) {
        header("Location: ../index.php?success=modification réussie");
    } else {
        header("Location: ../index.php?error=échec de la modification");
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier l'Exercice</title>
    <link rel="stylesheet" href="../frontend/style.css">
</head>
<body>
    <div class="modify">
        <form action="modify.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $exercise['id']; ?>">
            <label for="titre">Titre:</label>
            <input type="text" name="titre" value="<?php echo $exercise['titre']; ?>" required>
            <label for="auteur">Auteur:</label>
            <input type="text" name="auteur" value="<?php echo $exercise['auteur']; ?>" required>
            <label for="date_creation">Date de Création:</label>
            <input type="date" name="date_creation" value="<?php echo $exercise['date_creation']; ?>" required>
            <button type="submit" id="btn_sb">Enregistrer les modifications</button>
        </form>
    </div>
</body>
</html>
