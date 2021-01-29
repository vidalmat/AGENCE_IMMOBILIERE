<?php

class UploadImage {
    
    private $imageFile;
    private $width;
    private $height;
    
    function __construct($imageFile, $width, $height) {
        $this->width = $width;
        $this->height = $height;
        $this->imageFile = $imageFile;
    }
    
    function set_image() {
    
        /* $this->imageFile = tabarray :
         * $this->imageFile['name'] -> nom du fichier initial
         * $this->imageFile['type'] -> type mime
         * $this->imageFile['tmp_name'] -> chemin du fichier temporaire
         * $this->imageFile['error'] -> s'il y a une erreur, à gérer!
         * $this->imageFile['size'] -> taille du fichier */

        /* Récupère les nouveaux noms de fichiers après traitement par la fonction upload() : */
        $filename_new = $this->upload();
        /* Redimensionne les images par la fonction img_resize() : */
        $img_new = $this->img_resize($this->imageFile['tmp_name'], $this->width, $this->height);

        /* Génère l'image fullsize $fullsizeimage_new vers le fichier $filename_new en fonction de son mime : */
        switch ($this->imageFile['type']) {
            case 'image/png'  : imagepng($img_new, realpath('img').'/'. $filename_new, 0);  break;// 0 == compression minimum
            case 'image/jpeg' : imagejpeg($img_new, realpath('img').'/'. $filename_new, 100); break;// 100 == compression maximum
            case 'image/gif'  : imagegif($img_new, realpath('img').'/'. $filename_new);  break;
        }/*-- finswitch */

        return $filename_new;
    
    }/*-- set_image() */
    
    private function upload() {
        // Découpe $this->imageFile['name'] en tableau avec comme séparateur le point
        $tab = explode('.', $this->imageFile['name']);

        // Transforme les caractères accentués en entités HTML
        $fichier = htmlentities($tab[0], ENT_NOQUOTES);

        // Remplace les entités HTML pour avoir juste le premier caractère non accentués
        $fichier = preg_replace('#&([A-za-z])(?:acute|grave|circ|uml|tilde|ring|cedil|lig|orn|slash|th|eg);#', '$1', $fichier);

        // Elimination des caractères non alphanumériques
        $fichier = preg_replace('#\W#', '', $fichier);

        // Troncation du nom de fichier à 25 caractères
        $fichier = substr($fichier, 0, 25);

        // Choix du format d'image
        switch(exif_imagetype($this->imageFile['tmp_name'])) {
            case IMAGETYPE_GIF  : $format = '.gif'; break;
            case IMAGETYPE_JPEG : $format = '.jpg'; break;
            case IMAGETYPE_PNG  : $format = '.png'; break;
        }

        // Ajout du time devant le fichier pour obtenir un fichier unique
        $fichier = time() . '_' . $fichier . $format;

        return $fichier;

    } //------ upload()
    
    private function img_resize(&$file, $width_new, $height_new) {
    
        // Retourne les dimensions et le mime à partir du fichier image
        $tab = getimagesize($file);
        $width_old = $tab[0];
        $height_old = $tab[1];
        $mime_old = $tab['mime'];

        // Ratio pour la mise à l'échelle
        $ratio = $width_old / $height_old;

        // Redimensionnement suivant le ratio (adaption horizontale ou verticale du ratio)
        if ($width_new / $height_new > $ratio) {
            $width_new = $height_new * $ratio;
        } else {
            $height_new = $width_new / $ratio;
        }

        // Nouvelle image redimensionnée
        $image_new = imagecreatetruecolor($width_new, $height_new);


        // Création d'une image à partir du fichier image et suivant le mime
        switch ($mime_old) {
            case 'image/png' :  $image_old = imagecreatefrompng($file); break;
            case 'image/jpeg' : $image_old = imagecreatefromjpeg($file); break;
            case 'image/gif' :  $image_old = imagecreatefromgif($file); break;
        }

        // Copie et redimensionne l'ancienne image dans la nouvelle
        imagecopyresampled($image_new, $image_old, 0, 0, 0, 0, $width_new, $height_new, $width_old, $height_old);

        // Retourne la nouvelle image redimensionnée (Attention ce n'est pas un fichier mais une image)
        return $image_new;

    } //----- img_resize(&$file, $width_new, $height_new)
      
}