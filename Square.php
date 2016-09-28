<?php

class Square extends Rectangle
{

	public function __construct($height)
	{
		parent::__construct($height,$height);
	}


	public function perimeter()
	{
		return 4 * $this->getHeight();
	}

	public function area()
	{
		return $this->getHeight() * $this->getHeight();
	}

}
