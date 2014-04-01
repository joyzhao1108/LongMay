<?php
class LessonAction extends UserAction{
	public $token;
	public $lesson_model;
	public $lesson_cat_model;
	public $isDining;
	public function _initialize() {
		parent::_initialize();
		$token_open = M('token_open')->field('queryname')->where(array('token'=>session('token')))->find();
		if(!strpos($token_open['queryname'],'lesson')){
            $this->error('您还未开启该模块的使用权,请到功能模块中添加',U('Index/index',array('token'=>session('token'),'id'=>session('wxid'))));
		}	
	}
	public function index(){		
		$catid=intval($_GET['catid']);
		$catid=$catid==''?0:$catid;
		$lesson_model=D('Lesson');
		$lesson_cat_model=M('Lesson_cat');
		$where=array('token'=>session('token'));
		
		if ($catid){
			$where['catid']=$catid;
		}		
        if(IS_POST){
            $key = $this->_post('searchkey');
            if(empty($key)){
                $this->error("关键词不能为空");
            }

            $map['token'] = $this->get('token'); 
            $map['name|intro|specialinfo|introdetail'] = array('like',"%$key%"); 
            $list = $lesson_model->relation(true)->where($map)->select(); 
            $count      = $lesson_model->where($map)->count();       
            $Page       = new Page($count,20);
        	$show       = $Page->show();
        }else{
        	$count      = $lesson_model->where($where)->count();
        	$Page       = new Page($count,20);
        	$show       = $Page->show();
        	$list = $lesson_model->relation(true)->where($where)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        }	
		$this->assign('page',$show);		
		$this->assign('list',$list);
		$this->assign('islessonPage',1);
		
		$this->display();		
	}
	

