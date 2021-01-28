<?php



namespace Modeles;
use PDO;


class RDV {

    private $id_rdv;
    private $date_rdv;
    private $motif;


    // Construction des getters
    public function getIdRdv(): int {
        return $this->id_rdv;
    }

    public function getDate(): int {
            return $this->date_rdv;
    }

    public function getMotif(): ?string {
        return $this->motif;
    }
    /* Fin des getters */


    // Construction des setters
    public function setIdRdv(int $id_rdv) {
        $this->id_rdv = $id_rdv;
    }

    public function setDate(int $date_rdv) {
        $this->date_rdv = $date_rdv;
    }

    public function setMotif(string $motif) {
        $this->motif = $motif;
    }
    /* Fin des setters */


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
        $query = "INSERT INTO rdv(date_rdv, motif) VALUE (:date_rdv, :motif);";

        $result = $this->pdo->prepare($query);

        $result->bindValue("date_rdv", $this->mail, \PDO::PARAM_STR);
        $result->bindValue("motif", $this->mdp, \PDO::PARAM_STR);

        $result->execute();
    }


    public function dbConnect() {
        $this->pdo = new PDO("mysql:host=localhost:3306;dbname=tp_agence;charset=utf8");
    }


}

?>