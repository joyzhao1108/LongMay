<?php
class BulletinAction extends UserAction{
	public $token;
	public $Bulletin_model;
	public function _initialize() {
		parent::_initialize();
		$token_open = M('token_open')->field('queryname')->where(array('token'=>session('token')))->find();
		if(!strpos($token_open['queryname'],'bulletin')){
            $this->error('您还未开启该模块的使用权',U('Index/index',array('token'=>session('token'),'id'=>session('wxid'))));
		}	
	}
	public function index(){	
	
		$Bulletin_model=D('Bulletin');	
		$where=array('token'=>session('token'));		
	
        if(IS_POST){
            $key = $this->_post('searchkey');
            if(empty($key)){
                $this->error("关键词不能为空");
            }

            $map['token'] = $this->get('token'); 
            $map['title|introdetail'] = array('like',"%$key%"); 
            $list = $Bulletin_model->where($map)->order('sort asc')->select(); 
            $count      = $Bulletin_model->where($map)->count();       
            $Page       = new Page($count,20);
        	$show       = $Page->show();
        }
		else{
        	$count      = $Bulletin_model->where($where)->count();
        	$Page       = new Page($count,20);
        	$show       = $Page->show();
        	$list = $Bulletin_model->where($where)->order('sort asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }	
		$this->assign('page',$show);		
		$this->assign('list',$list);
		$this->assign('isBulletinPage',1);
		
		$this->display();		
	}
	

	
	public function add(){ 
		if(IS_POST){
			$this->insert('Bulletin','/index?token='.session('token'));
		}else{			
			$this->assign('isBulletinPage',1);
			$this->display('set');
		}
	}
	
	public function set(){
        $id = $this->_get('id'); 
        $Bulletin_model=M('Bulletin');      
		$checkdata = $Bulletin_model->where(array('id'=>$id))->find();
		if(empty($checkdata)){
            $this->error("没有相应记录.您现在可以添加.",U('Bulletin/add'));
        }
		if(IS_POST){ 
            $where=array('id'=>$this->_post('id'),'token'=>session('token'));
			$check=$Bulletin_model->where($where)->find();
			if($check==false)$this->error('非法操作');
			if($Bulletin_model->create()){
				if($Bulletin_model->where($where)->save($_POST)){
					$this->success('修改成功',U('Bulletin/index',array('token'=>session('token'))));
				}else{
					$this->error('操作失败');
				}
			}else{
				$this->error($Bulletin_model->getError());
			}
		}else{			
			$this->assign('isUpdate',1);		
			$this->assign('set',$checkdata);
			$this->assign('isBulletinPage',1);
			$this->display();	
		
		}
	}
	public function del(){
		$lesson_model=M('Bulletin');
		if($this->_get('token')!=session('token')){$this->error('非法操作');}
        $id = $this->_get('id');
        if(IS_GET){                              
            $where=array('id'=>$id,'token'=>session('token'));
            $check=$lesson_model->where($where)->find();
            if($check==false)   $this->error('非法操作');

            $back=$lesson_model->where($wehre)->delete();
            if($back==true){            	
                $this->success('操作成功',U('Bulletin/index',array('token'=>session('token'))));
            }else{
                 $this->error('服务器繁忙,请稍后再试',U('Bulletin/index',array('token'=>session('token'))));
            }
        }        
	}
}


?>