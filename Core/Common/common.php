<?php
function isAndroid(){
	if(strstr($_SERVER['HTTP_USER_AGENT'],'Android')) {
		return 1;
	}
	return 0;
}
function GetLastDays($expiredate)
{
    $d = new Date((int)$expiredate);
    $re = -(int)$d->dateDiff(time());
    return $re;
}
?>