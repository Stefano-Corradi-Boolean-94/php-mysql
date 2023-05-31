<?php

require_once __DIR__ . '/../env.php';


function openDbConn(){
  $conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASWORD, DB_NAME);
  if($conn && $conn->connect_error){
    var_dump('Errore nella connessione');
    exit();
  }

  return $conn;
}

function makeQuery($sql, $conn){
  return $conn->query($sql);
}