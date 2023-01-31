<?php 
if(isset($_POST['id'])) {
    $pdo = new PDO("mysql:host=localhost;dbname=projeto_bootstrap",'root','');
    $sql = $pdo->prepare("DELETE FROM `tb_equipe` WHERE id=?");
    $sql->execute([$_POST['id']]);
}

?>