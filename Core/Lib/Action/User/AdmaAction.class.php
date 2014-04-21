<?php
class AdmaAction extends UserAction{
    public function _initialize()
    {
        parent::_initialize();
        parent::checkRight('adma');
    }
	public function index(){
		$data=D('Adma');
		$adma=$data->where(array('token'=>session('token'),'uid'=>session('uid')))->find();
		$this->assign('adma',$adma);
		if(IS_POST){
			$_POST['uid']=session('uid');
			$_POST['token']=session('token');			
			if($data->create()){
				if($adma==false){
					if($data->add()){
						$this->success('操作成功');					
					}else{
						$this->error('服务器繁忙，请稍候再试');
					}
				}else{
					$_POST['id']=$adma['id'];
					if($data->save($_POST)){
						$this->success('操作成功');					
					}else{
						$this->error('服务器繁忙，请稍候再试');
					}
				}
			}else{
				
				$this->error($data->getError());
			}
		
		}else{
			if($adma==false){
				$adma=M('Adma')->where(array('token'=>'zaichangzhouweixinapi','uid'=>1))->find();
				$this->assign('adma',$adma);
			}
			$this->display();
		}
	}
	public function edit(){
		if($this->_get('token')!=session('token')){$this->error('非法操作');}
		$data=D('Api');
		if(IS_POST){
			if($data->create()){
				if($data->where(array('token'=>session('token'),'uid'=>session('uid')))->save()!=false){
					$this->success('操作成功');					
				}else{
					$this->error('服务器繁忙，请稍候再试');
				}			
			}else{			
				$this->error($data->getError());
			}		
		}else{
			$this->error('非法操作');		
		
		}
	}




}


?>