<?php
class CompanyAction extends WapTmplAction{
	public function _initialize() {
        parent::_initialize();
		$this->assign('staticFilePath',str_replace('./','/',THEME_PATH.'common/css/product'));
	}
    public function index(){
        $company_model=M('Company');
        $where=array('token'=>$this->token);
        if (isset($_GET['companyid'])){
            $where['id']=intval($_GET['companyid']);
        }
        $company=$company_model->where($where)->find();
        $companymapurl = 'http://api.map.baidu.com/staticimage?center='.$company['longitude'].','.$company['latitude'].'&width=370&height=370&zoom=14&markers='.$company['longitude'].','.$company['latitude'].'&markerStyles=l,1';
        $this->assign('company',$company);
        $this->assign('companymapurl',$companymapurl);
        $this->display();
    }
    public function about(){
        //$agent = $_SERVER['HTTP_USER_AGENT'];
        //if(!strpos($agent,"MicroMessenger")) {
        //echo '此功能只能在微信浏览器中使用';exit;
        //}
        $company_model=M('Company');
        $where=array('token'=>$this->token);
        if (isset($_GET['companyid'])){
            $where['id']=intval($_GET['companyid']);
        }
        $company=$company_model->where($where)->find();
        $this->assign('company',$company);
        $this->display();
    }
	public function map(){
		//店铺信息
		$company_model=M('Company');
		$where=array('token'=>$this->token);
		if (isset($_GET['companyid'])){
			$where['id']=intval($_GET['companyid']);
		}
		
		$thisCompany=$company_model->where($where)->find();
		$this->assign('thisCompany',$thisCompany);
		//分店信息
		$branchStores=$company_model->where(array('token'=>$this->token,'isbranch'=>1))->order('taxis ASC')->select();
		$branchStoreCount=count($branchStores);
		$this->assign('branchStoreCount',$branchStoreCount);
		$this->assign('branchStores',$branchStores);
		$this->assign('metaTitle','地图');
		$this->display();
	}
	public function walk($display=1){
		$company_model=M('Company');
		$where=array('token'=>$this->token);
		if (isset($_GET['companyid'])){
			$where['id']=intval($_GET['companyid']);
		}
		$thisCompany=$company_model->where($where)->find();
		$this->assign('thisCompany',$thisCompany);
		$this->assign('metaTitle','步行路线');
		if ($display){
		$this->display();
		}
	}
	public function bus(){
		$this->walk(0);
		$this->assign('metaTitle','公交地铁路线');
		$this->display('bus');
	}
	public function drive(){
		$this->walk(0);
		$this->assign('metaTitle','开车路线');
		$this->display('drive');
	}
}


?>