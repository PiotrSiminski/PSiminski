<?php

namespace Scanner;

interface LocableInterface{

	const LOCKED = true;
	const UNLOCKED = false;

	public function lock();

	public function unlock();
	
	public function isLocked();
}