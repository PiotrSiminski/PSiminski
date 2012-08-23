<?php

namespace Scanner;

abstract class Window implements \Scanner\OpenableInterface{

	protected $state;

	public function __construct( $state = self::CLOSED ){
		$this->state = $state;
	}

	public final function isOpen(){
		return ($this->state == self::OPENED);
	}
}