<?php

namespace Scanner;

class StandardDoor extends \Scanner\Door{

	public function open(){
		if( $this->isLocked() ){
			throw new \RuntimeException( 'Doors are locked' );
		}

		if( $this->isOpen() ){
			throw new \RuntimeException( 'Doors are already opened' );
		}
	}

	public function close(){
		if( !$this->isOpen() ){
			throw new \RuntimeException( 'Doors are already closed' );
		}
	}
}