<?php
class IndexAction extends UserAction{
	//公众帐号列表
	public function index(){
		$where['uid']=session('uid');
		$user=M('Users')->find(session('uid'));
        $group=M('User_group')->find($user['gid']);
		$db=D('Wxuser');
		$count=$db->where($where)->count();
		$page=new Page($count,25);
		$info=$db->relation(true)->where($where)->limit($page->firstRow.','.$page->listRows)->select();

        $token_open=D('Wxuser_func');
        foreach($info as $key=>$vo){
            $where = array('token'=>$vo['token'],'uid'=>session('uid'));
            $fun=$token_open->relation(true)->where($where)->select();
            $info[$key]['fun']=$fun;
            if(($vo['wxtype'] == 1) && (empty($vo['appid']) || empty($vo['appsecret'])))
            {
                $info[$key]['outrule'] = 1;
            }
        }

		$this->assign('info',$info);
		$this->assign('group',$group);
		$this->assign('page',$page->show());
		$this->display();
	}
	//添加公众帐号
	public function add(){
		$email = str_replace("http://","",C('site_url'));
		$email = str_replace("/","",C('site_url'));
		$email_l = strpos($email,".") + 1;
		$email = substr($email,$email_l);
		$randLength=6;
		$chars='abcdefghijklmnopqrstuvwxyz';
		$len=strlen($chars);
		$randStr='';
		for ($i=0;$i<$randLength;$i++){
			$randStr.=$chars[rand(0,$len-1)];
		}
		$tokenvalue=$randStr.time();
		$this->assign('tokenvalue',$tokenvalue);
		$this->assign('email',time().'@'.$email);
		//地理信息
		if (C('baidu_map_api')){
			//$locationInfo=json_decode(file_get_contents('http://api.map.baidu.com/location/ip?ip='.$_SERVER['REMOTE_ADDR'].'&coor=bd09ll&ak='.C('baidu_map_api')),1);
			///$this->assign('province',$locationInfo['content']['address_detail']['province']);
			//$this->assign('city',$locationInfo['content']['address_detail']['city']);
			//var_export($locationInfo);
		}
	
		
		$this->display();
	}
	public function edit(){
		$id=$this->_get('id','intval');
		$where['uid']=session('uid');
		$res=M('Wxuser')->where($where)->find($id);
		$this->assign('info',$res);
        if($res['wxtype'] == 1 && (empty($res['appid']) || empty($res['appsecret'])))
        {
            $this->display('editappid');
        }
		$this->display();
	}
    public function editappid(){
        $id=$this->_get('id','intval');
        $where['uid']=session('uid');
        $res=M('Wxuser')->where($where)->find($id);
        $this->assign('info',$res);
        $this->display();
    }
    public function setindustry(){
        $db = M('Wxuser');
        if(IS_POST)
        {
            $id=$this->_post('id','intval');
            $where['id']=$id;
            if ($db->where($where)->save($_POST)) {
                $this->success('操作成功',U('Index/index'));
            } else {
                $this->error('操作失败');
            }
        }
        else{
            $id=$this->_get('id','intval');
            $where['uid']=session('uid');
            $res=$db->where($where)->find($id);
            $industry=M('Industry')->where('status=1')->select();
            $this->assign('info',$res);
            $this->assign('industry',$industry);
            $this->display();
        }

    }

	public function editsms(){
		$id=$this->_get('id','intval');
		$where['uid']=session('uid');
		$res=M('Wxuser')->where($where)->find($id);
		$this->assign('info',$res);
		$this->display();
	}

	public function upsavesms(){
		$id = $this->_get('id','intval');
		$where['uid'] = session('uid');
		$res = M('Wxuser')->where($where)->find($id);
		$_POST['wxid'] = $_POST['wxid'] != $res['wxid'] ? $res['wxid'] : $_POST['wxid'];
		$this->all_save('Wxuser','/editsms');
	}

	public function editemail(){
		$id=$this->_get('id','intval');
		$where['uid']=session('uid');
		$res=M('Wxuser')->where($where)->find($id);
		$this->assign('info',$res);
		$this->display();
	}

	public function upsaveemail(){
		$id = $this->_get('id','intval');
		$where['uid'] = session('uid');
		$res = M('Wxuser')->where($where)->find($id);
		$_POST['wxid'] = $_POST['wxid'] != $res['wxid'] ? $res['wxid'] : $_POST['wxid'];
		$this->all_save('Wxuser','/editemail');
	}

	public function edityun(){
		$id=$this->_get('id','intval');
		$where['uid']=session('uid');
		$res=M('Wxuser')->where($where)->find($id);
		$this->assign('info',$res);
		$this->display();
	}

	public function upsaveyun(){
		$id = $this->_get('id','intval');
		$where['uid'] = session('uid');
		$res = M('Wxuser')->where($where)->find($id);
		$_POST['wxid'] = $_POST['wxid'] != $res['wxid'] ? $res['wxid'] : $_POST['wxid'];
		$this->all_save('Wxuser','/editeyun');
	}
	
	public function del(){
		$where['id']=$this->_get('id','intval');
		$where['uid']=session('uid');
		if(D('Wxuser')->where($where)->delete()){
			$this->success('操作成功',U(MODULE_NAME.'/index'));
		}else{
			$this->error('操作失败',U(MODULE_NAME.'/index'));
		}
	}

