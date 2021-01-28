<?php

    namespace Modeles;
    use PDO;

    class Client {

        private $id_client;
        private $nom;
        private $prenom;
        private $adresse;
        private $tel;
        private $mail;
        private $mdp;

        // function __construct(int $id_client, string $nom, string $prenom, string $adresse, int $tel, string $mail, string $mdp)
        // {
        //     $this->id_client = $id_client;
        //     $this->nom = $nom;
        //     $this->prenom = $prenom;
        //     $this->adresse = $adresse;
        //     $this->tel = $tel;
        //     $this->mail = $mail;
        //     $this->mdp = $mdp;
        // }


        // Construction des getters
        public function getIdClient(): int {
            return $this->id_client;
        }

        public function getNom(): ?string {
                return $this->nom;
        }

        public function getPrenom(): ?string {
            return $this->prenom;
        }

        public function getAdresse(): ?string {
            return $this->adresse;
        }

        public function getTel(): int {
            return $this->tel;
        }
        
        public function getMail(): ?string {
            return $this->mail;
        }

        public function getMdp(): ?string {
            return $this->mdp;
        }

        /* Fin des getters */


        // Construction des setters
        public function setIdClient(int $id_client) {
            $this->id_client = $id_client;
        }

        public function setNom(string $nom) {
            $this->nom = $nom;
        }

        public function setPrenom(string $prenom) {
            $this->prenom = $prenom;
        }

        public function setAdresse(string $adresse) {
            $this->adresse = $adresse;
        }

        public function setTel(int $tel) {
            $this->tel = $tel;
        }

        public function setMail(string $mail) {
            $this->mail = $mail;
        }

        public function setMdp(string $mdp) {
            $this->mdp = $mdp;
        }
        
        /* Fin des setters */



        // function saveUser() {

        //     //echo "Je récupère le contenu de mon fichier users.json :<br>";
        //     $contenu = (file_exists("datas/users.json"))? file_get_contents("datas/users.json") : "";
        //     //var_dump($contenu);
    
        //     //echo "Je décode mon JSON en structure PHP (tableau associatif) :<br>";
        //     $users = json_decode($contenu);
        //     //var_dump($users);
       
        //     $users = (is_array($users))? $users : [];
    
        //     //echo "Je crée un tableau avec mon nouvel objet courant car les $this ne peut pas être encoder après un json-encode: <br>";
        //     $user = get_object_vars($this);
        //     //var_dump($user);
    
        //     //echo "J'ajoute ce livre à mon tableau de users (\$users)";
        //     array_push($users, $user);
        //     //var_dump($users);
    
        //     //echo "J'ouvre mon fichier users.json <br>";
        //     $handle = fopen("datas/users.json", "w");
    
        //     //echo "Je réencode mon tableau au format JSON : <br>";
        //     $json = json_encode($users);
        //     //var_dump($json);
    
        //     //echo "J'écris ma chaîne JSON dans mon fichier users.json<br>";
        //     fwrite($handle, $json);
        //     //echo "Je ferme mon fichier !";
        //     fclose($handle);
        // }



        // function insertUser(): array {

        //     require_once "modeles/Client.php";
        
        //     //encryptage du mdp
        //     $mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT, ['cost => 12']);
        
        //     $user = new Client($_POST["mail"],$mdp);
        //     $user->saveUser();
        
        //     // redirection du la page de co au lieu de la page d'accueil
        //     header("Location:index.php?page=connect");
        //     exit;
        // }
        
        // function showFormCo(): array {
        
        //     return ["template" => "formulaire.php"];
        
        // }
        
    


        // FONCTIONS INTERNES À LA CLASSE


        // sert à afficher la base de données
        public function select() {

       
        $query = "SELECT id_client FROM clients WHERE id_client = :id-client;";
        $result  = $this->pdo->prepare($query);

        // Prévenir l'injection SQL, "voir cours et doc" 
        // ajout de la fonctionnalité "blindValue" pour associer une valeur à un paramètre 
        // + voir ci-dessus remplacer $this->nomdelacolonne par :nomdelacolonne
        $result->bindValue("id_client", $this->id_client, PDO::PARAM_STR);

        $result->execute();
        $datas = $result->fetch();

        if($datas) {
            $this->id_client = $datas['id_client'];
        }
        return $datas;

    }


        public function insert(){
            $query = "INSERT INTO clients(mail, mdp) VALUE (:mail, :mdp);";

            $result = $this->pdo->prepare($query);

            $result->bindValue("mail", $this->mail, \PDO::PARAM_STR);
            $result->bindValue("mdp", $this->mdp, \PDO::PARAM_STR);

            $result->execute();
        }


        public function dbConnect() {
            $this->pdo = new PDO("mysql:host=localhost:3306;dbname=tp_agence;charset=utf8");
        }


        public function selectByMail() {

            $query = "SELECT id_client, mail, mdp FROM clients;";
            $this->dbConnect();
            $result = $this->pdo->prepare($query);

            $result->bindValue("mail", $this->mail, \PDO::PARAM_STR);
            $result->execute();

            return $result->fecth();

        }

    }







?>