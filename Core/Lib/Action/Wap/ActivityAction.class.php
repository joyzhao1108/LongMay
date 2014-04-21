<?php
class ActivityAction extends WapTmplAction{
    public function _initialize()
    {
        parent::_initialize();
    }
    public function index(){
        $teacher_model=M('Activity');
        $where=array('token'=>$this->token);
        $where['status'] = 1;
        $teachers=$teacher_model->where($where)->order('sort asc')->select();
        $this->assign('list',$teachers);
        $this->display();
    }
    public function content()
    {
        $db             = M('Activity');
        $where['token'] = $this->token;
        $where['id']    = $this->_get('id', 'intval');
        $lesson            = $db->where($where)->find();
        $where['id']    = array(
            'neq',
            (int) $_GET['id']
        );
        $lists          = $db->where($where)->limit(5)->order('sort asc')->select();
        $this->assign('lists', $lists); //列表信息
        $this->assign('lesson', $lesson); //课程详情;

        $this->display();
    }
}


?>