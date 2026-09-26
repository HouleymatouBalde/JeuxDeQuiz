<?php 
    require_once __DIR__ . "/head.php";
?>
<!-- POUR APPELLER LE FICHIER NAVBAR -->
<?php 
    require_once __DIR__ . "/navbar.php";
?>

   
         <!-- debut de la partie main -->
          <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-3">
                        <div class="card p-2 shadow d-flex flex-row align-items-center">
                            <i class="bi bi-people-fill fs-1"></i>
                            <div class="ms-3 text-center">
                                <h4>Nombre de joueurs</h4>
                                <h4>50</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card p-2 shadow d-flex flex-row align-items-center">
                            <i class="bi bi-question-circle-fill fs-1"></i>
                            <div class="ms-3 text-center">
                                <h4>Total Questions</h4>
                                <h4>50</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card p-2 shadow d-flex flex-row align-items-center">
                            <i class="bi bi-bookmarks-fill fs-1"></i>
                            <div class="ms-3 text-center">
                                <h4>Total Categorie</h4>
                                <h4>50</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card p-2 shadow d-flex flex-row align-items-center">
                            <i class="bi bi-trophy-fill fs-1"></i>
                            <div class="ms-3 text-center">
                                <h4>Meilleur score</h4>
                                <h4>10/10</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DEBUT CARD DANALYSE -->
                 <!-- DEBUT LISTE DASHBOARD -->
                <div class="row mt-4 p-2" >
                    <div class="col-6 ">
                        <div class=" card shadow p-2">
                            <h2 class="text-center">Nouveaux joueurs</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" >
                                    <thead class="table-primary">
                                        <tr>
                                        <th scope="col">N°</th>
                                        <th scope="col">NOM</th>
                                        <th scope="col">PRENOM</th>
                                        <th scope="col">PSEUDO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                        </tr>
                                    </tbody>
                                    </table>
                            </div>
                        </div>
                    </div> 
                    <div class="col-6 ">
                        <div class=" card shadow p-2">
                            <h2 class="text-center">Nouveaux joueurs</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" >
                                    <thead class="table-primary">
                                        <tr>
                                        <th scope="col">N°</th>
                                        <th scope="col">NOM</th>
                                        <th scope="col">PRENOM</th>
                                        <th scope="col">PSEUDO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@social</td>
                                        </tr>
                                    </tbody>
                                    </table>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- FIN DASHBOARD -->
                    <?php 
                    require_once __DIR__ . "/footer.php";
                    ?>
                 
          </div>
          <!-- fin de la partie main -->
</body>
</html>