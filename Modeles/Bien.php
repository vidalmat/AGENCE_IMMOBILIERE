<?php



namespace Modeles;
use PDO;


class Bien extends DbConnect {

    private $id_bien;
    private $nom;
    private $adresse;
    private $prix;

    // Construction des getters
    public function getIdAgent(): int {
        return $this->id_bien;
    }

    public function getNom(): ?string {
            return $this->nom;
    }

    public function getAdresse(): ?string {
        return $this->adresse;
    }

    public function getPrix(): int {
        return $this->tel;
    }

    /* Fin des getters */

    // Construction des setters
    public function setIdBien(int $id_bien) {
        $this->id_bien = $id_bien;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function setAdresse(string $adresse) {
        $this->adresse = $adresse;
    }

    public function setPrix(int $prix) {
        $this->prix = $prix;
    }
    /* Fin des setters */




    // FONCTIONS INTERNES À LA CLASSE


    // sert à afficher la base de données
    public function select() {

    
        $query = "SELECT id_bien FROM bien WHERE id_bien = :id_bien;";
        $result  = $this->pdo->prepare($query);

        // Prévenir l'injection SQL, "voir cours et doc" 
        // ajout de la fonctionnalité "blindValue" pour associer une valeur à un paramètre 
        // + voir ci-dessus remplacer $this->nomdelacolonne par :nomdelacolonne
        $result->bindValue("id_bien", $this->id_bien, PDO::PARAM_STR);

        $result->execute();
        $datas = $result->fetch();

        if($datas) {
            $this->id_rdv = $datas['id_bien'];
        }
        return $datas;

    }

    public function insert(){
        $query = "INSERT INTO bien(nom, adresse, prix) VALUE (:nom, :adresse, :prix);";

        $result = $this->pdo->prepare($query);

        $result->bindValue("nom", $this->nom, \PDO::PARAM_STR);
        $result->bindValue("adresse", $this->adresse, \PDO::PARAM_STR);
        $result->bindValue("prix", $this->prix, \PDO::PARAM_STR);

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

}


?>