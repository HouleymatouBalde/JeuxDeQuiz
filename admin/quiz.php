  <?php 
    require_once __DIR__ . "/head.php";
?>
     <!-- Barre de nav debut -->
   <?php 
    require_once __DIR__ . "/navbar.php";
?>
    <div class="row d-flex justify-content-between">
      <div class="col-6  ">
        <div class="card  shadow-lg  p-2">
          <h2 class="text-center">Liste des QCM</h2>
          <div class="table-responsive">
              <table class="table table-bordered table-striped" >
                <thead class="table-primary">
                  <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Titre du QCM</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1.</th>
                  <td>Quiz Culture Générale Facile</td>
                  <td>Cat:Culture Générale</td>
                  <td>Un premier test de connaissance</td>
                  <td>
                      <i class="bi bi-box-arrow-in-down-left"></i><i class="bi bi-trash3-fill"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2.</th>
                  <td>Les guerres Mondiales</td>
                  <td>Cat: Histoire de france</td>
                  <td>Question sur le 20ème siècle</td>
                  <td><i class="bi bi-box-arrow-in-down-left"></i><i class="bi bi-trash3-fill"></i></td>
                </tr>
                <tr>
                  <th scope="row">3.</th>
                  <td>Les guerres Mondiales</td>
                  <td>Cat: Histoire de france</td>
                  <td>Question sur le 20ème siècle</td>
                  <td><i class="bi bi-box-arrow-in-down-left"></i> <i class="bi bi-trash3-fill"></i></td>
                </tr>
                <tr>
                  <th scope="row">4.</th>
                  <td>Les guerres Mondiales</td>
                  <td>Cat: Histoire de france</td>
                  <td>Question sur le 20ème siècle</td>
                  <td> <i class="bi bi-box-arrow-in-down-left"></i><i class="bi bi-trash3-fill"></i></td>
                </tr>
                <tr>
                  <th scope="row">5.</th>
                  <td>Les guerres Mondiales</td>
                  <td>Cat: Histoire de france</td>
                  <td>Question sur le 20ème siècle</td>
                  <td><i class="bi bi-box-arrow-in-down-left"></i><i class="bi bi-trash3-fill"></i></td>
                </tr>
              </tbody>
            </table>
            <div class="form-group  mt-3 text-start ">
              <button class="btn btn-outline-primary w-50">Ajouter une categorie</button>
          </div>
        </div>
      </div>
    </div>
  
      <div class="col-6 ">
          <form action="" class="card  shadow-lg p-2">
            <div class="row">
              <label for=""> <h4 class="text-center">Ajouter/Modifier un QCM</h4> </label>
            </div>
            <div class="form-group mb-3">
              <label for="">Categorie</label>
              <input placeholder="Culture générale" class="form-control" type="text" name="text ">
            </div>
            <div class="form-group mb-3">
              <label for="">Titre du QCM</label>
              <textarea name="description" id="" cols="30" rows="6" class="form-control"
                    placeholder="Description "></textarea>
            </div>
            <div class="form-group mb-3">
              <label for="">Admin Créateur</label>
              <input type="text"placeholder="Antoine Dubois" class="form-control"  name="Antoine Dubois" id="">
            </div>
            <div class="form-group mb-3 justify-content-between">
              <button type="submit" class="btn btn-outline-primary w-40 text-start bg-primary text-white" >Ajouter</button>
              <button type="submit" class="btn btn-outline-primary w-40 text-end bg-primary text-white" >Mettre à jour</button>
            </div>
            <div class="form-group mb-3">
              <button type="reset" class="btn btn-outline-primary w-100 "  >Annuler</button>
            </div>

          </form>
      </div>
    
  </div>

</body>
</html>