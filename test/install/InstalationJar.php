<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InstalationJar
 *
 * @author Piotrek
 */
class InstalationJar extends Instalation{
    //czy jest konieczna implementacja interfejsu?
    public function  __construct() {
        
    }
   
    private function getFileJ(){
        //obsługa wybrania pliku
        $this->checkFileInstalation($checkFile);
        
        $this->File;
    }
    public function setPath(){
        //ustawienie ścieżki do wypakowania pliku instalacyjnego
        $this->Path;
    }
    public function  setTypeInstalation($newTypeInstalation) {
    switch($newTypeInstalation){
        case self::MEDIUM;
        case self::TYPICAL;
        case self::CUSTOM;
            break;
        default :
            throw new InvalidArgumentException();
            break;
        }
        $this->Type = $newTypeInstalation;
       
    }
    public function  getTypeInstalation() {
        return $this->Type;;
    }
    public function getTypeAsString() {
        switch ($this->Type){
            case self::CUSTOM return 'custom instalation'; break;
            case self::TYPICAL return 'typical instalation'; break;
            case self::MEDIUM return 'medium instalation'; break;
            default:
            throw new InvalidArgumentException('blad instalacji');
                break;
        }

    }
    public function checkFileInstalation($checkFile){
      private $filearray = array[];
        $types = array['jar','exe'];
        foreach ($filearray as $values)
            $extension = substr($value,  (strpos($value, '.')+1));
        $checkFile = strtolower($extension);
        if(!in_array($value, $types)){
        echo 'wybrany plik nie jest plikiem instalacyjnym';
        }
        elseif($checkFile=='jar'){
            InstallExe()
        }
        return $this->File;
    }
    private function InstallJar(){
        /*
         * wypakowanie i  reszta instalacji pliku exe
         */
        $this->Path;

    }

}
     $Install = new InstalationJar();
     //echo $Install;
     try{
        echo $Install->getTypeAsString();
    }
 catch (InvalidArgumentException $e)
 {
     echo $e->getMessage();
 }

?>
