<?php

/**
 * Description of InstalationExe
 *
 * @author Piotrek
 */
class InstalationJar extends Instalation{
	

	public function __construct(){
		$this->allowedType = 'jar';        		
	}

        public function checkFileInstalation() {
            try{
            parent::checkFileInstalation();
            }
            catch (RuntimeException $e){
                echo $e->getMessage().$e->getFile().$e->getLine();
            }
        }
        protected function Install(){
		// do_epic_shit_with_jar();
		parent::Install();
	}

        
}