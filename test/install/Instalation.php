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
    public $getFile;

    public $Path = '';
    public $Type = '';

    public function getFile(){

    }
    public function setPath();/*
     * to set a Path to instalation
     */
    abstract public function TypeInstalation();/*
     * to set a type instalation
     * medium, typical, customize
     * on instalationJAR and InstalationEXE
     */

}
?>
