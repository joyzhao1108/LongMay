<?php
class TeacherAction extends UserAction{
	public $token;
	public $Teacher_model;
	public $Teacher_cat_model;
	public $isDining;
	public function _initialize() {
		parent::_initialize();
		$token_open = M('token_open')->field('queryname')->where(array('token'=>session('token')))->find();
		if(!strpos($token_open['queryname'],'teacher')){
            $this->error('您还未开启该模块的使用权,请到功能模块中添加',U('Index/index',array('token'=>session('token'),'id'=>session('wxid'))));
		}	
	}
	public function index(){	
	
		$Teacher_model=D('Teacher');	
		$where=array('token'=>session('token'));		
	
        if(IS_POST){
            $key = $this->_post('searchkey');
            if(empty($key)){
                $this->error("关键词不能为空");
            }

            $map['token'] = $this->get('token'); 
            $map['name|intro|introdetail'] = array('like',"%$key%"); 
            $list = $Teacher_model->relation(true)->where($map)->select(); 
            $count      = $Teacher_model->where($map)->count();       
            $Page       = new Page($count,20);
        	$show       = $Page->show();
        }
		else{
        	$count      = $Teacher_model->where($where)->count();
        	$Page       = new Page($count,20);
        	$show       = $Page->show();
        	$list = $Teacher_model->where($where)->order('sort asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }	
		$this->assign('page',$show);		
		$this->assign('list',$list);
		$this->assign('isTeacherPage',1);
		
		$this->display();		
	}
	

	
	public function add(){ 
		if(IS_POST){
			$this->insert('Teacher','/index?token='.session('token'));
		}else{			
			$this->assign('isTeacherPage',1);
			$this->display('set');
		}
	}
	
	public function set(){
        $id = $this->_get('id'); 
        $Teacher_model=M('Teacher');      
		$checkdata = $Teacher_model->where(array('id'=>$id))->find();
		if(empty($checkdata)){
            $this->error("没有相应记录.您现在可以添加.",U('Teacher/add'));
        }
		if(IS_POST){ 
            $where=array('id'=>$this->_post('id'),'token'=>session('token'));
			$check=$Teacher_model->where($where)->find();
			if($check==false)$this->error('非法操作');
			if($Teacher_model->create()){
				if($Teacher_model->where($where)->save($_POST)){
					$this->success('修改成功',U('Teacher/index',array('token'=>session('token'))));
				}else{
					$this->error('操作失败');
				}
			}else{
				$this->error($Teacher_model->getError());
			}
		}else{			
			$this->assign('isUpdate',1);		
			$this->assign('set',$checkdata);
			$this->assign('isTeacherPage',1);
			$this->display();	
		
		}
	}
	public function del(){
		$lesson_model=M('Teacher');
		if($this->_get('token')!=session('token')){$this->error('非法操作');}
        $id = $this->_get('id');
        if(IS_GET){                              
            $where=array('id'=>$id,'token'=>session('token'));
            $check=$lesson_model->where($where)->find();
            if($check==false)   $this->error('非法操作');

            $back=$lesson_model->where($where)->delete();
            if($back==true){            	
                $this->success('操作成功',U('Teacher/index',array('token'=>session('token'))));
            }else{
                 $this->error('服务器繁忙,请稍后再试',U('Teacher/index',array('token'=>session('token'))));
            }
        }        
	}
}


?>