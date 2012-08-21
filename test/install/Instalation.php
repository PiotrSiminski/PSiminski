<?php

/**
 * Description of Instalation
 *
 * @author Piotrek
 */
abstract class Instalation implements Name{

	public $getFile;
	public $Path		 = '';
	public $Type		 = '';
	protected $allowedType = '';

	public function Install(){
		echo 'koniec';
	}

	public function getFile(){
		
	}

	public function setPath(); /*
	 * to set a Path to instalation
	 */

	public function checkFileInstalation( $checkFile ){
		$filearray = [ ];
		foreach( $filearray as $value ){
			$File		 = new SplFileObject( $value );
			$extension	 = strtolower( $File->getExtension() );
			$this->parseFiles( $value );
			if( $value !== $this->allowedType ){
				throw new RuntimeException( 'wybrany plik nie jest plikiem instalacyjnym' );
			}
			$this->Install();
		}
		return $this->checkFile;
	}

	private function parseFiles( $value ){
		foreach( $value as $key => $value2 ){
			
		}
	}

	/**
	 * Use one of:
	 * self::TYPICAL
	 */
	public function setTypeInstalation( $newTypeInstalation ){
		switch( $newTypeInstalation ){
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

	/**
	 * @throws InvalidArgumentException gdy nie uzyto prawiodlowo setera
	 */
	public function getTypeAsString(){
		switch( $this->Type ){
			case self::TYPICAL: return 'typical instalation';
				break;
			case self::MEDIUM: return 'medium instalation';
				break;
			case self::CUSTOM: return'customize instalation';
				break;
			default:
				throw new InvalidArgumentException( 'pojebales instalacje' );
				break;
		}
	}

}
