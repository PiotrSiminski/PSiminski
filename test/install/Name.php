<?php
interface Name{
    const TYPICAL = 1;
    CONST MEDIUM = 2;
    const CUSTOM = 3;
    
    
    public function setPath($newPath);
    public function getPath();
    public function getFile();
    public function setTypeInstalation($newTypeInstalation);
    //public function getTypeInstalation();
}

?>
