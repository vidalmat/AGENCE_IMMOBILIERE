<?php

    class Client {

        private $id_client;
        private $nom;
        private $prenom;
        private $adresse;
        private $tel;
        private $mail;
        private $mdp;

        function __construct(int $id_client, string $nom, string $prenom, string $adresse, int $tel, string $mail, string $mdp)
        {
            $this->id_client = $id_client;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->adresse = $adresse;
            $this->tel = $tel;
            $this->mail = $mail;
            $this->mdp = $mdp;
        }


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

        

        // function insert_user(): array {

        //     require_once "classes/Utilisateur.php";
        //     $compteur = ajoutID();
        
        //     //encryptage du mdp
        //     $mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT, ['cost => 12']);
        
        //     $user = new Utilisateur($_POST["pseudo"],$mdp , $compteur );
        //     $user->save_user();
        
        //     // redirection du la page de co au lieu de la page d'accueil
        //     header("Location:index.php?page=connexion");
        //     exit;
        // }
        
        // function showFormCo(): array {
        
        //     return ["template" => "connexion.php"];
        
        // }
        
        // function connect_user(): array {
        
        //     require_once "classes/Utilisateur.php";
        
        //     $userCo = new Utilisateur($_POST["pseudoCo"], $_POST["mdpCo"], $compteur=0 );
        //     if ($userCo->verify_user()) {
        //         session_start();
        //         $_SESSION["user"] = $_POST["pseudoCo"];
        //         $_SESSION["mdp"] = $_POST["mdpCo"];
        
        //         header("Location:index.php?page=compte");
        //         exit; 
        //     }else {
        //         // j'ai renvoyé à la page de connexion au lieu de l'accueil
        //         header("Location:index.php?page=connexion");
        //         exit; 
        //     }
        // }


        function insert(){
            $query = "INSERT INTO clients(mail, mdp) VALUE (:mail, :mdp);";

            $result = $this->pdo->prepare($query);

            $result->bindValue("mail", $this->mail, \PDO::PARAM_STR);
            $result->bindValue("mdp", $this->mdp, \PDO::PARAM_STR);

            $result->execute();
        }


        function dbConnect() {
            $this->pdo = new PDO("mysql:host=localhost:3306;dbname=tp_agence;charset=utf8");
        }


        function selectByMail() {

            $query = "SELECT id_client, mail, mdp FROM clients;";
            $this->dbConnect();
            $result = $this->pdo->prepare($query);

            $result->bindValue("mail", $this->mail, \PDO::PARAM_STR);
            $result->execute();

            return $result->fecth();

        }

    }







?>