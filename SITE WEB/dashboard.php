<?php
session_start();
$data = json_decode(file_get_contents('users.json'), true);

foreach ($data as $user) {
    if ($user['email'] === $_SESSION['user']) {
        echo "Nom : " . $user['nom'] . "<br>";
        echo "Date de naissance : " . $user['naissance'] . "<br>";
        echo "Téléphone : " . $user['telephone'];
        break;
    }
}
