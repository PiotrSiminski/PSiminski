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

	private function getFileE(){
//$File=''.'exe';
		/*
		 * function to check type file jar or exe
		 * end exception if jar go to jar instaltion
		 */
		$this->checkFileInstalation( $checkFile );
	}

	public function setPath( $newPath ){

//ustawienie ścieżki do wypakowania pliku instalacyjnego
		$this->Path = $newPath;
	}

	public function getPath(){
		return $this->Path;
	}

	/*
	 * wypakowanie i  reszta instalacji pliku exe
	 */

	protected function Install(){
		// do_epic_shit();
		parent::Install();
	}
}