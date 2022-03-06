    <div class="row">
        <div class="card col-10 offset-1">
            <div class="card-header">
                <span class="h2">
                    <a href="index.php?" class="btn btn-success">Modification d'un partenaires</a>
                </span>
            </div>



            <form action="index.php?action=modifier" method="post">
                <input type="hidden" name="id" class="form-control" value="<?= $contact['id'] ?>">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control" required value="<?= $contact['nom'] ?>">

                </div>

                <div class=" form-group">
                    <label for="">Date de Création</label>
                    <input type="date" name="dte" class="form-control" required value="<?= $contact['dte'] ?>">

                </div>

                <div class=" form-group">
                    <label for="">Siége Social</label>
                    <input type="text" name="sociale" class="form-control" required value="<?= $contact['sociale'] ?>">

                </div>

                <div class=" form-group">
                    <label for="">regime</label>
                    <input type="text" name="regime" class="form-control" required value="<?= $contact['regime'] ?>">

                </div>

                <div class="form-group">
                    <label for="">registre de commerce</label>
                    <input type="text" name="registre" class="form-control" required value="<?= $contact['registre'] ?>">

                </div>

                <div class="form-group">
                    <label for="">NINEA</label>
                    <input type="text" name="ninea" class="form-control" required value="<?= $contact['ninea'] ?>">

                </div>

                <div class="form-group">
                    <label for="">PAGE WEB</label>
                    <input type="link" name="web" class="form-control" value="<?= $contact['web'] ?>">

                </div><br>

                <div class="row">
                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="modif">
                </div>

            </form>
        </div>
    </div>
    </div>