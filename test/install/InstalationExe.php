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
        $File=''.'exe';
        $this->File;
    }
    public function setPath(){
        //ustawienie ścieżki do wypakowania pliku instalacyjnego
        $this->Path;
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
    
    public function getType(){
      return $this->Type;
    }

    /**
     * @throws InvalidArgumentException gdy nie uzyto prawiodlowo setera
     */     
    public getTypeAsString(){}
        switch ($this->Type){
        case self::TYPICAL: return 'typical instalation'; break;
        case self::MEDIUM: return 'medium instalation'; break;
        case self::CUSTOM: return'customize instalation'; break;
        default:
                  throw new InvalidArgumentException( 'pojebales instalacje' ); 
        break;
        }
    }
}

$Install = new InstalationExe();
//$Install->setTypeInstalation( InstalationExe::CUSTOM );
try{
  echo $Install->getTypeAsString();
} catch( InvalidArgumentException $e ){
  echo $e->getMessage();
}
?>
