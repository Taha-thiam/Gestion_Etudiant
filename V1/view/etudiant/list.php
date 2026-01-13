<div class="container">


    <a href="?action=addEtudiant" class="btn btn-success">Add</a>
    <br>
    <table class="table table-striped mt-5">
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>email</td>
            <td>Filiere</td>
            <td>Action(s)</td>
        </tr>

        <?php foreach( $Etudiants as $a) { ?>
            <tr>
                <td><?= $a['id'] ?></td>
                <td><?php echo $a['nom'] ?></td>
                <td><?php echo $a['prenom'] ?></td>
                <td><?php echo $a['email'] ?></td>
                <td><?php echo $a['filiere'] ?></td>
                <td>
                    <a href="?action=deleteEtudiant&id=<?= $a['id'] ?>" class="btn btn-danger">Supprimer</a>
                    <a href="?action=editEtudiant&id=<?= $a['id'] ?>" class="btn btn-primary">Modifier</a>

                </td>
            </tr>
        <?php } ?>
    </table>
</div>