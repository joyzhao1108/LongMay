<?php
error_reporting(0);
class WeixinNewAction extends Action
{
    private $token;
    private $fun;
    private $data = array();
    private $my = 'AI9';
    public function index()
    {
        $this->token = $this->_get('token');
        $weixin      = new Wechat($this->token);
        $data        = $weixin->request();
        $this->data  = $weixin->request();
        $this->my    = C('site_my');
        list($content, $type) = $this->reply($data);
        $weixin->response($content, $type);
    }
    private function reply($data)
    {
        if ('CLICK' == $data['Event']) {
            $data['Content'] = $data['EventKey'];
        }
        if ('subscribe' == $data['Event']) {
            $this->requestdata('follownum');
            $data = M('Areply')->field('home,keyword,content')->where(array(
                'token' => $this->token
            ))->find();
            if ($data['home'] == 1) {
                return $this->home();
            }
            else {
                return array(
                    $data['content'],
                    'text'
                );
            }
        } 
		elseif ('unsubscribe' == $data['Event']) {
            $this->requestdata('unfollownum');
        }
        $Pin       = new GetPin();
        $key       = $data['Content'];
        $open      = M('Token_open')->where(array(
            'token' => $this->_get('token')
        ))->find();
        $this->fun = $open['queryname'];
        $datafun   = explode(',', $open['queryname']);
        $tags      = $this->get_tags($key);
        $back      = explode(',', $tags);
        foreach ($back as $keydata => $data) {
            $string = $Pin->Pinyin($data);
            if (in_array($string, $datafun)) {
                $check = $this->user('connectnum');
                if ($string == 'fujin') {
                    $this->recordLastRequest($key);
                }
                $this->requestdata('textnum');
                if ($check['connectnum'] != 1) {
                    $return = C('connectout');
                    continue;
                }
                unset($back[$keydata]);
                eval('$return= $this->' . $string . '($back);');
                continue;
            }
        }
        if (!empty($return)) {
            if (is_array($return)) {
                return $return;
            } else {
                return array(
                    $return,
                    'text'
                );
            }
        } 
		else 
		{            
            switch ($key) {
                case '首页':
                    return $this->home();
                    break;
                case '主页':
                    return $this->home();
                    break;
                case '地图':
                    return $this->companyMap(); 
                case '会员卡':
                    return $this->member();
                    break;
                case '会员':
                    return $this->member();
                    break;             
                case '商城':
                    $pro = M('reply_info')->where(array(
                        'infotype' => 'Shop',
                        'token' => $this->token
                    ))->find();
                    return array(
                        array(
                            array(
                                $pro['title'],
                                strip_tags(htmlspecialchars_decode($pro['info'])),
                                $pro['picurl'],
                                C('site_url') . '/index.php?g=Wap&m=Product&a=index&token=' . $this->token . '&wecha_id=' . $this->data['FromUserName']
                            )
                        ),
                        'news'
                    );
                    break;             
                case '订餐':
                    $pro = M('reply_info')->where(array(
                        'infotype' => 'Dining',
                        'token' => $this->token
                    ))->find();
                    return array(
                        array(
                            array(
                                $pro['title'],
                                strip_tags(htmlspecialchars_decode($pro['info'])),
                                $pro['picurl'],
                                C('site_url') . '/index.php?g=Wap&m=Product&a=dining&dining=1&token=' . $this->token . '&wecha_id=' . $this->data['FromUserName']
                            )
                        ),
                        'news'
                    );
                    break;
                case '团购':
                    $pro = M('reply_info')->where(array(
                        'infotype' => 'Groupon',
                        'token' => $this->token
                    ))->find();
                    return array(
                        array(
                            array(
                                $pro['title'],
                                strip_tags(htmlspecialchars_decode($pro['info'])),
                                $pro['picurl'],
                                C('site_url') . '/index.php?g=Wap&m=Groupon&a=grouponIndex&token=' . $this->token . '&wecha_id=' . $this->data['FromUserName']
                            )
                        ),
                        'news'
                    );
                    break;
                default:
                    $check = $this->user('diynum', $key);
                    if ($check['diynum'] != 1) {
                        return array(
                            C('connectout'),
                            'text'
                        );
                    } else {
                        return $this->keyword($key);
                    }
            }
        }
    }
    function companyMap()
    {
        import("Home.Action.MapAction");
        $mapAction = new MapAction();
        return $mapAction->staticCompanyMap();
    }  
    function huiyuanka($name)
    {
        return $this->member();
    }
    function member()
    {
        $card     = M('member_card_create')->where(array(
            'token' => $this->token,
            'wecha_id' => $this->data['FromUserName']
        ))->find();
        $cardInfo = M('member_card_set')->where(array(
            'token' => $this->token
        ))->find();
        if ($card == false) {
            $data['picurl']  = rtrim(C('site_url'), '/') . '/themes/Static/images/member.jpg';
            $data['title']   = '会员卡,省钱，打折,促销，优先知道,有奖励哦';
            $data['keyword'] = '尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦';
            $data['url']     = rtrim(C('site_url'), '/') . U('Wap/Card/get_card', array(
                'token' => $this->token,
                'wecha_id' => $this->data['FromUserName']
            ));
        } else {
            $data['picurl']  = rtrim(C('site_url'), '/') . '/themes/Static/images/vip.jpg';
            $data['title']   = $cardInfo['cardname'];
            $data['keyword'] = $cardInfo['msg'];
            $data['url']     = rtrim(C('site_url'), '/') . U('Wap/Card/vip', array(
                'token' => $this->token,
                'wecha_id' => $this->data['FromUserName']
            ));
        }
        return array(
            array(
                array(
                    $data['title'],
                    $data['keyword'],
                    $data['picurl'],
                    $data['url']
                )
            ),
            'news'
        );
    }  
    function keyword($key)
    {
        $like['keyword'] = array(
            'like',
            '%' . $key . '%'
        );
        $like['token']   = $this->token;
        $data            = M('keyword')->where($like)->order('id desc')->find();
        if ($data != false) {
            switch ($data['module']) {
                case 'Img':
                    $this->requestdata('imgnum');
                    $img_db   = M($data['module']);
                    $back     = $img_db->field('id,text,pic,url,title')->limit(9)->order('id desc')->where($like)->select();
                    $idsWhere = 'id in (';
                    $comma    = '';
                    foreach ($back as $keya => $infot) {
                        $idsWhere .= $comma . $infot['id'];
                        $comma = ',';
                        if ($infot['url'] != false) {
                            if (!(strpos($infot['url'], 'http') === FALSE)) {
                                $url = $infot['url'];
                            } else {
                                $urlInfos = explode(' ', $infot['url']);
                                switch ($urlInfos[0]) {
                                    case '刮刮卡':
                                        $url = C('site_url') . U('Wap/Guajiang/index', array(
                                            'token' => $this->token,
                                            'wecha_id' => $this->data['FromUserName'],
                                            'id' => $urlInfos[1]
                                        ));
                                        break;
                                    case '大转盘':
                                        $url = C('site_url') . U('Wap/Lottery/index', array(
                                            'token' => $this->token,
                                            'wecha_id' => $this->data['FromUserName'],
                                            'id' => $urlInfos[1]
                                        ));
                                        break;
                                    case '商家订单':
                                        $url = C('site_url') . '/index.php?g=Wap&m=Host&a=index&token=' . $this->token . '&wecha_id=' . $this->data['FromUserName'] . '&hid=' . $urlInfos[1];
                                        break;
                                    case '优惠券':
                                        $url = C('site_url') . U('Wap/Coupon/index', array(
                                            'token' => $this->token,
                                            'wecha_id' => $this->data['FromUserName'],
                                            'id' => $urlInfos[1]
                                        ));
                                        break;
                                }
                            }
                        } else {
                            $url = rtrim(C('site_url'), '/') . U('Wap/Index/content', array(
                                'token' => $this->token,
                                'id' => $infot['id']
                            ));
                        }
                        $return[] = array(
                            $infot['title'],
                            $infot['text'],
                            $infot['pic'],
                            $url
                        );
                    }
                    $idsWhere .= ')';
                    if ($back) {
                        $img_db->where($idsWhere)->setInc('click');
                    }
                    return array(
                        $return,
                        'news'
                    );
                    break;
                case 'Host':
                    $this->requestdata('other');
                    $host = M('Host')->where(array(
                        'id' => $data['pid']
                    ))->find();
                    $url = C('site_url') . U('Wap/Host/index', array(
                        'token' => $this->token,
                        'wecha_id' => $this->data['FromUserName'],
                        'id' => $data['pid']
                    ));
                    return array(
                        array(
                            array(
                                $host['name'],
                                $host['info'],
                                $host['ppicurl'],
                                C('site_url') . '/index.php?g=Wap&m=Host&a=index&token=' . $this->token . '&wecha_id=' . $this->data['FromUserName'] . '&hid=' . $data['pid']
                            )
                        ),
                        'news'
                    );
                    break;
                case 'Text':
                    $this->requestdata('textnum');
                    $info = M($data['module'])->order('id desc')->find($data['pid']);
                    return array(
                        htmlspecialchars_decode($info['text']),
                        'text'
                    );
                    break;
                case 'Product':
                    $this->requestdata('other');
                    $pro = M('Product')->where(array(
                        'id' => $data['pid']
                    ))->find();
                    $url = C('site_url') . U('Wap/Product/product', array(
                        'token' => $this->token,
                        'wecha_id' => $this->data['FromUserName'],
                        'id' => $data['pid']
                    ));
                    return array(
                        array(
                            array(
                                $pro['name'],
                                strip_tags(htmlspecialchars_decode($pro['intro'])),
                                $pro['logourl'],
                                C('site_url') . '/index.php?g=Wap&m=Product&a=product&token=' . $this->token . '&wecha_id=' . $this->data['FromUserName'] . '&id=' . $data['pid']
                            )
                        ),
                        'news'
                    );
                    break;
                case 'Selfform':
                    $this->requestdata('other');
                    $pro = M('Selfform')->where(array(
                        'id' => $data['pid']
                    ))->find();
                    $url = C('site_url') . U('Wap/Selfform/index', array(
                        'token' => $this->token,
                        'wecha_id' => $this->data['FromUserName'],
                        'id' => $data['pid']
                    ));
                    return array(
                        array(
                            array(
                                $pro['name'],
                                strip_tags(htmlspecialchars_decode($pro['intro'])),
                                $pro['logourl'],
                                C('site_url') . '/index.php?g=Wap&m=Selfform&a=index&token=' . $this->token . '&wecha_id=' . $this->data['FromUserName'] . '&id=' . $data['pid']
                            )
                        ),
                        'news'
                    );
                    break;
                case 'Lottery':
                    $this->requestdata('other');
                    $info = M('Lottery')->find($data['pid']);
                    if ($info == false || $info['status'] == 3) {
                        return array(
                            '活动可能已经结束或者被删除了',
                            'text'
                        );
                    }
                    switch ($info['type']) {
                        case 1:
                            $model = 'Lottery';
                            break;
                        case 2:
                            $model = 'Guajiang';
                            break;
                        case 3:
                            $model = 'Coupon';
                    }
                    $id   = $info['id'];
                    $type = $info['type'];
                    if ($info['status'] == 1) {
                        $picurl = $info['starpicurl'];
                        $title  = $info['title'];
                        $id     = $info['id'];
                        $info   = $info['info'];
                    } else {
                        $picurl = $info['endpicurl'];
                        $title  = $info['endtite'];
                        $info   = $info['endinfo'];
                    }
                    $url = C('site_url') . U('Wap/' . $model . '/index', array(
                        'token' => $this->token,
                        'type' => $type,
                        'wecha_id' => $this->data['FromUserName'],
                        'id' => $id,
                        'type' => $type
                    ));
					M('Lottery')->where($id)->setInc('click');
                    return array(
                        array(
                            array(
                                $title,
                                $info,
                                $picurl,
                                $url.'#ai9.me'
                            )
                        ),
                        'news'
                    );
					break;
                case 'Marrycard':
                    $this->requestdata('other');
					$id = $data['pid'];
                    $pro = M('Marrycard')->where(array(
                        'id' => $data['pid']
                    ))->find();
                    $url = C('site_url') . U('Wap/Marrycard/index', array(
                        'token' => $this->token,
                        'wecha_id' => $this->data['FromUserName'],
                        'id' => $id,
                    ));
					M('Marrycard')->where(array('id'=>$id))->setInc('click');
                    return array(
                        array(
                            array(
                                $pro['title'],
                                strip_tags(htmlspecialchars_decode($pro['info'])),
                                $pro['picurl'],
								$url.'#api.ai9.me'
                            )
                        ),
                        'news'
                    );
                    break;
            
                default:
                    $this->requestdata('videonum');
                    $info = M($data['module'])->order('id desc')->find($data['pid']);
                    return array(
                        array(
                            $info['title'],
                            $info['keyword'],
                            $info['musicurl'],
                            $info['hqmusicurl']
                        ),
                        'music'
                    );
            }
        } else {
            if (!strpos($this->fun, 'liaotian')) {
                $other = M('Other')->where(array(
                    'token' => $this->token
                ))->find();
                if ($other == false) {
                    return array(
                        '回复帮助，可了解所有功能',
                        'text'
                    );
                } else {
                    if (empty($other['keyword'])) {
                        return array(
                            $other['info'],
                            'text'
                        );
                    } else {
                        $img = M('Img')->field('id,text,pic,url,title')->limit(5)->order('id desc')->where(array(
                            'token' => $this->token,
                            'keyword' => array(
                                'like',
                                '%' . $other['keyword'] . '%'
                            )
                        ))->select();
                        if ($img == false) {
                            return array(
                                '无此图文信息,请提醒商家，重新设定关键词',
                                'text'
                            );
                        }
                        foreach ($img as $keya => $infot) {
                            if ($infot['url'] != false) {
                                $url = $infot['url'];
                            } else {
                                $url = rtrim(C('site_url'), '/') . U('Wap/Index/content', array(
                                    'token' => $this->token,
                                    'id' => $infot['id']
                                ));
                            }
                            $return[] = array(
                                $infot['title'],
                                $infot['text'],
                                $infot['pic'],
                                $url
                            );
                        }
                        return array(
                            $return,
                            'news'
                        );
                    }
                }
            }
            return array(
                $this->chat($key),
                'text'
            );
        }
    }
    function home()
    {
        return $this->shouye();
    }
    function shouye($name)
    {
        $company = M('Company')->where(array(
            'token' => $this->token
        ))->find();
        if ($company == false) {
            return array(
                '商家未设置公司信息，请稍后再试',
                'text'
            );
        } else {
            $this->requestdata('3g');
            $url = rtrim(C('site_url'), '/') . U('Wap/Index/index', array(
                    'token' => $this->token,
                    'wecha_id' => $this->data['FromUserName']
                ));
            //欢迎标题
            $return[] = array(
                $company['welcometitle'],
                '',
                $company['welcomepic'],
                $url
            );
            //地址
            $address = '地址:'.$company['address'];
            $imgUrl='http://api.map.baidu.com/staticimage?center='.$company['longitude'].','.$company['latitude'].'&width=80&height=80&zoom=11&markers='.$company['longitude'].','.$company['latitude'].'&markerStyles=l,1';
            $url = 'http://api.map.baidu.com/marker?location='.$company['longitude'].','.$company['latitude'].'&title='.$company['name'].'&output=html&wxref=mp.weixin.qq.com';
            $return[] = array(
                $address,
                '',
                $imgUrl,
                $url
            );
            //电话
            $phone = '电话:'.$company['tel'];
            $url = rtrim(C('site_url'), '/') . U('Wap/Company/index', array(
                'token' => $this->token,
                'wecha_id' => $this->data['FromUserName']
            ));
            $imgUrl = rtrim(C('site_url'), '/') .'/images/tel.png';
            $return[] = array(
                $phone,
                '',
                $imgUrl,
                $url
            );
            //手机
            $phone = '手机:'.$company['mp'];
            $imgUrl = rtrim(C('site_url'), '/') .'/images/tel.png';
            $return[] = array(
                $phone,
                '',
                $imgUrl,
                $url
            );
            //介绍
            $return[] = array(
                $company['introbrief'],
                $company['intro'],
                $company['briefpic'],
                ''
            );
        }
        return array(
            $return,
            'news'
        );
    }
  
