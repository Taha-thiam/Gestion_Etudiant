<div class="container">
    
    <form action="?action=updateEtudiant" method="POST">
        <input type="text" name="id" value ="<?= $Etudiant['id'] ?>" hidden>
        <label for="">Nom</label>
        <input type="text" name="nom" class="form-control" value ="<?= $Etudiant['nom'] ?> ">
        <label for="">Prenom</label>
        <input type="text" name="prenom" class="form-control" value ="<?= $Etudiant['prenom'] ?> ">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value ="<?= $Etudiant['email'] ?> ">
        <label for="">Filiere</label>
        <input type="text" name="filiere" class="form-control" value ="<?= $Etudiant['filiere'] ?> ">
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>