<?php
include_once 'vue/common/head.html';
?>

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

            <?php
            var_dump($view);
            // Notre variable vue doit avoir la valeur du même nom de fichier contenu dans le dossier vue
            include_once($view . ".php");
            ?>

        <p>
    </div>
    <p>
</body>