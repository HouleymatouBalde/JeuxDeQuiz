<?php 

function connexiondb(){
    // CONNEXION DE LA BASE DE DONNEE MYSQL
$servername="localhost"; //nom du serveur//
$username="root";
$password="";
$dbname="quiz";
//CREER LA CONNEXION//
// // METHODE UNE
// $connexion = mysqli_connect($servername,$username,$password,$dbname);
// //verifier si la connexion a reussi
// if($connexion){
//     echo "conexion à la db reussi";
// }else{
//     die('connexion echou');
// }
// METHODE DEUX
try {
    //INSTANCE DE LA CLASSE PDO

    $pdo = new PDO("mysql:host=$servername; dbname=$dbname",$username,$password);

    // CONFIGURER LE MODE DERREUR DE PDO SUR EXCEPTION
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion à la db reussi";
    return $pdo;


} catch (PDOException $erreur) {
   die("la connexion à la db echoue :" .$erreur->getMessage ());
}
}
