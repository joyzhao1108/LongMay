<?php
class FoodAction extends WapTmplAction{
	public $product_model;
	public $product_cat_model;
	public function _initialize(){
        parent::_initialize();
		$this->product_model=M('Product');
		$this->product_cat_model=M('Product_cat');
		//define('RES',THEME_PATH.'common');
		//define('STATICS',TMPL_PATH.'static');
		$this->assign('staticFilePath',str_replace('./','/',THEME_PATH.'common/css/product'));

	}

    public function foods(){
        $carts=$this->_getCart();
        $catWhere=array('parentid'=>0,'token'=>$this->token,'ptype'=>1);
        $catWhere['ptype']=1;
        $cats = $this->product_cat_model->where($catWhere)->order('id asc')->select();
        $this->assign('cats',$cats);

        $where=array('token'=>$this->token,'ptype'=>1);
        if (isset($_GET['catid'])){
            $catid=intval($_GET['catid']);
            $where['catid']=$catid;

            $thisCat=$this->product_cat_model->where(array('id'=>$catid))->find();
            $this->assign('thisCat',$thisCat);
        }
        $count = $this->product_model->where($where)->count();
        $this->assign('count',$count);
        $foods = $this->product_model->where($where)->order('id desc')->limit('5')->select();
        if ($foods){
            $i=0;
            foreach ($foods as $p){
                $foods[$i]['count']=$carts[$p['id']]['count'];
                $i++;
            }
        }
        $this->assign('foods',$foods);
        $this->display();
    }
    public function ajaxFood(){
        $id=isset($_GET['id'])&&intval($_GET['id'])>0?intval($_GET['id']):0;
        $where=array('token'=>$this->token,'id'=>$id);
        $food = $this->product_model->where($where)->find();
        echo json_encode($food);
    }
    public function ajaxFoods(){
        $where=array('token'=>$this->token,'ptype'=>1);
        if (isset($_GET['catid'])){
            $catid=intval($_GET['catid']);
            $where['catid']=$catid;
        }
        $page=isset($_GET['page'])&&intval($_GET['page'])>1?intval($_GET['page']):2;
        $pageSize=isset($_GET['pagesize'])&&intval($_GET['pagesize'])>1?intval($_GET['pagesize']):5;
        $start=($page-1)*$pageSize;
        $products = $this->product_model->where($where)->order('id desc')->limit($start.','.$pageSize)->select();
        echo json_encode($products);
    }

