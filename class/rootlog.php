<?php

$id = $_SESSION['id'];
$ip = $_SESSION['nome_ip'];
$inv_ip = $_SESSION['web_ip'];

$query = "select * from web where ip = '{$inv_ip}'";
$result = mysqli_query($conexao, $query);
$dado = mysqli_fetch_array($result);
$_SESSION['inv_id'] = $dado["userid"];
$inv_id = $_SESSION['inv_id'];

$query1 = "select * from log where userid = '{$inv_id}'";
$result1 = mysqli_query($conexao, $query1);
$dado1 = mysqli_fetch_array($result1);

$_SESSION['inv_log'] = $dado1["log"];
?>