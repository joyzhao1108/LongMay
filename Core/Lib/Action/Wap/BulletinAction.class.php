<?php
class BulletinAction extends BaseAction{
    private $wecha_id;
    public $token;
    private $wxuser; //微信公共帐号信息
    public function _initialize()
    {
        parent::_initialize();
        $agent = $_SERVER['HTTP_USER_AGENT'];
        //if (!strpos($agent, "MicroMessenger")) {
        // echo '此功能只能在微信浏览器中使用';
        // exit;
        //}
        $this->token     = $this->_get('token', 'trim');
        $this->wecha_id  = $this->_get('wecha_id', 'trim');
        $where['token']  = $this->token;
        $wxuser             = D('Wxuser')->where($where)->find();
        $this->wxuser   =   $wxuser;
        $this->assign('token', $this->token);
        $company_db      = M('company');
        $this->company   = $company_db->where(array(
            'token' => $this->token
        ))->find();
        $this->assign('company', $this->company);
        $this->assign('wxuser', $this->wxuser); //微信帐号信息
    }
    public function content()
    {
        $db             = M('Bulletin');
        $where['token'] = $this->token;
        $where['id']    = $this->_get('id', 'intval');
        $lesson            = $db->where($where)->find();
        $where['id']    = array(
            'neq',
            (int) $_GET['id']
        );
        $this->assign('lesson', $lesson); //课程详情;

        $this->display();
    }
}


?>