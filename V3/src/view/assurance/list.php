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
                <td><?= $a->getId()?></td>
                <td><?php echo $a->getLibelle() ?></td>
                <td><?php echo $a->getMontant() ?></td>
                <td><?php echo $a->getBonus() ?></td>
                <td>
                    <a href="?action=deleteAssurance&id=<?= $a-> getId() ?>" class="btn btn-danger">Supprimer</a>
                    <a href="?action=editAssurance&id=<?= $a-> getId() ?>" class="btn btn-primary">Modifier</a>

                </td>
            </tr>
        <?php } ?>
    </table>
</div>