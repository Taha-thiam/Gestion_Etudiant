<div class="container">
    
    <form action="?action=updateAssurance" method="POST">
        <input type="text" name="id" value ="<?= $assurance['id'] ?>" hidden>
        <label for="">Libelle</label>
        <input type="text" name="libelle" class="form-control" value ="<?= $assurance['libelle'] ?> ">
        <label for="">Montant</label>
        <input type="text" name="montant" class="form-control" value ="<?= $assurance['montant'] ?> ">
        <label for="">Bonus</label>
        <input type="text" name="bonus" class="form-control" value ="<?= $assurance['bonus'] ?> ">
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>