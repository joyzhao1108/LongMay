<?php
class ActivityAction extends UserAction{
	public $Activity_model;
	public $Activity_cat_model;

    public function _initialize()
    {
        parent::_initialize();
        parent::checkRight('activity');
    }
	public function index(){	
	
		$Activity_model=D('Activity');	
		$where=array('token'=>session('token'));		
	
        if(IS_POST){
            $key = $this->_post('searchkey');
            if(empty($key)){
                $this->error("关键词不能为空");
            }

            $map['token'] = $this->get('token'); 
            $map['name|intro|introdetail'] = array('like',"%$key%"); 
            $list = $Activity_model->relation(true)->where($map)->select(); 
            $count      = $Activity_model->where($map)->count();       
            $Page       = new Page($count,20);
        	$show       = $Page->show();
        }
		else{
        	$count      = $Activity_model->where($where)->count();
        	$Page       = new Page($count,20);
        	$show       = $Page->show();
        	$list = $Activity_model->where($where)->order('sort asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }	
		$this->assign('page',$show);		
		$this->assign('list',$list);
		$this->assign('isActivityPage',1);
		
		$this->display();		
	}
	

	
	public function add(){ 
		if(IS_POST){
			$this->insert('Activity','/index?token='.session('token'));
		}else{			
			$this->assign('isActivityPage',1);
			$this->display('set');
		}
	}
	
	public function set(){
        $id = $this->_get('id'); 
        $Activity_model=M('Activity');      
		$checkdata = $Activity_model->where(array('id'=>$id))->find();
		if(empty($checkdata)){
            $this->error("没有相应记录.您现在可以添加.",U('Activity/add'));
        }
		if(IS_POST){ 
            $where=array('id'=>$this->_post('id'),'token'=>session('token'));
            $_POST['statdate']=strtotime($this->_post('statdate'));
            $_POST['enddate']=strtotime($this->_post('enddate'));
			$check=$Activity_model->where($where)->find();
			if($check==false)$this->error('非法操作');
			if($Activity_model->create()){
				if($Activity_model->where($where)->save($_POST)){
					$this->success('修改成功',U('Activity/index',array('token'=>session('token'))));
				}else{
					$this->error('操作失败');
				}
			}else{
				$this->error($Activity_model->getError());
			}
		}else{			
			$this->assign('isUpdate',1);		
			$this->assign('set',$checkdata);
			$this->assign('isActivityPage',1);
			$this->display();	
		
		}
	}
	public function del(){
		$lesson_model=M('Activity');
		if($this->_get('token')!=session('token')){$this->error('非法操作');}
        $id = $this->_get('id');
        if(IS_GET){                              
            $where=array('id'=>$id,'token'=>session('token'));
            $check=$lesson_model->where($where)->find();
            if($check==false)   $this->error('非法操作');

            $back=$lesson_model->where($where)->delete();
            if($back==true){            	
                $this->success('操作成功',U('Activity/index',array('token'=>session('token'))));
            }else{
                 $this->error('服务器繁忙,请稍后再试',U('Activity/index',array('token'=>session('token'))));
            }
        }        
	}
}


?>