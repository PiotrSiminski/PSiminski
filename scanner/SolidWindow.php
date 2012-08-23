<?php

namespace Scanner;

class SolidWindow extends \Scanner\StandardWindow{

	public function __construct( $state = self::CLOSED ){
		parent::__construct( self::CLOSED );
	}

	public function open(){
		throw new \BadMethodCallException();
	}

	public function close(){
		throw new \BadMethodCallException();
	}

}