	public function cats(){		
		/*
		$token_open=M('token_open')->field('queryname')->where(array('token'=>session('token')))->find();

		if(!strpos($token_open['queryname'],'adma')){
            $this->error('您还未开启该模块的使用权,请到功能模块中添加',U('Function/index',array('token'=>session('token'),'id'=>session('wxid'))));}
		 */
		$parentid=intval($_GET['parentid']);
		$parentid=$parentid==''?0:$parentid;
		$data=M('lesson_cat');
		$where=array('parentid'=>$parentid,'token'=>session('token'));	
		$order = 'sort ASC';
        if(IS_POST){
            $key = $this->_post('searchkey');
            if(empty($key)){
                $this->error("关键词不能为空");
            }

            $map['token'] = $this->get('token'); 
            $map['name|des'] = array('like',"%$key%"); 
            $list = $data->where($map)->order($order)->select(); 
            $count      = $data->where($map)->count();       
            $Page       = new Page($count,20);
        	$show       = $Page->show();
        }else{
        	$count      = $data->where($where)->count();
        	$Page       = new Page($count,20);
        	$show       = $Page->show();
        	$list = $data->where($where)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select();
        }
		$this->assign('page',$show);		
		$this->assign('list',$list);
		if ($parentid){
			$parentCat = $data->where(array('id'=>$parentid))->find();
		}
		$this->assign('parentCat',$parentCat);
		$this->assign('parentid',$parentid);
		$this->display();		
	}
	public function catAdd(){ 
		if(IS_POST){
			$this->insert('Lesson_cat','/cats?parentid='.$this->_post('parentid'));
		}else{
			$parentid=intval($_GET['parentid']);
			$parentid=$parentid==''?0:$parentid;
			$this->assign('parentid',$parentid);
			$this->display('catSet');
		}
	}
	public function catDel(){
		if($this->_get('token')!=session('token')){$this->error('非法操作');}
        $id = $this->_get('id');
        if(IS_GET){                              
            $where=array('id'=>$id,'token'=>session('token'));
            $data=M('lesson_cat');
            $check=$data->where($where)->find();
            if($check==false)   $this->error('非法操作');
            $lesson_model=M('lesson');
            $lessonsOfCat=$lesson_model->where(array('catid'=>$id))->select;
            if (count($lessonsOfCat)){
            	$this->error('本分类下有课程信息，请删除课程后再删除分类',U('Lesson/cats',array('token'=>session('token'))));
            }
            $back=$data->where($wehre)->delete();
            if($back==true){
            	$this->success('操作成功',U('Lesson/cats',array('token'=>session('token'),'parentid'=>$check['parentid'])));
            }else{
                 $this->error('服务器繁忙,请稍后再试',U('Lesson/cats',array('token'=>session('token'))));
            }
        }        
	}
	public function catSet(){
        $id = $this->_get('id'); 
		$checkdata = M('lesson_cat')->where(array('id'=>$id))->find();
		if(empty($checkdata)){
            $this->error("没有相应记录.您现在可以添加.",U('lesson/catAdd'));
        }
		if(IS_POST){ 
            $data=D('lesson_cat');
            $where=array('id'=>$this->_post('id'),'token'=>session('token'));
			$check=$data->where($where)->find();
			if($check==false)$this->error('非法操作');
			if($data->create()){
				if($data->where($where)->save($_POST)){
					$this->success('修改成功',U('Lesson/cats',array('token'=>session('token'),'parentid'=>$this->_post('parentid'))));					
				}else{
					$this->error('操作失败');
				}
			}else{
				$this->error($data->getError());
			}
		}else{ 
			$this->assign('parentid',$checkdata['parentid']);
			$this->assign('set',$checkdata);
			$this->display();	
		
		}
	}
	public function add(){ 
		if(IS_POST){
			$this->insert('Lesson','/index?token='.session('token'));
		}else{
			//分类
			$data=M('lesson_cat');
			$catWhere=array('parentid'=>0,'token'=>session('token'));			
			$cats=$data->where($catWhere)->select();
			if (!$cats){
				 $this->error("请先添加分类",U('lesson/catAdd',array('token'=>session('token'))));
				 exit();
			}
			$this->assign('cats',$cats);
			$catsOptions=$this->catOptions($cats,0);
			$this->assign('catsOptions',$catsOptions);
			//
			$this->assign('islessonPage',1);
			$this->display('set');
		}
	}
	/**
	 * 商品类别ajax select
	 *
	 */
	public function ajaxCatOptions(){
		$parentid=intval($_GET['parentid']);
		$data=M('lesson_cat');
		$catWhere=array('parentid'=>$parentid,'token'=>session('token'));
		$order = 'sort ASC';
		$cats=$data->where($catWhere)->order($order)->select();
		$str='';
		if ($cats){
			foreach ($cats as $c){
				$str.='<option value="'.$c['id'].'">'.$c['name'].'</option>';
			}
		}
		$this->show($str);
	}
	public function set(){
        $id = $this->_get('id'); 
        $lesson_model=M('lesson');
        $lesson_cat_model=M('lesson_cat');
		$checkdata = $lesson_model->where(array('id'=>$id))->find();
		if(empty($checkdata)){
            $this->error("没有相应记录.您现在可以添加.",U('Lesson/add'));
        }
		if(IS_POST){ 
            $where=array('id'=>$this->_post('id'),'token'=>session('token'));
			$check=$lesson_model->where($where)->find();
			if($check==false)$this->error('非法操作');
			if($lesson_model->create()){
				if($lesson_model->where($where)->save($_POST)){
					$this->success('修改成功',U('Lesson/index',array('token'=>session('token'))));
				}else{
					$this->error('操作失败');
				}
			}else{
				$this->error($lesson_model->getError());
			}
		}else{
			//分类
			$catWhere=array('parentid'=>0,'token'=>session('token'));
			if ($this->isDining){
				$catWhere['dining']=1;
			}
			$cats=$lesson_cat_model->where($catWhere)->select();
			$this->assign('cats',$cats);
			
			$thisCat=$lesson_cat_model->where(array('id'=>$checkdata['catid']))->find();
			$childCats=$lesson_cat_model->where(array('parentid'=>$thisCat['parentid']))->select();
			$this->assign('thisCat',$thisCat);
			$this->assign('parentCatid',$thisCat['parentid']);
			$this->assign('childCats',$childCats);
			$this->assign('isUpdate',1);
			$catsOptions=$this->catOptions($cats,$checkdata['catid']);
			$childCatsOptions=$this->catOptions($childCats,$thisCat['id']);
			$this->assign('catsOptions',$catsOptions);
			$this->assign('childCatsOptions',$childCatsOptions);
			//
			$this->assign('set',$checkdata);
			$this->assign('islessonPage',1);
			$this->display();	
		
		}
	}
	//商品类别下拉列表
	public function catOptions($cats,$selectedid){
		$str='';
		if ($cats){
			foreach ($cats as $c){
				$selected='';
				if ($c['id']==$selectedid){
					$selected=' selected';
				}
				$str.='<option value="'.$c['id'].'"'.$selected.'>'.$c['name'].'</option>';
			}
		}
		return $str;
	}
	public function del(){
		$lesson_model=M('lesson');
		if($this->_get('token')!=session('token')){$this->error('非法操作');}
        $id = $this->_get('id');
        if(IS_GET){                              
            $where=array('id'=>$id,'token'=>session('token'));
            $check=$lesson_model->where($where)->find();
            if($check==false)   $this->error('非法操作');

            $back=$lesson_model->where($wehre)->delete();
            if($back==true){            
                $this->success('操作成功',U('Lesson/index',array('token'=>session('token'))));
            }else{
                 $this->error('服务器繁忙,请稍后再试',U('Lesson/index',array('token'=>session('token'))));
            }
        }        
	}
	public function orders(){
		$lesson_cart_model=M('lesson_cart');
	
		$where=array('token'=>$this->_session('token'));			
		if(IS_POST){
			$key = $this->_post('searchkey');
			if(empty($key)){
				$this->error("关键词不能为空");
			}
			$where['truename|tel'] = array('like',"%$key%");
			$orders = $lesson_cart_model->where($where)->select();
			$count      = $lesson_cart_model->where($where)->limit($Page->firstRow.','.$Page->listRows)->count();
			$Page       = new Page($count,20);
			$show       = $Page->show();
		}else {
			if (isset($_GET['handled'])){
				$where['handled']=intval($_GET['handled']);
			}
			$count      = $lesson_cart_model->where($where)->count();
			$Page       = new Page($count,20);
			$show       = $Page->show();
			$orders=$lesson_cart_model->where($where)->order('time DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		}


		$unHandledCount=$lesson_cart_model->where(array('token'=>$this->_session('token'),'handled'=>0))->count();
		$this->assign('unhandledCount',$unHandledCount);


		$this->assign('orders',$orders);

		$this->assign('page',$show);
		$this->display();
		
	}
	public function handleOrder(){
		$lesson_cart_model=M('lesson_cart');
		if($this->_get('token')!=session('token')){$this->error('非法操作');}
        $id = $this->_get('id');
		 if(IS_GET){         
		 	if (isset($_GET['handled'])){
			$handled=intval($_GET['handled']);				                  
            $where=array('id'=>$id,'token'=>session('token'));
            $check=$lesson_cart_model->where($where)->find();
            if($check==false)   $this->error('非法操作');
			$back=$lesson_cart_model->where($where)->save(array('handled'=>$handled));            
            if($back==true){            
                $this->success('操作成功',U('Lesson/orderInfo',array('id'=>$id,'token'=>session('token'))));
            }else{
                 $this->error('服务器繁忙,请稍后再试',U('Lesson/orderInfo',array('id'=>$id,'token'=>session('token'))));
            }
		  }   
        }     
	}
	public function orderInfo(){
		$this->lesson_model=M('lesson');
		$this->lesson_cat_model=M('lesson_cat');
		$lesson_cart_model=M('lesson_cart');
		$thisOrder=$lesson_cart_model->where(array('id'=>intval($_GET['id'])))->find();
		//检查权限
		if ($thisOrder['token']!=$this->_session('token')){
			exit();
		}		
		//
		$this->assign('thisOrder',$thisOrder);
		$carts=unserialize($thisOrder['info']);
		
		//
		$totalFee=0;
		$totalCount=0;
		$lessons=array();
		$ids=array();
		foreach ($carts as $k=>$c){
			if (is_array($c)){
				$lessonid=$k;
				$price=$c['price'];
				$count=$c['count'];
				//
				if (!in_array($lessonid,$ids)){
					array_push($ids,$lessonid);
				}
				$totalFee+=$price*$count;
				$totalCount+=$count;
			}
		}
		if (count($ids)){
			$list=$this->lesson_model->where(array('id'=>array('in',$ids)))->select();
		}
		if ($list){
			$i=0;
			foreach ($list as $p){
				$list[$i]['count']=$carts[$p['id']]['count'];
				$i++;
			}
		}
		$this->assign('lessons',$list);		
		$this->display();
	}
	public function deleteOrder(){
		$lesson_model=M('lesson');
		$lesson_cart_model=M('lesson_cart');
		$lesson_cart_list_model=M('lesson_cart_list');
		$thisOrder=$lesson_cart_model->where(array('id'=>intval($_GET['id'])))->find();
		//检查权限
		$id=$thisOrder['id'];
		if ($thisOrder['token']!=$this->_session('token')){
			exit();
		}
		//
		//删除订单和订单列表
		$lesson_cart_model->where(array('id'=>$id))->delete();
		$lesson_cart_list_model->where(array('cartid'=>$id))->delete();
		//商品销量做相应的减少
		$carts=unserialize($thisOrder['info']);
		foreach ($carts as $k=>$c){
			if (is_array($c)){
				$lessonid=$k;
				$price=$c['price'];
				$count=$c['count'];
				$lesson_model->where(array('id'=>$k))->setDec('salecount',$c['count']);
			}
		}
		$this->success('操作成功',$_SERVER['HTTP_REFERER']);
	}	
}


?>