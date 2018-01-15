<?php

// 成员管理

namespace app\admin\controller;

use cmf\controller\AdminBaseController;
use think\Db;
use app\admin\model\MemberModel;

class MemberController extends AdminBaseController
{

    public function _initialize()
    {
        parent::_initialize();
    }


    // 成员首页
    public function index(){
    	session('admin_menu_index', 'Member/index');
    	// $member = Db::table('member')->select();
    	$memberModel = new MemberModel();
    	$member = $memberModel->select();
    	$this->assign('member',$member);
    	return $this->fetch();
    }








}