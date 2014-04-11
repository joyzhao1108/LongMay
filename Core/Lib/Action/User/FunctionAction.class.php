<?php
class FunctionAction extends UserAction{
	function index(){
		$id=$this->_get('id','intval');
		$token=$this->_get('token','trim');	
		$info=M('Wxuser')->find($id);
		if($info==false||$info['token']!==$token){
			$this->error('非法操作',U('Home/Index/index'));
		}
		session('token',$token);
		session('wxid',$info['id']);
		//第一次登陆　创建　功能所有权
		$token_open=M('Token_open');
		$toback=$token_open->field('id,queryname')->where(array('token'=>session('token'),'uid'=>session('uid')))->find();
		$open['uid']=session('uid');
		$open['token']=session('token');

		//遍历功能列表
		$domains=M('Domain')->field('id,name')->order("id asc")->select();
		$check=explode(',',$toback['queryname']);
		$this->assign('check',$check);
		foreach($domains as $key=>$vo){
			$fun=M('Function')->where(array('domainid'=>$vo['id']))->order("sort asc")->select();
            $domains[$key]['sub']=$fun;
		}
		$this->assign('domains',$domains);
		$this->display();
	}
}

?>