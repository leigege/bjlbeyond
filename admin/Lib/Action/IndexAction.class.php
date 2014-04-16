<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    		if(isset($_SESSION['adminname'])&& $_SESSION['adminname']!=''){
			$this->display();
		}else{
			$this->redirect('Login/login');
		}
    }
    
    
    
    public function user(){
    	$Data = M('User'); // 实例化Data数据对象
    	import('ORG.Util.Page');// 导入分页类
    	
    	$count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
    	$Page  = new Page($count,10);// 实例化分页类 传入总记录数
    	$show = $Page->show();// 分页显示输出
    	// 进行分页数据查询
    	$list = $Data->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);// 赋值数据集
    	$this->assign('page',$show);// 赋值分页输出
    	$this->display(); // 输出模板
    }
    

    public function delete(){
    	$m=M('user');
    	$id=$_GET['id'];
    	$m->delete($id);               //删除id为2的数据
    	$m->where('id='.$id)->delete();
    	$this->display();
    }
    
    
    public function dologout(){
    	$this->redirect('Login/login');
    }
    
    
    public function message(){
    		$Data = M('Message'); // 实例化Data数据对象
			import('ORG.Util.Page');// 导入分页类
			
			$map['username']=$_SESSION['username'];
			$count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
			$Page  = new Page($count,5);// 实例化分页类 传入总记录数
			$show = $Page->show();// 分页显示输出
			// 进行分页数据查询
			$list = $Data->where($map)->order('addtime')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display(); // 输出模板
    }
    
    	public function dayi(){
   		    $Data = M('Message'); // 实例化Data数据对象
			import('ORG.Util.Page');// 导入分页类
			
			$map['reply']="";
			$count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
			$Page  = new Page($count,5);// 实例化分页类 传入总记录数
			$show = $Page->show();// 分页显示输出
			// 进行分页数据查询
			$list = $Data->where($map)->order('addtime')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display(); // 输出模板
    }
    
    
    public  function commitreply(){
    	$m=M('Message');
    	
    
    	$data['id']=$_POST['id'];
    	$data['reply']=$_POST['reply'];
    	$count=$m->save($data);
    	
    	if($count>0){
    		$this->success("回复成功");
    	}else{
    		$this->error("回复失败");
    	}
    	
    	
    	
    	
    }
    
    
    public function liuyan(){
    	$this->display();
    }

    public function submitmessage(){
    	$message=M('Message');
    	$message->create();
    	$message->username=$_SESSION['adminname'];
    	$lastId=$message->add();
    	if($lastId){
    		$this->success("留言成功");
    	}else{
    		$this->error("留言失败");
    	}
    	
    }
    

    
    
    
    
}