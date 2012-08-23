<?php

namespace Scanner;

interface OpenableInterface{

	const OPENED = true;
	const CLOSED = false;

	public function open();

	public function close();
}