<?php
class FunctionAction extends UserAction{
	function index(){
		$id=$this->_get('id','intval');
		$info=M('Wxuser')->find($id);
		if($info==false||$info['token']!==$this->token){
			$this->error('非法操作',U('Home/Index/index'));
		}
		session('wxid',$info['id']);
		//第一次登陆　创建　功能所有权
		$token_open=D('Wxuser_func');
        $where = array('token'=>session('token'),'uid'=>session('uid'));
        $where["expiredate"] = array('EGT',time());
        import("@.ORG.Date");
		//遍历功能列表
		$domains=M('Domain')->field('id,name')->order("id asc")->select();
		foreach($domains as $key=>$vo){
			$fun=M('Function')->where(array('domainid'=>$vo['id'],'status'=>1))->order("sort asc")->select();
            $funlist = array();
            foreach($fun as $vof){
                $where["funcid"] = $vof["id"];
                $link=$token_open->where($where)->find();
                //echo $token_open->getLastSql();
                if($link == false)
                {
                    $vof["lastdays"] = 0;
                }
                else{
                    $d = new Date((int)$link["expiredate"]);
                    $vof["lastdays"] = -(int)$d->dateDiff(time());
                    $vof["expiredate"] = $link["expiredate"];
                }
                $funlist[] = $vof;
            }
            $domains[$key]['sub']=$funlist;
		}
		$this->assign('domains',$domains);
		$this->display();
	}
}

?>