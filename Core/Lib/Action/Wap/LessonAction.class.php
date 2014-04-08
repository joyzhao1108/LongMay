<?php
class LessonAction extends BaseAction{
    private $cats; //分类信息
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
        $cats            = M('Lesson_cat')->where($where)->order('sort asc')->select();
        $this->cats      = $cats;
        $this->assign('token', $this->token);
        $company_db      = M('company');
        $this->company   = $company_db->where(array(
            'token' => $this->token
        ))->find();
        $this->assign('company', $this->company);
        $this->assign('wxuser', $this->wxuser); //微信帐号信息
    }
    public function index(){
        //$agent = $_SERVER['HTTP_USER_AGENT'];
        //if(!strpos($agent,"MicroMessenger")) {
            //echo '此功能只能在微信浏览器中使用';exit;
        //}
        $catname = '全部';
        $lesson_model=M('Lesson');
        $where=array('token'=>$this->token);
        if ($_GET['catid'] != false) {
            $where['catid'] = $this->_get('catid', 'intval');
            $cat = M('Lesson_cat')->where(array(
                'token' => $this->token,
                'id' => $where['catid']
            ))->find();
            $catname = $cat['name'];
        }
        $lessons=$lesson_model->where($where)->order('name asc')->select();
        $this->assign('lessonlist',$lessons);
        $this->assign('cats', $this->cats);
        $this->assign('catname', $catname);
        $this->display();
    }
    public function cats(){
        $lesson_model=M('Lesson');
        $lesson_cat_model=M('Lesson_cat');
        $catWhere=array('parentid'=>0,'token'=>$this->token);
        if (isset($_GET['parentid'])){
            $parentid=intval($_GET['parentid']);
            $catWhere['parentid']=$parentid;
            $thisCat=$lesson_cat_model->where(array('id'=>$parentid))->find();
            $this->assign('thisCat',$thisCat);
            $this->assign('parentid',$parentid);
        }
        $cats = $lesson_cat_model->where($catWhere)->order('sort asc')->select();
        $this->assign('cats',$cats);
        $this->display();
    }
    public function content()
    {
        $db             = M('Lesson');
        $where['token'] = $this->token;
        $where['id']    = $this->_get('id', 'intval');
        $lesson            = $db->where($where)->find();
        $where['id']    = array(
            'neq',
            (int) $_GET['id']
        );
        $where['catid'] = $lesson['catid'];
        $lists          = $db->where($where)->limit(5)->order('name asc')->select();


        $this->assign('lists', $lists); //列表信息
        $this->assign('lesson', $lesson); //课程详情;

        $this->display();
    }
    public function order(){
        /*$agent = $_SERVER['HTTP_USER_AGENT'];
        if(!strpos($agent,"MicroMessenger")) {
            echo '此功能只能在微信浏览器中使用';exit;
        }*/
        $userinfo = M('userinfo')->where(array('wecha_id'=>$this->wecha_id,'token'=>$this->$token))->find();
        $this->assign('userinfo',$userinfo);
        $this->display();
    }
    //在线预定
    public function book(){
        $agent = $_SERVER['HTTP_USER_AGENT'];
        if(!strpos($agent,"MicroMessenger")) {
            echo '此功能只能在微信浏览器中使用';exit;
        }
        if($_POST['action'] == 'book'){

            $data['wecha_id']  =  $this->_post('wecha_id');
            $data['truename']  =  $this->_post('truename');
            $data['info']   =  $this->_post('info');
            $data['tel']       = $this->_post('tel');
            $data['token'] = $this->_get('token');
            $data['time']  = time();
            $order = M('Lesson_order')->data($data)->add();

            if($order){
                echo'{"success":1,"msg":"恭喜,预约成功。"}';
            }else{
                echo'{"success":0,"msg":"请重新预约。"}';
            }
            exit;
        }


    }
    public function myorders(){
        $lesson_order_model=M('lesson_order');
        $orders=$lesson_order_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id))->order('time DESC')->select();
        if ($orders){
            foreach ($orders as $o){
                $products=unserialize($o['info']);
                //$firstProductID=$products
            }
        }
        $this->assign('orders',$orders);
        $this->assign('ordersCount',count($orders));
        $this->assign('metaTitle','我的预定');
        $this->display();
    }
}


?>