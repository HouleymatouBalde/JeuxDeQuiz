<!-- APPPELL DU HEAD.PHP ET CATEGORIB DE BACKEND -->
<?php 
    require_once __DIR__ . "/head.php";
  // APPPELL DU FICHIER CATEGORIB DE BACKEND
    require_once __DIR__ . "/backend/categorib.php";
    // CREER UNE VARIABLE QUI VA PRENDRE LA LISTE DE NOS CATEGORIES
    $categories= listeCategories();
    print_r($categories);

?>
 <?php 
    require_once __DIR__ . "/navbar.php";
  ?>
    <div class="row d-flex justify-content-between">
      <div class="col-6  ">
        <div class="card  shadow-lg  p-2">
          <h2 class="text-center">Liste des Categories</h2>
          <div class="table-responsive">
              <table class="table table-bordered table-striped" >
                <thead class="table-primary">
                  <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Admin Créateur</th>
                    <th scope="col">Actions</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach($categories as $key=>$categorie):     ?>
                <tr>
                  <th scope="row"><?= $key+1   ?></th>
                  <td><?=$categorie['nom']   ?></td>
                  <td><?=$categorie['description'] ?></td>
                  <td></td>
                  <td></td>
                      
                </tr>
                <?php endforeach;    ?>

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
              <h2 class="text-center">Ajouter/Modifier une categorie</h2> 
            </div>
            <div class="form-group mb-3">
              <label for="">Nom de la Categorie</label>
              <input placeholder="Nom de la Categorie" class="form-control" type="text" name="text ">
            </div>
            <div class="form-group mb-3">
              <label for="">Description</label>
              <textarea name="description" id="" cols="30" rows="6" class="form-control"
                    placeholder="Description de la tache"></textarea>
            </div>
            <div class="form-group mb-3">
              <label for="">Admin Créateur</label>
              <select name="" id="" class="form-select">
                <option value="1">one</option>
                <option value="2">two</option>
                <option value="3">three</option>
              </select>
            </div>
            <div class="row">
              <div class="col-6">
                <button type="submit" class="btn btn-primary w-100  bg-primary text-white" name="btnajouter">Ajouter</button>
              </div>
              <div class="col-6>
                <button class="btn btn-primary w-100 bg-primary text-white" name="btnmodifier"type="submit" >Modifier</button>
             </div>
              </div>
           
            <div class="col-12 mt-3 mb-3">
              <button type="reset" class="btn btn-outline-primary w-100 "  >Annuler</button>
            </div>

          </form>
      </div>
    
  </div>



                
                

    
        


    

    
</body>
</html>