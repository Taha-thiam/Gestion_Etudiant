<div class="container">


    <a href="?action=addAssurance" class="btn btn-success">Add</a>
    <br>
    <table class="table table-striped mt-5">
        <tr>
            <td>Id</td>
            <td>Libelle</td>
            <td>Montant</td>
            <td>Bonus</td>
            <td>Action(s)</td>
        </tr>

        <?php foreach( $assurances  as $a) { ?>
            <tr>
                <td><?= $a['id'] ?></td>
                <td><?php echo $a['libelle'] ?></td>
                <td><?php echo $a['montant'] ?></td>
                <td><?php echo $a['bonus'] ?></td>
                <td>
                    <a href="?action=deleteAssurance&id=<?= $a['id'] ?>" class="btn btn-danger">Supprimer</a>
                    <a href="?action=editAssurance&id=<?= $a['id'] ?>" class="btn btn-primary">Modifier</a>

                </td>
            </tr>
        <?php } ?>
    </table>
</div>