<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		if(isset($_SESSION['username'])&& $_SESSION['username']!=''){
		 	$Data = M('Message'); // 实例化Data数据对象
			import('ORG.Util.Page');// 导入分页类
			
		    $map['username']=admin;
			$count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
			$Page  = new Page($count,1);// 实例化分页类 传入总记录数
			$show = $Page->show();// 分页显示输出
			// 进行分页数据查询
			$list = $Data->where($map)->order('addtime')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
// 			$this->assign('page',$show);// 赋值分页输出
			$this->display(); // 输出模板
		}else{
			$this->redirect('Login/login');
		}			
	}
	
	public function message(){
		$Data = M('Message'); // 实例化Data数据对象
		import('ORG.Util.Page');// 导入分页类
		 
		$count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
		$Page  = new Page($count,5);// 实例化分页类 传入总记录数
		$show = $Page->show();// 分页显示输出
		// 进行分页数据查询
		$list = $Data->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}
	
	
	
	
	
	
	
	
	
	
	
	
}
