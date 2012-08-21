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
        $File=''.'jar';
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
