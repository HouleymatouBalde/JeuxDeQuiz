<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux de quiz</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center" >Jeux de quiz</h1>
            <a href="admin/login.php" class="btn btn-outline-primary" >Espace d'administraion</a>
            </div>
            <hr>
            <h3 class="text-center">Entrez vos informations pour commencer le jeu</h3>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="card shadow-lg mt-3 border p-3 col-8">
                <form action="" method="POST">
                    <div class="form-group  mb-3">
                        <label for="">Entrer votre nom:</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group" mb-3 >
                        <label for="">Entrer votre prenom:</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group mb-3"  >
                        <label for="">Entrer votre pseudo:</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Choisissez votre categorie de quiz:</label>
                        <select class="form-control" name="" id="">
                            <option value="">Culture générale</option>
                            <option value="">Histoire</option>
                            <option value="">Crise des années 80</option>
                        </select>
                    </div>
                    <div class="form-group  mt-3 text-end ">
                       <button class="btn btn-outline-primary w-50">Valider</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>