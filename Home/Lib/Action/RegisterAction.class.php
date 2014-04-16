<?php 

class RegisterAction extends Action{
	public function register(){
		$this->display();
	}
	
	public function doReg(){
		$user=M('User');
		$data['username']=$_POST['username'];
		$data['pwd']=$_POST['pwd'];
		$data['sex']=$_POST['sex'];
		$data['age']=$_POST['age'];
		$data['zy']=$_POST['zy'];

		$data['email']=$_POST['email'];
		$lastId=$user->add($data);
		if($lastId){
			$this->redirect('Index/index');
		}else{
			$this->error('用户注册失败');
		}
	}
}