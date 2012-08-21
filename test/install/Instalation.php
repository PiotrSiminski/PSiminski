<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Instalation
 *
 * @author Piotrek
 */
abstract class Instalation implements Name {
    public $File;

    public $Path = '';
    public $Type = '';

    public function getFile(){

    }
    public function setPath();/*
     * to set a Path to instalation
     */
    abstract public function setTypeInstalation($newTypeInstalation);/*
     * to set a type instalation
     * medium, typical, customize
     * on instalationJAR and InstalationEXE
     */
    abstract public function checkFileInstalation($checkFile);/*
     * to check type file instalation JAR or EXE
     */

}
?>
