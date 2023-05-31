<?php

//define('NOME_COSTANTE','valore della costante');
define('DB_SERVERNAME','localhost:8889');
define('DB_USERNAME','root');
define('DB_PASWORD','root');
define('DB_NAME','db_university');


// creo una nuova connessione
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASWORD, DB_NAME);

// controllo che la connesione sia avvenuta

// se la connessione continere degli errori
if($conn && $conn->connect_error){
  var_dump('Errore nella connessione');
  exit();
}

//var_dump($conn);

// preparo la query
$sql = "SELECT * FROM `students` WHERE `name` = 'antonio'";
$result = $conn->query($sql);

//var_dump($result);
// fetch_all restituisce tutti i dati in un array
//var_dump($result->fetch_all());

//fetch_assoc prende il primo elemento del risultato, no mette in un array associativo e lo toglie dai risultati
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc());
// var_dump($result->fetch_assoc()); // -> null perché è l'undicesimo

// $row = $result->fetch_assoc();
// var_dump($row);
// var_dump($row['name']);
// fetch_object si comporta come fetch_assoc solo che memorizza il dato in un oggetto

// il ciclo looppa fino a quando $row non è null
// if($result->num_rows > 0){
//   while($row = $result->fetch_object()){
//     var_dump($row->name);
//     var_dump($row->surname);
//     var_dump('---------------');
//   }
// }else{
//   var_dump('Non ci sono risultati');
// }

$name = $_GET['name'] ?? '';
$surname = $_GET['surname'] ?? '';



$sql = "SELECT * FROM `students` WHERE `name` = '$name' AND `surname` = '$surname'";
$result = $conn->query($sql);
if($result->num_rows > 0){
  var_dump('Utente abilitato');
}else{
  var_dump('Utente NON abilitato');
}

// alla fine chiudo la connessione
$conn->close();