    public function upsaveappid(){
        $where['uid'] = session('uid');
        $where['id'] = $_POST['id'];
        $data['appid']=$_POST['appid'];
        $data['appsecret']=$_POST['appsecret'];

        if(M('Wxuser')->where($where)->save($data)){
            $this->success('操作成功',U('Index/index'));
        }else{
            $this->error('操作失败');
        }
    }
	public function upsave(){
		$id = $this->_get('id','intval');
		$where['uid'] = session('uid');
		$res = M('Wxuser')->where($where)->find($id);
		$_POST['wxid'] = $_POST['wxid'] != $res['wxid'] ? $res['wxid'] : $_POST['wxid'];
		$this->all_save('Wxuser');
	}
	
	public function insert(){
		$data=M('User_group')->field('wechat_card_num')->where(array('id'=>session('gid')))->find();
		$users=M('Users')->field('wechat_card_num')->where(array('id'=>session('uid')))->find();
		if($users['wechat_card_num']<$data['wechat_card_num']){
			
		}else{
			$this->error('您的服务等级所能创建的公众号数量已经到达上线，请购买后再创建',U('User/Index/index'));exit();
		}
		//$this->all_insert('Wxuser');
		//
		$db=D('Wxuser');
		if($db->create()===false){
			$this->error($db->getError());
		}else{
			$id=$db->add();
			if($id){
				M('Users')->field('wechat_card_num')->where(array('id'=>session('uid')))->setInc('wechat_card_num');
                if($users['createtime'] > strtotime('-3 days'))
                {
                    $AccessDB = D('Wxuser_func');
                    $FunDB = D('Function');
                    $AccessDB->where(array('token'=>$this->_post('token')))->delete();  //先删除原用户组的权限配置
                    $fun=$FunDB->where(array('status'=>1))->select();
                    foreach($fun as $k=>$vo){
                        $data[$k]['token'] = $this->_post('token');
                        $data[$k]['uid'] = $_POST['id'];
                        $d = new Date((int)$users['createtime']);
                        $data[$k]['expiredate'] = strtotime($d->dateAdd(3));
                        $data[$k]['time'] = time();
                        $data[$k]['funcid'] = $vo['id'];
                    }
                    $AccessDB->addAll($data);   // 重新创建角色的权限配置
                }
                if($_POST['wxtype'] == 1){
                    $this->success('操作成功',U('Index/editappid', array('id'=>$id)));
                }
                else{
                    $this->success('操作成功',U('Index/index'));
                }
			}else{
				$this->error('操作失败',U('Index/index'));
			}
		}
		
	}
	
	//功能
	public function autos(){
		$this->display();
	}
	
	public function addfc(){
		$token_open=M('Token_open');
		$open['uid']=session('uid');
		$open['token']=$_POST['token'];
		$gid=session('gid');
		$fun=M('Function')->field('funname,gid,isserve')->where('`gid` <= '.$gid)->select();
		foreach($fun as $key=>$vo){
			$queryname.=$vo['funname'].',';
		}
		$open['queryname']=rtrim($queryname,',');
		$token_open->data($open)->add();
	}
    public function useredit(){
        $id=session('uid');
        $res=M('Users')->find($id);
        $this->assign('info',$res);
        $this->display();
    }
	public function usersave(){
        $db=D('Users');
        $where=array('id'=>$_SESSION['uid']);
        $check=$db->where($where)->find();
        if($check==false)$this->error('非法操作');
        if($db->create()){
            if($db->save()){
                session('uname',$_POST['username']);
                $this->success('修改成功',U('User/Index/index'));
            }else{
                $this->error('修改失败',U('User/Index/useredit'));
            }
        }else{
            $this->error($db->getError(),U('User/Index/useredit'));
        }
	}
	
	//余额续费
	public function pay(){
		$userinfo = M('Users')->where(array('id'=>session('uid')))->find();
		$group=M('User_group')->field('id,name,price')->where('price > 0')->select();
		$user=M('User_group')->field('price')->where(array('id'=>session('gid')))->find();
		$viptime = $userinfo['viptime'];
		$money = $userinfo['money'];
		$gid = $userinfo['gid'];
		$this->assign('group',$group);
		$this->assign('user',$user);
		$this->assign('viptime',$viptime);
		$this->assign('money',$money);
		$this->assign('gid',$gid);
		$this->display();
	}
	public function dopay(){
		$userinfo = M('Users')->where(array('id'=>session('uid')))->find();
		$money = $userinfo['money'];
		$viptime = $userinfo['viptime'];
		$price = intval($_POST['price']);
		$num = intval($_POST['num']);
		$vip = strtotime("+".$num." month", $viptime);
		if ($money < $price){
			$this->error("余额不足，请充值！", U('Alipay/index'));
		}else{
			$mback = M('Users')->where(array('id'=>session('uid')))->setDec('money',$price);
			$vback = M('Users')->where(array('id'=>session('uid')))->setField('viptime',$vip);
			if ($mback != false && $vback != false){
				$this->success('续费成功！', U('Index/index'));
			}else{
				$this->error('操作失败！请联系管理员', U('Index/index'));
			}
		}
	}
	
	public function pay_history(){
		$this->display();
	}
	
}
?>