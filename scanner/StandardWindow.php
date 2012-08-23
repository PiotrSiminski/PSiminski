<?php

namespace Scanner;

class StandardWindow extends \Scanner\Window{

	public function open(){
		$this->state = self::OPENED;
	}

	public function close(){
		$this->state = self::CLOSED;
	}

}