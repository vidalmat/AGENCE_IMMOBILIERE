<?php





require "modeles/client.php";

$user = new Modeles\Client();
$user->setNom("Dupont");
$user->setPrenom("Jean");
$user->setAdresse("15 rue de la République 84000 Avignon");
$user->setTel(0606060606);
$user->setMail("jeandupont@jean.fr");
$user->setMdp(password_hash("test", PASSWORD_DEFAULT));
$user->insert();

var_dump($user);


// $user->setEmail("tata@gmail.com");
// $user->setRole("Conseiller");
// $user->setMdp(password_hash("test", PASSWORD_DEFAULT));
// $user->insert();


// $user->setEmail("tutu@gmail.com");
// $user->setRole("Assure");
// $user->setMdp(password_hash("test", PASSWORD_DEFAULT));
// $user->insert();


// $user->setEmail("titi@gmail.com");
// $user->setRole("Assure");
// $user->setMdp(password_hash("test", PASSWORD_DEFAULT));
// $user->insert();

?>