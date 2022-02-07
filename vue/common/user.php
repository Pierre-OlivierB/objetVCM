<h1>Bienvenue</h1>

<?php foreach ($data as  $users) : ?>
    <tr>
        <?php foreach ($users as $key => $value) : ?>

            <?= '<td>' . $value . '</td><p>' ?>

        <?php endforeach; ?>
        <?php
        echo '<td>';
        echo '<a class="btn" href="index.php?loc=read&id=' . $users['id'] . '">Read</a>'; // un autre td pour le bouton d'edition
        echo '</td><p>';
        echo '<td>';
        echo '<a class="btn btn-success" href="index.php?loc=edit&id=' . $users['id'] . '">Update</a>'; // un autre td pour le bouton d'update
        echo '</td><p>';
        echo '<td>';
        echo '<a class="btn btn-danger" href="index.php?loc=delete&id=' . $users['id'] . ' ">Delete</a>'; // un autre td pour le bouton de suppression
        echo '</td><p>';
        ?>
    </tr>
<?php endforeach; ?>
