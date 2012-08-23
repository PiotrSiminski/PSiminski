<?php
namespace Scanner;

class Room {
	protected $windows;
	protected $doors;
	
	public function addWindow( \Scanner\Window $Window ){
		$this->windows[] = $Window;
	}
	
	public function addDoor( \Scanner\StandardDoor $Door ){
		$this->doors[] = $Door;
	}
	
	public function openWindow( $windowId ){
		if( isset( $this->windows[$windowId] ) ){
			/* @var $window \Scanner\Window */
			$window = $this->windows[$windowId];
			if( $window->isOpen() ){
				$window->open();
			}
		} else {
			throw new \OutOfBoundsException( 'No such window.' );
		}
	}
}