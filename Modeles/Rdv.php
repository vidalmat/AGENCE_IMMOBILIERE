<?php



namespace Modeles;
use PDO;


class RDV {

    private $id_rdv;
    private $date;
    private $motif;


    // Construction des getters
    public function getIdRdv(): int {
        return $this->id_rdv;
    }

    public function getDate(): int {
            return $this->date;
    }

    public function getMotif(): ?string {
        return $this->motif;
    }
    /* Fin des getters */


    // Construction des setters
    public function setIdRdv(int $id_rdv) {
        $this->id_rdv = $id_rdv;
    }

    public function setDate(int $date) {
        $this->date = $date;
    }

    public function setMotif(string $motif) {
        $this->motif = $motif;
    }
    /* Fin des setters */


    


}

?>