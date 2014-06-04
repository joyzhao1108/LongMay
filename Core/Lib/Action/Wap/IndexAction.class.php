<?php
function strExists($haystack, $needle)
{
    return !(strpos($haystack, $needle) === FALSE);
}
class IndexAction extends WapTmplAction
{
    private $copyright;

    
    public function _initialize()
    {
        parent::_initialize();
        $gid             = D('Users')->field('gid')->find($this->wxuser['uid']);
        $copy            = D('user_group')->field('iscopyright')->find($gid['gid']); //查询用户所属组
        $this->copyright = $copy['iscopyright'];
        $this->assign('copyright', $this->copyright);
    }

    public function index()
    {
        $where['token'] = $this->_get('token');
        $flash          = M('Flash')->where($where)->order('sort asc')->select();
        $where['status'] = 1;
        $activity          = M('Activity')->where($where)->select();
       /* $buarray = array();
        foreach($bulletin as $vo)
        {
            $title = substr($vo["title"],0,60);
            if(mb_strlen($vo["title"]) > 60)
            {
                $title .= '...';
            }
            $vo["title"] = $title;
            $buarray[] = $vo;
        }*/
        $count          = count($flash);
        $this->assign('bgurl', $flash[0]['img']);
        $this->assign('flash', $flash);
        $this->assign('activity', $activity);
        $this->assign('num', $count);
        $this->display('index'.$this->industrytmpl);
    }
    
    public function lists()
    {
        $where['token'] = $this->_get('token', 'trim');
        $db             = D('Img');
        if ($_GET['p'] == false) {
            $page = 1;
        } else {
            $page = $_GET['p'];
        }
        $where['classid'] = $this->_get('classid', 'intval');
        $count            = $db->where($where)->count();
        $pagecount        = ceil($count / 5);
        if ($page > $count) {
            $page = $pagecount;
        }
        if ($page >= 1) {
            $p = ($page - 1) * 5;
        }
        if ($p == false) {
            $p = 0;
        }
        $res = $db->where($where)->limit("{$p},5")->select();
        $res = $this->convertLinks($res);
        $this->assign('page', $pagecount);
        $this->assign('p', $page);
        $this->assign('info', $this->info);
        $this->assign('tpl', $this->tpl);
        $this->assign('res', $res);
        $this->assign('copyright', $this->copyright);
        $this->display($this->tpl['tpllistname']);
    }
    
    public function content()
    {
        $db             = M('Img');
        $where['token'] = $this->_get('token', 'trim');
        $where['id']    = array(
            'neq',
            (int) $_GET['id']
        );
        $lists          = $db->where($where)->limit(5)->order('uptatetime')->select();
        $where['id']    = $this->_get('id', 'intval');
        $res            = $db->where($where)->find();
        $this->assign('info', $this->info); //分类信息
        $this->assign('lists', $lists); //列表信息
        $this->assign('res', $res); //内容详情;
        $this->assign('tpl', $this->tpl); //微信帐号信息
        $this->assign('copyright', $this->copyright); //版权是否显示
        $this->display($this->tpl['tplcontentname']);
    }
    
    public function flash()
    {
        $where['token'] = $this->token;
        $flash          = M('Flash')->where($where)->select();
        $count          = count($flash);
        $this->assign('flash', $flash);
        $this->assign('info', $this->info);
        $this->assign('num', $count);
        $this->display('ty_index');
    }
}
?>