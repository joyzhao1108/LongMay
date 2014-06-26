<?php
class UsercommentAction extends WapTmplAction{
    public function _initialize()
    {
        parent::_initialize();
    }
    public function index(){
        $teacher_model=M('Usercomment');
        $where=array('token'=>$this->token,'wecha_id'=>$this->wecha_id);
        $comment=$teacher_model->where($where)->find();
        $this->assign('comment',$comment);
        $this->display();
    }
    public function dianping()
    {
        $db=D('Usercomment');
        $where=array('token'=>$this->token,'wecha_id'=>$this->wecha_id);
        $res=$db->where($where)->find();
        $where['comment']=$this->_post('comment');
        $where['total']=$this->_post('total');
        $where['p1']=$this->_post('p1');
        $where['p2']=$this->_post('p2');
        $where['p3']=$this->_post('p3');
        $where['time']=time();
        if($res==false){
            $id=$db->data($where)->add();
            if($id){
                echo'{"success":1,"msg":"点评成功。"}';
            }else{
                echo'{"success":0,"msg":"对不起当前网络状况不好，请稍后提交。"}';
            }
        }else{
            $where['id']=$res['id'];
            if($db->save($where)){
                echo'{"success":1,"msg":"点评成功。"}';
            }else{
                echo'{"success":0,"msg":"对不起当前网络状况不好，请稍后提交。"}';
            }
        }
    }
}


?>