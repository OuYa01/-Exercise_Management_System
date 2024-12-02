<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $connect->prepare("DELETE FROM exercice WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: ../index.php?success=suppression réussie");
    } else {
        header("Location: ../index.php?error=échec de la suppression");
    }
    $stmt->close();
}
?>