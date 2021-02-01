<?php



namespace Modeles;
use PDO;


class Agent extends DbConnect {

    private $id_agent;
    private $nom;
    private $prenom;
    private $tel;
    private $mail;
    private $mdp;


    // Construction des getters
    public function getIdAgent(): int {
        return $this->id_agent;
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
    public function setIdAgent(int $id_agent) {
        $this->id_agent = $id_agent;
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

        $query = "SELECT id_agent, nom, prenom, mail, tel, mdp FROM agents;";

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

    
        $query = "SELECT id_rdv FROM rdv WHERE id_rdv = :id-rdv;";
        $result  = $this->pdo->prepare($query);

        // Prévenir l'injection SQL, "voir cours et doc" 
        // ajout de la fonctionnalité "blindValue" pour associer une valeur à un paramètre 
        // + voir ci-dessus remplacer $this->nomdelacolonne par :nomdelacolonne
        $result->bindValue("id_rdv", $this->id_rdv, PDO::PARAM_STR);

        $result->execute();
        $datas = $result->fetch();

        if($datas) {
            $this->id_rdv = $datas['id_rdv'];
        }
        return $datas;

    }


    
    public function insert(){
        $query = "INSERT INTO agents(nom, prenom, tel, mail, mdp) VALUE (:nom, :prenom, :tel, :mail, :mdp);";

        $result = $this->pdo->prepare($query);

        $result->bindValue("nom", $this->nom, \PDO::PARAM_STR);
        $result->bindValue("prenom", $this->prenom, \PDO::PARAM_STR);
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


    public function selectByMailFromAgent() {

        $query = "SELECT id_agent, mail, mdp FROM agents;";
        $this->dbConnect();
        $result = $this->pdo->prepare($query);

        $result->bindValue("mail", $this->mail, \PDO::PARAM_STR);
        $result->execute();

        return $result->fetch();

    }




    public function selectByMail() {

        $query = "SELECT id_agent, mail, mdp FROM agents;";
        $result = $this->pdo->prepare($query);

        $result->bindValue("mail", $this->mail, \PDO::PARAM_STR);
        if($result->execute()) 

        var_dump($result->errorInfo());

        return $result->fetch();

    }


}
    
    
?>