    function fujin($keyword)
    {
        $keyword = implode('', $keyword);
        if ($keyword == false) {
            return $this->my . "很难过,无法识别主淫的指令,正确使用方法是:输入【附近+关键词】当" . $this->my . '提醒您输入地理位置的时候就OK啦';
        }
        $data            = array();
        $data['time']    = time();
        $data['token']   = $this->_get('token');
        $data['keyword'] = $keyword;
        $data['uid']     = $this->data['FromUserName'];
        $re              = M('Nearby_user');
        $user            = $re->where(array(
            'token' => $this->_get('token'),
            'uid' => $data['uid']
        ))->find();
        if ($user == false) {
            $re->data($data)->add();
        } else {
            $id['id'] = $user['id'];
            $re->where($id)->save($data);
        }
        return "主淫【" . $this->my . "】已经接收到你的指令\n请发送您的地理位置给我哈";
    }
    function recordLastRequest($key, $msgtype = 'text')
    {
        $rdata              = array();
        $rdata['time']      = time();
        $rdata['token']     = $this->_get('token');
        $rdata['keyword']   = $key;
        $rdata['msgtype']   = $msgtype;
        $rdata['uid']       = $this->data['FromUserName'];
        $user_request_model = M('User_request');
        $user_request_row   = $user_request_model->where(array(
            'token' => $this->_get('token'),
            'msgtype' => $msgtype,
            'uid' => $rdata['uid']
        ))->find();
        if (!$user_request_row) {
            $user_request_model->add($rdata);
        } else {
            $rid['id'] = $user_request_row['id'];
            $user_request_model->where($rid)->save($rdata);
        }
    }  
    function error_msg($data)
    {
        return '没有找到' . $data . '相关的数据';
    }
    public function user($action, $keyword = '')
    {
        $user      = M('Wxuser')->field('uid')->where(array(
            'token' => $this->token
        ))->find();
        $usersdata = M('Users');
        $dataarray = array(
            'id' => $user['uid']
        );
        $users     = $usersdata->field('gid,diynum,connectnum,activitynum,viptime')->where(array(
            'id' => $user['uid']
        ))->find();
        $group     = M('User_group')->where(array(
            'id' => $users['gid']
        ))->find();
        if ($users['diynum'] < $group['diynum']) {
            $data['diynum'] = 1;
            if ($action == 'diynum') {
                $usersdata->where($dataarray)->setInc('diynum');
            }
        }
        if ($users['connectnum'] < $group['connectnum']) {
            $data['connectnum'] = 1;
            if ($action == 'connectnum') {
                $usersdata->where($dataarray)->setInc('connectnum');
            }
        }
        if ($users['viptime'] > time()) {
            $data['viptime'] = 1;
        }
        return $data;
    }
    public function requestdata($field)
    {
        $data['year']  = date('Y');
        $data['month'] = date('m');
        $data['day']   = date('d');
        $data['token'] = $this->token;
        $mysql         = M('Requestdata');
        $check         = $mysql->field('id')->where($data)->find();
        if ($check == false) {
            $data['time'] = time();
            $data[$field] = 1;
            $mysql->add($data);
        } else {
            $mysql->where($data)->setInc($field);
        }
    }   
    public function get_tags($title, $num = 10)
    {
        vendor('Pscws.Pscws4', '', '.class.php');
        $pscws = new PSCWS4();
        $pscws->set_dict(CONF_PATH . 'etc/dict.utf8.xdb');
        $pscws->set_rule(CONF_PATH . 'etc/rules.utf8.ini');
        $pscws->set_ignore(true);
        $pscws->send_text($title);
        $words = $pscws->get_tops($num);
        $pscws->close();
        $tags = array();
        foreach ($words as $val) {
            $tags[] = $val['word'];
        }
        return implode(',', $tags);
    }
}
?>