<?php

/**
 * Description of InstalationExe
 *
 * @author Piotrek
 */
class InstalationExe extends Instalation{
	

	public function __construct(){
		$this->allowedType = 'exe';        		
	}
        
        
        public function checkFileInstalation() {
            try{
                parent::checkFileInstalation();
            
            }
            catch (RuntimeException $e)
            {
                echo $e->getMessage().$e->getFile().$e->getLine();
            }
        }        
        protected function Install(){
		// do_epic_shit();
		parent::Install();
	}

        
}