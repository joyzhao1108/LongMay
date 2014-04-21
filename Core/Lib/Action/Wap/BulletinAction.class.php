<?php
class BulletinAction extends WapTmplAction{
    public function _initialize()
    {
        parent::_initialize();
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