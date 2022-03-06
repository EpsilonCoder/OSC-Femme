<div class="row">
    <div class="card  col-10 offset-1 ">
        <div class="card-header">
            <span class="h2">
                <a href="index.php?" class="btn btn-outline-success text-black">Liste des entreprises partenaires</a>
            </span>
        </div>

        <div class="card-body col-10 offset-1">
            <form action="/index.php?action=add" method="post">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control" required>

                </div>

                <div class="form-group">
                    <label for="">Date de Création</label>
                    <input type="date" name="dte" class="form-control" required>

                </div>

                <div class="form-group">
                    <label for="">Siége Social</label>
                    <input type="text" name="sociale" class="form-control" required>

                </div>

                <div class="form-group">
                    <label for="">regime</label>
                    <select name="regime" required class="form-control">
                        <option class="form-control">--Select--</option>
                        <option class="form-control">OUI</option>
                        <option class="form-control">NON</option>
                    </select>


                </div>

                <div class="form-group">
                    <label for="">registre de commerce</label>
                    <input type="text" name="registre" class="form-control" required>

                </div>

                <div class="form-group">
                    <label for="">NINEA</label>
                    <input type="text" name="ninea" class="form-control" required>

                </div>

                <div class="form-group">
                    <label for="">PAGE WEB</label>
                    <input type="link" name="web" class="form-control">

                </div><br>

                <div class="row">
                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="add">
                </div>

            </form>

        </div>
    </div>
</div>