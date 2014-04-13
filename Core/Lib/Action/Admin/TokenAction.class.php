<?php
class TokenAction extends BackAction{
	public function index(){
		$map = array();
		$UserDB = D('Wxuser');
		$count = $UserDB->where($map)->count();
		$Page       = new Page($count,5);// 实例化分页类 传入总记录数
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset($_GET['p'])?$_GET['p']:1;
		$show       = $Page->show();// 分页显示输出
		$list = $UserDB->where($map)->order('id ASC')->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
		foreach($list as $key=>$value){
			$user=M('Users')->field('id,gid,username')->where(array('id'=>$value['uid']))->find();
			if($user){
				$list[$key]['user']['username']=$user['username'];
				$list[$key]['user']['gid']=$user['gid']-1;
			}
		}
		//dump($list);
		$this->assign('list',$list);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
		
		
	}
	public function del(){
		$id=$this->_get('id','intval',0);
		$wx=M('Wxuser')->where(array('id'=>$id))->find();
		M('Img')->where(array('token'=>$wx['token']))->delete();
		M('Text')->where(array('token'=>$wx['token']))->delete();
		M('Lottery')->where(array('token'=>$wx['token']))->delete();
		M('Keyword')->where(array('token'=>$wx['token']))->delete();
		M('Photo')->where(array('token'=>$wx['token']))->delete();
		M('Home')->where(array('token'=>$wx['token']))->delete();
		M('Areply')->where(array('token'=>$wx['token']))->delete();
		$diy=M('Diymen_class')->where(array('token'=>$wx['token']))->delete();
		if($diy){
			$this->success('操作成功');
		}else{
			$this->error('操作失败');
		}
	}
	public function edit(){
		if(IS_POST){
			$this->all_save();
		}else{
			$id=$this->_get('id','intval',0);
			if($id==0)$this->error('非法操作');
			$this->assign('tpltitle','编辑');
			$fun=M('Function')->where(array('id'=>$id))->find();
			$this->assign('info',$fun);
			$group=D('User_group')->getAllGroup('status=1');
			$this->assign('group',$group);
			$this->display('add');
		}
	}

    public function funclist(){
        $db=D('Wxuser_func');
        $where["token"]=$_GET["token"];
        $count= $db->where($where)->count();
        $Page= new Page($count,25);
        $show= $Page->show();

        $list = $db->join('as links left join wx_function as func on links.funcid = func.id left join wx_domain as domain on func.domainid = domain.id left join wx_wxuser as wxuser on links.token = wxuser.token')
            ->field('func.name as funcname,domain.name as domainname,func.domainid,func.sort as funcsort,links.id,wxuser.wxname,links.expiredate,links.time')
            ->where("links.token='".$_GET["token"]."'")
            ->limit($Page->firstRow.','.$Page->listRows)
            ->select();
        //$list = $db->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('info',$list);
        $this->assign('page',$show);
        $this->display();
    }

    // 添加用户
    public function funcadd(){
        if(IS_POST){
            $where['token'] = $_POST["token"];
            $user=M('Wxuser')->where($where)->find();
            $_POST['uid']=$user['uid'];
            $_POST['expiredate']=strtotime($_POST['expiredate']);
            $this->insert('Wxuser_func','/funclist?token='.$this->_post('token'));
        }else{
            $where['token'] = $_GET["token"];
            $wxuser=D('wxuser')->where($where)->find();
            $func=D('function')->where('status=1')->order('domainid asc,sort asc')->select();
            $this->assign('title','添加产品--'.$wxuser['wxname']);
            $this->assign('token',$_GET["token"]);
            $this->assign('func',$func);
            $this->display();
        }
    }
    public function funcedit(){
        if(IS_POST){
            $id=D('Wxuser_func')->where(array('id'=>$this->_post('id')))->save(array('expiredate'=>strtotime($_POST['expiredate'])));
            if ($id == true) {
                $this->success('操作成功', U("Token/funclist",array('token'=>$this->_post('token'))));
            } else {
                $this->error('操作失败',U("Token/funcedit",array('id'=>$this->_post('id'),'token'=>$this->_post('token'))));
            }
        }else{
            $id=$this->_get('id','intval',0);
            if($id==0)$this->error('非法操作');
            $where['token'] = $_GET["token"];
            $wxuser=D('wxuser')->where($where)->find();
            $func=D('function')->where('status=1')->order('domainid asc,sort asc')->select();
            $this->assign('title','编辑产品--'.$wxuser['wxname']);
            $this->assign('token',$_GET["token"]);
            $this->assign('func',$func);
            $wxfun=D('Wxuser_func')->relation(true)->where(array('id'=>$id))->find();
            $this->assign('info',$wxfun);
            $this->display("funcadd");
        }
    }

    public function access(){
        if(IS_POST){
            if($this->_post['expiredate'] == false) $this->error('请选择到期时间'.$this->_post['expiredate']);
            $token =$this->_post('token');
            $where['token'] = $token;
            $user=M('Wxuser')->where($where)->find();
            $func_id = $this->_post('func_id');

            $AccessDB = D('Wxuser_func');
            if (is_array($func_id) && count($func_id) > 0) {  //提交得有数据，则修改原权限配置
                $where["funcid"]=array('in',$func_id);
                $AccessDB->where($where)->delete();  //先删除原用户组的权限配置
                foreach($func_id as $k => $funcid){
                    $data[$k]['token'] = $token;
                    $data[$k]['uid'] = $user['uid'];;
                    $data[$k]['expiredate'] = strtotime($this->_post['expiredate']);
                    $data[$k]['time'] = time();
                    $data[$k]['funcid'] = $funcid;
                }
                $AccessDB->addAll($data);   // 重新创建角色的权限配置
            } else {    //提交的数据为空，则删除权限配置
                $this->error('设置失败，未选择产品');
            }
            $this->success("设置成功",U('Token/funclist',array('token'=>$token)));
        }
        else{
            $domains=M('Domain')->field('id,name')->order("id asc")->select();
            foreach($domains as $key=>$vo){
                $fun=M('Function')->where(array('domainid'=>$vo['id']))->order("sort asc")->select();
                $domains[$key]['sub']=$fun;
            }
            $this->assign('domains',$domains);
            $this->assign('token',$this->get('token'));
            $this->display();
        }
    }
}
?>