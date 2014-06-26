<?php
class UserAction extends BaseAction{
    protected $wxuser;
    protected $token;
	protected function _initialize(){
		parent::_initialize();
        if(session('uid')==false){
            $this->redirect('Home/Index/login');
        }
		$userinfo=M('User_group')->where(array('id'=>session('gid')))->find();
		$users=M('Users')->where(array('id'=>$_SESSION['uid']))->find();
        if(!$users['status']){
            /*
            session(null);
            session_destroy();
            unset($_SESSION);
            */
            $this->success('您的帐号未通过审核，请联系客服开通',U('Home/Index/login'));
        }
        $token=$this->_get('token','trim');
        if($token)
        {
            session('token',$token);
        }
        $this->token = session('token');
		$wecha=M('Wxuser')->field('wxname,wxid,headerpic,weixin,typename,appid,appsecret')->where(array('token'=>$this->token,'uid'=>session('uid')))->find();
        //dump($wecha);

        $this->wxuser =$wecha;
		$this->assign('wecha',$wecha);

        $this->assign('token',$this->token);
		$this->assign('userinfo',$userinfo);
        $this->assign('thisUser',$users);
	}
    public function checkRight($funname)
    {
        $fun = D('Function')->where(array('funname'=>$funname,'status'=>1))->find();
        if($fun)
        {
            $wherefun = array('token'=>$this->token,'funcid'=>$fun['id']);
            $wherefun['expiredate']=array('gt',strtotime('-1 days'));
            $token_open = D('Wxuser_func')->where($wherefun)->find();
            if($token_open == false){
                $this->display('NoRight:index');
                exit;
            }
        }
    }
}