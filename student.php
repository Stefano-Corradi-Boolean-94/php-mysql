<?php

require_once __DIR__ . '/db/functions.php';

$conn = openDbConn();

$id_student = $_GET['id'];

$sql = "SELECT * FROM `students` WHERE `id` = $id_student";
$result = makeQuery($sql, $conn);
$student = $result->fetch_object();


include __DIR__ . '/layout/head.php';
include __DIR__ . '/layout/header.php';


include __DIR__ . '/partials/student.php';


include __DIR__ . '/layout/footer.php';

$conn->close();

