<?php

class MyMobileDetector{

	// properties
	private $isCurrentUserMobile;
	private $mobileIdentifierPattern = '/(android|blackberry|iemobile|ipad|iphone|ipod|opera mobile|palmos|webos)/i';
	
	//methods
	function MyMobileDetector(){
		//this is the constructor

		// checking if the user agent contains Mobile identifiers
		if(preg_match($this->mobileIdentifierPattern, $_SERVER['HTTP_USER_AGENT'])){
			$this->isCurrentUserMobile = true;
		}else{
			$this->isCurrentUserMobile = false;
		}

	}

	public function isMobile(){
		return $this->isCurrentUserMobile;
	}


}







?>