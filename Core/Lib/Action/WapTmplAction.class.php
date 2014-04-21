<?php 
class WapTmplAction extends BaseAction
{
    private $wecha_id;
    public $token;
    public $apikey;
    public $wxuser;
    public $industrytmpl;
    public $company;
	protected function _initialize()
	{
		parent::_initialize();
        //$agent = $_SERVER['HTTP_USER_AGENT'];
        //if(!strpos($agent,"MicroMessenger")) {
        //echo '此功能只能在微信浏览器中使用';exit;
        //}
        $this->token=$this->_get('token');
        $this->assign('token',$this->token);
        $this->apikey=C('baidu_map_api');
        $this->assign('apikey',$this->apikey);
        $this->wxuser=M('Wxuser')->where(array('token'=>$this->token))->find();
        $this->assign('wxuser',$this->wxuser);
        $this->wecha_id  = $this->_get('wecha_id', 'trim');
        $company_db      = M('company');
        $this->company   = $company_db->where(array(
            'token' => $this->token,
            'isbranch' => 0
        ))->find();
        $this->assign('company', $this->company);

        $industryid = $this->wxuser['industryid'];
        $industry=M('Industry')->field('tmpl')->find($industryid);
        if($industry == false)
        {
            $this->industrytmpl = '';
        }
        else{
            $this->industrytmpl = '_'.$industry['tmpl'];
        }
        $this->assign('menutmpl','Public:menu'. $this->industrytmpl);

	}

}

?>