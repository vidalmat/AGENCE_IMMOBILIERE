<?php

    namespace Modeles;
    use PDO;

    class Client extends DbConnect {

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

        public function getTel(): ?string {
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

        public function setTel(string $tel) {
            $this->tel = $tel;
        }

        public function setMail(string $mail) {
            $this->mail = $mail;
        }

        public function setMdp(string $mdp) {
            $this->mdp = $mdp;
        }
        
        /* Fin des setters */


        // FONCTIONS INTERNES À LA CLASSE


        // variable contenant la requête SQL sous la forme d'une chaîne de caractère
    public function selectAll() {

        $query = "SELECT id_client, nom, prenom, adresse, mail, tel, mdp FROM clients;";

        // je récupère un objet de type PDOStatement => requête préparée
        $result = $this->pdo->prepare($query);

        // exécution de la requête préparée - $result récupère le jeu de résultat 
        $result->execute();

        //
        $datas = $result->fetchAll();

        return $datas;
    }


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
            $query = "INSERT INTO clients(nom, prenom, adresse, tel, mail, mdp) VALUE (:nom, :prenom, :adresse, :tel, :mail, :mdp);";

            $result = $this->pdo->prepare($query);

            $result->bindValue("nom", $this->nom, \PDO::PARAM_STR);
            $result->bindValue("prenom", $this->prenom, \PDO::PARAM_STR);
            $result->bindValue("adresse", $this->adresse, \PDO::PARAM_STR);
            $result->bindValue("tel", $this->tel, \PDO::PARAM_STR);
            $result->bindValue("mail", $this->mail, \PDO::PARAM_STR);
            $result->bindValue("mdp", $this->mdp, \PDO::PARAM_STR);

            if(!$result->execute()) {
                var_dump( $result->errorInfo()); // sert à détecter la moindre erreur dans la fonction
                $_SESSION["error"]["bdd"] = $result->errorInfo()[2]; // sert à faire apparaître l'erreur dû à un mail identique par ex 
                return false;
            }else {
                return $this;
            }
        }


        public function dbConnect() {
            $this->pdo = new PDO("mysql:host=localhost:3306;dbname=tp_agence;charset=utf8");
        }


        public function update() {



        }


        public function delete() {

        //     $query = "DELETE FROM clients WHERE  reference = :reference;";

        // $result = $this->pdo->prepare($query);

        // // Prévenir l'injection SQL, "voir cours et doc" 
        // // ajout de la fonctionnalité "blindValue" pour associer une valeur à un paramètre 
        // // + voir ci-dessus remplacer $this->nomdelacolonne par :nomdelacolonne
        // $result->bindValue("reference", $this->reference, PDO::PARAM_STR);

        // return $result->execute();


        }


        public function selectByMail() {

            $query = "SELECT id_client, mail, mdp FROM clients;";
            $result = $this->pdo->prepare($query);

            $result->bindValue("mail", $this->mail, \PDO::PARAM_STR);
            if($result->execute()) 

            var_dump($result->errorInfo());

            return $result->fetch();

        }

    }







?>