<body>
    <br />
    <div class="container">
        <br />
        <div class="row">
            <br />
            <h2>Crud en Php</h2>
            <p>
        </div>
        <p>
            <br />
        <div class="row">
            <a href="index.php?loc=add" class="btn btn-success">Ajouter un user</a>
            <br />
            <div class="table-responsive">
                <br />
                <table class="table table-hover table-bordered">
                    <br />
                    <thead>
                        <th>Name</th>
                        <p>
                            <th>Firstname</th>
                        <p>
                            <th>Age</th>
                        <p>
                            <th>Tel</th>
                        <p>
                            <th>Pays</th>
                        <p>
                            <th>Email</th>
                        <p>
                            <th>Comment</th>
                        <p>
                            <th>metier</th>
                        <p>
                            <th>Url</th>
                        <p>
                            <th>Edition</th>
                        <p>
                    </thead>
                    <p>
                        <br />
                        <tbody>
                            <?php
                            foreach ($data as $row) { //on cree les lignes du tableau avec chaque valeur retournée
                            echo '<br />
                            <tr>';
                                echo '<td>' . $row['name'] . '</td>
                                <p>';
                                    echo '<td>' . $row['firstname'] . '</td>
                                <p>';
                                    echo '<td>' . $row['age'] . '</td>
                                <p>';
                                    echo '<td>' . $row['tel'] . '</td>
                                <p>';
                                    echo '<td>' . $row['email'] . '</td>
                                <p>';
                                    echo '<td>' . $row['pays'] . '</td>
                                <p>';
                                    echo '<td>' . $row['comment'] . '</td>
                                <p>';
                                    echo '<td>' . $row['metier'] . '</td>
                                <p>';
                                    echo '<td>' . $row['url'] . '</td>
                                <p>';
                                    echo '<td>';
                                        echo '<a class="btn" href="index.php?loc=read&id=' . $row['id'] . '">Read</a>'; // un autre td pour le bouton d'edition
                                        echo '</td>
                                <p>';
                                    echo '<td>';
                                        echo '<a class="btn btn-success" href="index.php?loc=edit&id=' . $row['id'] . '">Update</a>'; // un autre td pour le bouton d'update
                                        echo '</td>
                                <p>';
                                    echo '<td>';
                                        echo '<a class="btn btn-danger" href="index.php?loc=delete&id=' . $row['id'] . ' ">Delete</a>'; // un autre td pour le bouton de suppression
                                        echo '</td>
                                <p>';
                                    echo '
                            </tr>
                            <p>';
                                }
                                ?>
                        </tbody>
                    <p>

                </table>
                <p>

            </div>
            <p>
        </div>
        <p>
    </div>
    <p>
</body>