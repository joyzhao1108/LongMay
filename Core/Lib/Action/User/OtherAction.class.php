<?php
class OtherAction extends UserAction{
    public function _initialize()
    {
        parent::_initialize();
        parent::checkRight('outofreply');
    }
	//配置
	public function index(){
		$other=M('Other')->where(array('token'=>session('token')))->find();
		if(IS_POST){
			if($other==false){				
				$this->all_insert('Other','/index');
			}else{
				$_POST['id']=$other['id'];
				$this->all_save('Other','/index');				
			}
		}else{
			//dump($other);
			$this->assign('other',$other);
			$this->display();
		}
	}
	
}



?>