    function _getCart(){
        if (!isset($_SESSION['session_cart_foods'])||!strlen($_SESSION['session_cart_foods'])){
            $carts=array();
        }else {
            $carts=unserialize($_SESSION['session_cart_foods']);
        }
        return $carts;
    }
    public function calCartInfo($carts=''){
        $totalFee=0;
        $totalCount=0;
        if (!$carts){
            $carts=$this->_getCart();
        }
        if ($carts){
            foreach ($carts as $c){
                if ($c){
                    $totalFee+=floatval($c['price'])*$c['count'];
                    $totalCount+=intval($c['count']);
                }
            }
        }
        return array($totalCount,$totalFee);
    }
    public function ajaxUpdateCart(){
        $carts=$this->_getCart();
        $g_id=intval($_GET['id']);
        $g_count=intval($_GET['count']);
        if($g_count>0)
        {
            if (key_exists($g_id,$carts)){
                $carts[$g_id]['count'] = $g_count;
            }else {
                $carts[$g_id]=array('count'=>$g_count,'price'=>floatval($_GET['price']));
            }
            $_SESSION['session_cart_foods']=serialize($carts);
        }
        else{
            $products=array();
            foreach ($carts as $k=>$c){
                if (strlen($c)){
                    $productid=$k;
                    $price=$c['price'];
                    $count=$c['count'];
                    if ($_GET['id']!=$productid){
                        $products[$productid]=array('price'=>$price,'count'=>$count);
                    }
                }
            }
            $_SESSION['session_cart_foods']=serialize($products);
        }
        $calCartInfo=$this->calCartInfo();
        echo $calCartInfo[0].'|'.$calCartInfo[1];
    }
	public function orders(){
        $company_model=M('Company');
        $where=array('token'=>$this->token);
        if (isset($_GET['companyid'])){
            $where['id']=intval($_GET['companyid']);
        }
        $company=$company_model->where($where)->find();

        $userinfo = M('userinfo')->where(array('wecha_id'=>$this->wecha_id,'token'=>$this->token))->find();

        $product_cart_model=M('product_cart');
        $countordering = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id,'handled'=>0))->count();
        $countyuding = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id,'handled'=>0))->count();
        $counthistory = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id,'handled'=>1))->count();

        $this->assign('userinfo',$userinfo);
        $this->assign('countyuding',$countyuding);
        $this->assign('countordering',$countordering);
        $this->assign('counthistory',$counthistory);
        $this->assign('company',$company);
        $this->display();
	}

    public function ordering(){
        $totalFee=0;
        $totalCount=0;
        $products=array();
        $ids=array();
        $carts=$this->_getCart();
        foreach ($carts as $k=>$c){
            if (is_array($c)){
                $foodid=$k;
                $price=$c['price'];
                $count=$c['count'];
                //
                if (!in_array($foodid,$ids)){
                    array_push($ids,$foodid);
                }
                $totalFee+=$price*$count;
                $totalCount+=$count;
            }
        }
        if (count($ids)){
            $list=$this->product_model->where(array('id'=>array('in',$ids)))->select();
        }
        //判断是不是餐饮
        if ($list){
            $i=0;
            foreach ($list as $p){
                $list[$i]['count']=$carts[$p['id']]['count'];
                $i++;
            }
        }
        $this->assign('foods',$list);        //
        $this->assign('totalFee',$totalFee);
        $this->assign('totalCount',$totalCount);
        $this->display();
    }


    public function orderCart(){
        $userinfo_model=M('Userinfo');
        $thisUser=$userinfo_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id))->find();
        $this->assign('thisUser',$thisUser);
        if (IS_POST){
            $row=array();
            $carts=$this->_getCart();
            $row['truename']=$this->_post('truename');
            if($row['truename'] == false)
            {
                $row['truename'] = '匿名';
            }
            /*$row['tel']=$this->_post('tel');
            $row['address']=$this->_post('address');*/
            $row['token']=$this->token;
            $row['wecha_id']=$this->wecha_id;
            if (!$row['wecha_id']){
                $row['wecha_id']='null';
            }
            $buytimestamp=$this->_post('buytimestamp');//购买时间
            if ($buytimestamp){
                $row['year']=date('Y',$buytimestamp);
                $row['month']=date('m',$buytimestamp);
                $row['day']=date('d',$buytimestamp);
                $row['hour']=$this->_post('hour');
            }
            $time=time();
            $row['time']=$time;
            $orderid=0;//用于存储插入的各类订单id
            $product_cart_model=M('product_cart');
            if (count($carts)){
                $calCartInfo=$this->calCartInfo();
                $row['total']=$calCartInfo[0];
                $row['price']=$calCartInfo[1];
                //
                $row['diningtype']=3;
                $row['buytime']=$buytimestamp?$row['month'].'月'.$row['day'].'日'.$row['hour'].'点':'';
                $row['tableid']=intval($this->_post('tableid'));
                $row['info']=serialize($carts);
                //
                $row['groupon']=0;
                $row['ptype']=1;
                $orderid=$product_cart_model->add($row);
            }
            if ($carts){
                $product_model=M('product');
                $product_cart_list_model=M('product_cart_list');
                $crow=array();
                if (count($carts)){
                    foreach ($carts as $k=>$c){
                        $crow['cartid']=$orderid;
                        $crow['productid']=$k;
                        $crow['price']=$c['price'];
                        $crow['total']=$c['count'];
                        $crow['wecha_id']=$row['wecha_id'];
                        $crow['token']=$row['token'];
                        $crow['time']=$time;
                        $product_cart_list_model->add($crow);
                        $product_model->where(array('id'=>$k))->setInc('salecount',$c['count']);
                    }
                }
                $_SESSION['session_cart_foods']='';
            }
            $this->redirect(U('Food/orderdetail',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'id'=>$orderid, 'success'=>1)));
        }else {
            $product_diningtable_model=M('Product_diningtable');
            $tables=$product_diningtable_model->where(array('token'=>$_GET['token']))->order('taxis ASC')->select();
            $this->assign('tables',$tables);
            $this->display();
        }
    }

    public function orderdetail(){
        $product_cart_model=M('product_cart');
        $thisOrder=$product_cart_model->where(array('id'=>intval($_GET['id'])))->find();
        //检查权限
        if ($thisOrder['wecha_id']!=$this->wecha_id){
            exit();
        }
        //
        if($thisOrder['tableid'])
        {
            $table = M('Product_diningtable')->where(array('id'=>$thisOrder['tableid']))->find();
        }
        $success=isset($_GET['success'])&&intval($_GET['success'])>0?1:0;
        $this->assign('success',$success);
        $this->assign('table',$table);
        $this->assign('thisOrder',$thisOrder);
        $carts=unserialize($thisOrder['info']);
        //
        $totalFee=0;
        $totalCount=0;
        $ids=array();
        foreach ($carts as $k=>$c){
            if (is_array($c)){
                $productid=$k;
                $price=$c['price'];
                $count=$c['count'];
                //
                if (!in_array($productid,$ids)){
                    array_push($ids,$productid);
                }
                $carts[$k]['tprice'] = $price*$count;
                $totalFee+=$price*$count;
                $totalCount+=$count;
            }
        }
        if (count($ids)){
            $list=$this->product_model->where(array('id'=>array('in',$ids)))->select();
        }
        if ($list){
            $i=0;
            foreach ($list as $p){
                $list[$i]['count']=$carts[$p['id']]['count'];
                $list[$i]['tprice']=$carts[$p['id']]['tprice'];
                $i++;
            }
        }
        $this->assign('foods',$list);
        //
        $this->assign('totalFee',$totalFee);
        $this->display();
    }

    public function orderhistorylist(){
        $userinfo = M('userinfo')->where(array('wecha_id'=>$this->wecha_id,'token'=>$this->token))->find();
        $product_cart_model=M('product_cart');
        $totalcount = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id,'handled'=>1))->count();
        $totalFee = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id,'handled'=>1))->sum('price');
        $orders = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id,'handled'=>1))->order('time desc')->limit('10')->select();
        $this->assign('userinfo',$userinfo);
        $this->assign('totalcount',$totalcount);
        $this->assign('totalFee',$totalFee);
        $this->assign('orders',$orders);
        $this->display();
    }

    public function orderinglist(){
        $userinfo = M('userinfo')->where(array('wecha_id'=>$this->wecha_id,'token'=>$this->token))->find();
        $product_cart_model=M('product_cart');
        $totalcount = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id,'handled'=>0))->count();
        $totalFee = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id,'handled'=>0))->sum('price');
        $orders = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id,'handled'=>0))->order('time desc')->limit('10')->select();
        $carts=$this->_getCart();
        $sessioncount = count($carts);
        $this->assign('sessioncount',$sessioncount);
        $this->assign('userinfo',$userinfo);
        $this->assign('totalcount',$totalcount);
        $this->assign('totalFee',$totalFee);
        $this->assign('orders',$orders);
        $this->display();
    }
    public function ajaxOrders(){
        $where=array('token'=>$this->token,'wecha_id'=>$this->wecha_id);
        if (isset($_GET['handled'])){
            $handled=intval($_GET['handled']);
            $where['handled']=$handled;
        }
        $page=isset($_GET['page'])&&intval($_GET['page'])>1?intval($_GET['page']):2;
        $pageSize=isset($_GET['pagesize'])&&intval($_GET['pagesize'])>1?intval($_GET['pagesize']):10;
        $start=($page-1)*$pageSize;
        $product_cart_model=M('product_cart');
        $orders = $product_cart_model->where($where)->order('time desc')->limit($start.','.$pageSize)->select();
        if ($orders){
            $i=0;
            foreach ($orders as $p){
                $orders[$i]['timedesc']=date('Y-m-d H:i',$p['time']);
                $i++;
            }
        }
        echo json_encode($orders);
    }
}
	
?>