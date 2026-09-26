<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
     <!-- Barre de nav debut -->
    <nav class="navbar navbar-expand-lg bg-primary ">
      <div class="container-fluid">
        <a class="navbar-brand text-black h1" href="#">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active text-black h1" aria-current="page" href="#">Categorie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black h1" href="#">Quiz</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row d-flex justify-content-between">
      <div class="col-6  ">
        <div class="card  shadow-lg  p-2">
          <h2 class="text-center">Liste des questions du QCM </h2>
          <div class="table-responsive">
              <table class="table table-bordered table-striped" >
                <thead class="table-primary">
                  <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Intitulé de la question</th>
                    <th scope="col">Options (A,B,C,D)</th>
                    <th scope="col">Réponse</th>
                    <th scope="col">Actions</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1.</th>
                  <td>Quelle est la capitale de la france?</td>
                  <td>
                    <ul>
                        <li>A-Paris</li>
                        <li>B-Marseuille</li>
                        <li>D-Berlin</li>
                    </ul>
                  </td>
                  <td>A</td>
                  <td>
                      <i class="bi bi-box-arrow-in-down-left"></i><i class="bi bi-trash3-fill"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2.</th>
                  <td>Quelle est l'histoire de la france?</td>
                  <td>
                     <ul>
                        <li>A-Lyon</li>
                        <li>B-Marseuille</li>
                        <li>D-Berlin</li>
                    </ul>
                  </td>
                  <td>A</td>
                  <td><i class="bi bi-box-arrow-in-down-left"></i><i class="bi bi-trash3-fill"></i></td>
                </tr>
                <tr>
                  <th scope="row">3.</th>
                  <td>Quelle est les guerres de Mondiales?</td>
                  <td>
                    <ul>
                        <li>A-Paris</li>
                        <li>B-Marseuille</li>
                        <li>D-Berlin</li>
                    </ul>
                  </td>
                  <td>A</td>
                  <td><i class="bi bi-box-arrow-in-down-left"></i> <i class="bi bi-trash3-fill"></i></td>
                </tr>
                <tr>
                  <th scope="row">4.</th>
                  <td>Quelle est la frangière de la france?</td>
                  <td>
                    <ul>
                        <li>A-Lyon</li>
                        <li>B-Marseuille</li>
                        <li>D-Berlin</li>
                    </ul>
                  </td>
                  <td>A</td>
                  <td> <i class="bi bi-box-arrow-in-down-left"></i><i class="bi bi-trash3-fill"></i></td>
                </tr>
                <tr>
                  <th scope="row">5.</th>
                  <td>Quelle est la guerre de la france?</td>
                  <td>
                    <ul>
                        <li>A-Paris</li>
                        <li>B-Marseuille</li>
                        <li>D-Berlin</li>
                    </ul>
                  </td>
                  <td>A</td>
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
              <label for=""> <h4 class="text-center">Ajouter/Modifier une question </h4> </label>
            </div>
            <div class="form-group mb-3">
              <label for="">Intitulé de la question</label>
              <textarea name="" id="" name="description" id="" cols="30" rows="2" class="form-control"></textarea>
            </div>
            <div class="form-group mb-3 col-4 ">
              <label for="">Option A</label>
              <input type="text"placeholder="" class="form-control"  name="" id="">
              <label for="">Option B</label>
              <input type="text"placeholder="" class="form-control"  name="" id="">
            </div>
             
            <div class="form-group mb-3 col-4 ">
                <label for="">Option C</label>
                <input type="text"placeholder="" class="form-control"  name="" id="">
                <label for="">Option D</label>
                <input type="text"placeholder="" class="form-control"  name="" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Bonne Réponse</label>
                <select name="" id="">
                    <option value="">A</option>
                    <option value="">B</option>
                    <option value="">C</option>
                    <option value="">D</option>
                </select>
            </div>
             <div class="form-group mb-3">
                <label for="">Quiz Associé</label>
                <input type="text" value="Quiz Culture générale Facile>
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