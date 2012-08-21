<?php

/**
 * Description of Instalation
 *
 * @author Piotrek
 */
abstract class  Instalation implements Name{

	public $getFile;
	public $Path		 = '';
	public $Type		 = '';
	protected $allowedType = '';

	public function Install(){
		echo 'koniec';
	}

	public function getFile(){
		
	}

	public function checkFileInstalation(){
		$filearray = [];
                
		foreach( $filearray as $value ){
			$File		 = new SplFileObject( $value );
			strtolower($File->getExtension());
			$this->parseFiles( $value );
			if( $value !== $this->allowedType ){
				throw new RuntimeException( 'wybrany plik nie jest plikiem instalacyjnym' );
			}
			$this->Install();
		}
                
		return $this->checkFile;
                
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
				throw new InvalidArgumentException('YOu chosen wrong opction', $newTypeInstalation);
				break;
		}
		$this->Type = $newTypeInstalation;
	}
        public function getTypeInstalation() {
            return $this->Type;
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
        public function setPath($newPath) {
            $this->Path = $newPath;
        }
        public function getPath(){
		return $this->Path;
	}
        

}
