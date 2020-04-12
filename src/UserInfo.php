<?php 

 

 class UserInfo
{

    private string $classID;

    public function __construct(){
        // $this->classID == null ? $this->classID = uniqid("class_"):$this->classID;
    }

    /**
     * return the IP ADDR 
     * @return string
     */
    public function getIp() :string {
	    $mainIp = '';
	    if (getenv('HTTP_CLIENT_IP'))
	        $mainIp = getenv('HTTP_CLIENT_IP');
	    else if(getenv('HTTP_X_FORWARDED_FOR'))
	        $mainIp = getenv('HTTP_X_FORWARDED_FOR');
	    else if(getenv('HTTP_X_FORWARDED'))
	        $mainIp = getenv('HTTP_X_FORWARDED');
	    else if(getenv('HTTP_FORWARDED_FOR'))
	        $mainIp = getenv('HTTP_FORWARDED_FOR');
	    else if(getenv('HTTP_FORWARDED'))
	       $mainIp = getenv('HTTP_FORWARDED');
	    else if(getenv('REMOTE_ADDR'))
	        $mainIp = getenv('REMOTE_ADDR');
	    else
	        $mainIp = 'UNKNOWN';
	    return $mainIp;
	}
}