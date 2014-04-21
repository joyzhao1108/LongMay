<?php
class RobotAction extends UserAction{
    public function _initialize()
    {
        parent::_initialize();
        parent::checkRight('liaotian');
    }
	public function index(){
        $this->display();
	}
}


?>