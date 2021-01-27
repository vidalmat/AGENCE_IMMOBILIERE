<?php



namespace Modeles;
use PDO;


class Agent {

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


    // FONCTIONS INTERNES À LA CLASSE
    
    public function insert(){
        $query = "INSERT INTO agents(mail, mdp) VALUE (:mail, :mdp);";

        $result = $this->pdo->prepare($query);

        $result->bindValue("mail", $this->mail, \PDO::PARAM_STR);
        $result->bindValue("mdp", $this->mdp, \PDO::PARAM_STR);

        $result->execute();
    }


    public function dbConnect() {
        $this->pdo = new PDO("mysql:host=localhost:3306;dbname=tp_agence;charset=utf8");
    }


    public function selectByMail() {

        $query = "SELECT id_agent, mail, mdp FROM agents;";
        $this->dbConnect();
        $result = $this->pdo->prepare($query);

        $result->bindValue("mail", $this->mail, \PDO::PARAM_STR);
        $result->execute();

        return $result->fecth();

    }

}
    
    
?>