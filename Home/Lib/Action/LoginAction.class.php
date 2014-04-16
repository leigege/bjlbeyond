<?php 
	 class LoginAction extends  Action{
		public function login(){
			$this->display();
		}
		
		public function doLogin(){
			$username=$_POST['username'];
			$pwd=$_POST['pwd'];
			
			$user=M('User');
			$where['username']=$username;
			$where['pwd']=$pwd;
			$count=$user->where($where)->count();

			if($count>0){
				$_SESSION['username']=$username;
				$_SESSION['pwd']=$pwd;
				
				$yonghu=M('User');
				$tiaojian['username']=$username;
				$tiaojian['pwd']=$pwd;
				$arr['email']=$yonghu->where($tiaojian)->getField('email');
				$arr['age']=$yonghu->where($tiaojian)->getField('age');
				$arr['zy']=$yonghu->where($tiaojian)->getField('zy');
				$arr['sex']=$yonghu->where($tiaojian)->getField('sex');
				$_SESSION['email']=$arr['email'];
				$_SESSION['age']=$arr['age'];
				$_SESSION['zy']=$arr['zy'];
				$_SESSION['sex']=$arr['sex'];
			//	$_SESSION['email']=$arr['email'];
	
				$this->success('用户登录成功',U('Index/index'));
			}else{
				$this->error('该用户不存在');	
			}
		}
		
		public function doLogout(){
			$_SESSION=array();
		    if(isset($_COOKIE[session_name()])){
		    	setcookie(session_name(),'',time()-1,'/');	
		    }
			$this->redirect('Index/index');
		}
		
		
	
	 }	
	