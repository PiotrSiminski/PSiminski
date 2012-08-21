<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InstalationExe
 *
 * @author Piotrek
 */
class InstalationExe extends Instalation {
    public function  __construct() {
        
    }
    private function getFileE(){
        //$File=''.'exe';
        /*
         *function to check type file jar or exe
         * end exception if jar go to jar instaltion
         */
         $this->checkFileInstalation($checkFile);
        $this->File;
    }
    public function setPath($newPath){

        //ustawienie ścieżki do wypakowania pliku instalacyjnego
        $this->Path = $newPath;
    }
    public function getPath(){
        return $this->Path;
    }
    /**
     * Use one of:
     * self::TYPICAL
     */              
    public function setTypeInstalation($newTypeInstalation){
        switch ($newTypeInstalation){
        case self::TYPICAL:
        case self::MEDIUM:
        case self::CUSTOM:
        break;
        default:
          throw new InvalidArgumentException();
          break;
        }
      $this->Type = $newTypeInstalation;
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
        elseif($checkFile=='exe'){
            InstallExe()
        }
        return $this->$checkFile;
    }
    private function InstallExe(){
        /*
         * wypakowanie i  reszta instalacji pliku exe
         */
        $this->Path;

    }

    /**
     * @throws InvalidArgumentException gdy nie uzyto prawiodlowo setera
     */     
    public getTypeAsString(){
        switch ($this->Type){
        case self::TYPICAL: return 'typical instalation'; break;
        case self::MEDIUM: return 'medium instalation'; break;
        case self::CUSTOM: return'customize instalation'; break;
        default:
                  throw new InvalidArgumentException( 'pojebales instalacje' ); 
        break;
        }
    
}

$Install = new InstalationExe();
//$Install->setTypeInstalation( InstalationExe::CUSTOM );
try{
  echo $Install->getTypeAsString();
} catch( InvalidArgumentException $e ){
  echo $e->getMessage();
}
}
?>
