<?php if ($result && $result->num_rows > 0): ?>
                <div class="tab">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titre</th>
                                <th>Auteur</th>
                                <th>Date De creation</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()):?>
                                <tr>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['titre'];?></td>
                                    <td><?php echo $row['auteur'];?></td>
                                    <td><?php echo $row['date_creation'];?></td>
                                    <td>
                                        <a href="backend/modify.php?id=<?php echo $row['id']?>" class="modify_btn">modifier</a>
                                    </td>
                                    <td>
                                        <a href="backend/delete.php?id=<?php echo $row['id']?>" class="delet_btn" onclick="return confirm('Are you sure you want to delete this exercise')">delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>

                </div>
        <?php else: ?>
            <p id="aucun">aucun exercice trouver</p>
        <?php endif; ?>

        <?php if (isset($_GET['success'])):?>
            <div class="success-message"><?php echo htmlspecialchars($_GET['success']); ?></div>
        <?php endif; ?>
        <?php if (isset($_GET['error'])): ?>
            <div class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>

        <?php $connect->close();?>