<?php
class YuDingAction extends WapTmplAction{
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

        $userinfo = M('userinfo')->where(array('wecha_id'=>$this->wecha_id,'token'=>$this->token))->find();

        $product_cart_model=M('product_cart');
        $countyuding = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id))->count();

        $this->assign('userinfo',$userinfo);
        $this->assign('countyuding',$countyuding);
        $this->assign('company',$company);
        $this->display();
    }

    public function yuding(){
        if($_POST['action'] == 'yuding'){
            $data['wecha_id']  =  $this->_post('wecha_id');
            $data['truename']  =  $this->_post('truename');
            $data['remarks']   =  $this->_post('remarks');
            $data['tel']       = $this->_post('tel');
            $data['booktime']  = strtotime($this->_post('dateline'));
            $data['ptype'] =    $this->_post('ptype');
            $data['groupon'] = 0;
            $data['token'] = $this->_post('token');
            $time=time();
            $data['time']=$time;
            $order = M('product_cart')->data($data)->add();
            if($order){
                echo'{"success":1,"msg":"恭喜,预订成功。"}';
                /*// 增加 发送短信
                $info=M('Wxuser')->where(array('token'=>$this->_get('token')))->find();
                $phone=$info['phone'];

                $user=$info['smsuser'];//短信平台帐号
                $pass=md5($info['smspassword']);//短信平台密码
                $smsstatus=$info['smsstatus'];//短信平台状态

                $content = "订单类型：在线预订\r\n姓名：".$data['book_people']."\r\n电话：".$data['tel']."\r\n时间：".$data['book_time']."\r\n数量：".$data['book_num']."\r\n价格：".$data['price']."\r\n类型：".$data['room_type']."\r\n备注：".$data['remarks'];

                if ($smsstatus == 1) {
                    $smsrs = file_get_contents('http://api.smsbao.com/sms?u='.$user.'&p='.$pass.'&m='.$phone.'&c='.urlencode($content));
                    //$log = file_get_contents('http://wx.ai9.me/test.php?u=' . $user . '&p=' . $pass . '&m=' . $phone . '&test=' . urlencode($content));
                }
                // 结束

                // 增加 发送邮件
                $email=$info['email'];
                $emailuser=$info['emailuser'];
                $emailpassword=$info['emailpassword'];
                $emailstatus=$info['emailstatus'];

                if ($emailstatus == 1) {
                    date_default_timezone_set('PRC');
                    require_once 'class.phpmailer.php';
                    //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
                    $mail = new PHPMailer();
                    $body = $content;
                    $mail->IsSMTP();
                    // telling the class to use SMTP
                    $mail->Host = 'smtp.qq.com';
                    // SMTP server
                    $mail->SMTPDebug = '1';
                    // enables SMTP debug information (for testing)
                    // 1 = errors and messages
                    // 2 = messages only
                    $mail->SMTPAuth = true;
                    // enable SMTP authentication
                    $mail->Host = 'smtp.qq.com';
                    // sets the SMTP server
                    $mail->Port = 25;
                    // set the SMTP port for the GMAIL server
                    $mail->Username = $emailuser;
                    // SMTP account username
                    $mail->Password = $emailpassword;
                    // SMTP account password
                    $mail->SetFrom($emailuser.'@qq.com', '微信平台');
                    $mail->AddReplyTo($emailuser.'@qq.com', '微信平台');
                    $mail->Subject = '客户订单';
                    $mail->AltBody = '';
                    // optional, comment out and test
                    $mail->MsgHTML($body);
                    $address = $email;
                    $mail->AddAddress($address, '商户');
                    $emailrs = $mail->Send();
                    //$log = file_get_contents('http://www.test.com/test.php?u=' . $user . '&p=' . $pass . '&m=' . $phone . '&test=' . urlencode($content));
                }

// 结束*/
            }else{
                echo'{"success":0,"msg":"请重新预订。"}';
            }
            exit;
        }


    }

    public function lists(){
        $userinfo = M('userinfo')->where(array('wecha_id'=>$this->wecha_id,'token'=>$this->token))->find();
        $product_cart_model=M('product_cart');
        $countyuding = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id))->count();
        $orders = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id))->order('time desc')->select();
        $this->assign('userinfo',$userinfo);
        $this->assign('countyuding',$countyuding);
        $this->assign('orders',$orders);
        $this->display();
}
}


?>