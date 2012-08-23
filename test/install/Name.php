<?php
interface Name{
    const TYPICAL = 1;
    const MEDIUM = 2;
    const CUSTOM = 3;
    
    
    public function setPath($newPath);
    public function getPath();
    public function getFile();
    public function Install();
}

?>
