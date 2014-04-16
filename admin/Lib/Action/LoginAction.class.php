<?php
	class LoginAction extends Action{
		public function Login(){
			$this->display();
		}
		
		public function doLogin(){
			$adminname=$_POST['adminname'];
			$password=$_POST['password'];
				
			$admin=M('Admin');
			$where['adminname']=$adminname;
			$where['password']=$password;
			$count=$admin->where($where)->count();
		
			if($count>0){
				$_SESSION['adminname']=$adminname;
				$_SESSION['password']=$password;
		
				$this->success('用户登录成功',U('Index/index'));
			}else{
				$this->error('该用户不存在');
			}
		}
		
		
		
	}


?>