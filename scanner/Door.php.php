<?php

namespace Scanner;

abstract class Door implements \Scanner\OpenableInterface, \Scanner\LocableInterface{

	protected $state;
	protected $locked;

	public function __construct( $state = self::CLOSED, $locked = self::LOCKED ){
		$this->state	 = $state;
		$this->locked	 = $locked;
	}

	public final function isLocked(){
		return ($this->locked == self::LOCKED);
	}

	public final function isOpen(){
		return ($this->state == self::OPENED);
	}

}