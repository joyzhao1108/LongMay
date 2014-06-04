<?php 
class WapTmplAction extends BaseAction
{
    public $wecha_id;
    public $token;
    public $apikey;
    public $wxuser;
    public $industrytmpl;
    public $company;
    public $memberurl;
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
        $this->assign('wecha_id',$this->wecha_id);
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
            define('TMPL', 'default');
        }
        else{
            define('TMPL', $industry['tmpl']);
            $this->industrytmpl = '_'.$industry['tmpl'];
        }
        $this->assign('menutmpl','Public:menu'. $this->industrytmpl);
        $this->assign('foottmpl','Public:footer'. $this->industrytmpl);


        $card     = M('member_card_create')->where(array(
            'token' => $this->token,
            'wecha_id' => $this->wecha_id
        ))->find();
        if ($card == false)
        {
            $this->memberurl = U('Wap/Card/get_card', array(
                'token' => $this->token,
                'wecha_id' => $this->wecha_id
            ));
        }
        else
        {
            $this->memberurl = U('Wap/Card/vip', array(
                'token' => $this->token,
                'wecha_id' => $this->wecha_id
            ));
        }
        $this->assign('memberurl',$this->memberurl);
	}

}

?>