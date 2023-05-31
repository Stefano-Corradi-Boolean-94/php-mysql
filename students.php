<?php

require_once __DIR__ . '/db/functions.php';

$conn = openDbConn();

$limit = 20;
$offset = $_GET['offset'] ?? 0;

// query per la paginazione
$sql = "SELECT * FROM `students` LIMIT $limit OFFSET $offset";
$result = makeQuery($sql, $conn);

// query per il conto degli studenti totali
$sql = "SELECT * FROM `students`";
$result_global = makeQuery($sql, $conn);
$totale_studenti = $result_global->num_rows;



include __DIR__ . '/layout/head.php';
include __DIR__ . '/layout/header.php';


include __DIR__ . '/partials/students.php';


include __DIR__ . '/layout/footer.php';

$conn->close();

