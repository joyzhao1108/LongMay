<?php
class CompanyAction extends UserAction
{
    public $isBranch;
    public $company_model;
    public function _initialize()
    {
        parent::_initialize();
        parent::checkRight('shouye');
        //是否是分店
        $this->isBranch = 0;

        $this->assign('isBranch', $this->isBranch);
        $this->company_model = M('Company');
    }
    public function index()
    {
        $where = array(
            'token' => $this->token
        );
        $thisCompany = $this->company_model->where($where)->find();
        if (IS_POST) {
            if ($_FILES['file']['name']) {
                $img              = $this->_upload();
                $_POST['logourl'] = $img[0]['savepath'] . $img[0]['savename'];
            }
            if (!$thisCompany) {
                $this->insert('Company', U('Company/index', array(
                    'token' => $this->token,
                    'isBranch' => $this->isBranch
                )));
            } else {
                if ($this->company_model->create()) {
                    if ($this->company_model->where($where)->save($_POST)) {
                        $this->success('修改成功', U('Company/index', array(
                            'token' => $this->token
                        )));
                    } else {
                        $this->error('操作失败');
                    }
                } else {
                    $this->error($this->company_model->getError());
                }
            }
            
        } else {
            if($thisCompany){
                $this->assign('isUpdate',1);
                $this->assign('id', $thisCompany['id']);
            }

            $this->assign('set', $thisCompany);
            $this->display();
        }
    }
    public function branches()
    {
        $branches = $this->company_model->where(array(
            'isbranch' => 1,
            'token' => $this->token
        ))->order('taxis ASC')->select();
        $this->assign('branches', $branches);
        $this->display();
    }
    public function delete()
    {
        $where = array(
            'token' => $this->token,
            'isbranch' => 1,
            'id' => intval($_GET['id'])
        );
        $rt    = $this->company_model->where($where)->delete();
        if ($rt == true) {
            $this->success('删除成功', U('Company/branches', array(
                'token' => $this->token,
                'isBranch' => 1
            )));
        } else {
            $this->error('服务器繁忙,请稍后再试', U('Company/branches', array(
                'token' => $this->token,
                'isBranch' => 1
            )));
        }
    }
}
?>