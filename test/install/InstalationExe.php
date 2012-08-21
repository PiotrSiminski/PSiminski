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
    public function TypeInstalation(){
        //wybranie rodzaju instalacji
        switch ($Type){
        case 1: $Type='typical instalation'; break;
        case 2: $Type='medium instalation'; break;
           default : $Type='customize instalation'; break;
        }
        $this->Type->$newTypeInstalation;

    }


}
?>
