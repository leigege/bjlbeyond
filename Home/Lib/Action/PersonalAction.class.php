<?php 
	class PersonalAction extends  Action{
		public	function Personal(){
				if(isset($_SESSION['username'])&& $_SESSION['username']!=''){
			$this->display();
		}else{
			$this->redirect('Login/login');
		}
		
		
		}
		
		public function modifyp(){
			$this->display();
		}
		
		public function commitmodify(){
			$user=M('User');
			$yonghu=M('User');
			$tiaojian['username']=$_SESSION['username'];
			$id=$yonghu->where($tiaojian)->getField('id');
			
			
			$data['id']=$id;
			$data['age']=$_POST['age'];
			$data['zy']=$_POST['zy'];
			$data['email']=$_POST['email'];
			$data['sex']=$_POST['sex'];
			$count=$user->save($data);
			if($count>0){
				$gengxin=M('User');
				$xintiaojian['username']=$_SESSION['username'];
				$_SESSION['age']=$gengxin->where($xintiaojian)->getField('age');
				$_SESSION['zy']=$gengxin->where($xintiaojian)->getField('zy');
				$_SESSION['email']=$gengxin->where($xintiaojian)->getField('email');
				$_SESSION['sex']=$gengxin->where($xintiaojian)->getField('sex');
				
				$this->success('用户信息修改成功',U('Personal/personal'));
			}else{
				$this->error('用户信息修改失败');
			}
		}
		
		public function modifypassword(){
			$this->display();
		}
		
		public function commitpassword(){
			
			
			$user=M('User');
			$yonghu=M('User');
			$tiaojian['username']=$_SESSION['username'];
			$id=$yonghu->where($tiaojian)->getField('id');
				
				
			$data['id']=$id;
			$data['pwd']=$_POST['pwd1'];
			$count=$user->save($data);
			if($count>0){
				$gengxin=M('User');
				$xintiaojian['username']=$_SESSION['username'];
				$_SESSION['pwd']=$gengxin->where($xintiaojian)->getField('pwd');
				$this->success('用户信息修改成功',U('Personal/personal'));
			}else{
				$this->error('用户信息修改失败');
			}
		}
		
		
		
		public  function uploadwork(){
			$this->display();
		}
		
		
		
		Public function upload(){
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('doc');// 设置附件上传类型
			$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}
		
			// 保存表单数据 包括附件数据
			$work = M("Homework"); // 实例化User对象
	
			$data['username']=$_SESSION['username'];
			$data['filename']=$info[0]['name'];
			$data['size']=$info[0]['size'];
			
		
			$work->add($data); // 写入用户数据到数据库
			$this->success('数据保存成功！');
		}
		
		
		
		public function domessage(){
			$this->display();
		}
		
		
		public function submitmessage(){
			$message=M('Message');
			$message->create();
			$message->username=$_SESSION['username'];
			$lastId=$message->add();
			if($lastId){
				$this->success("留言成功");
			}else{
				$this->error("留言失败");
			}
		}
		
		
		public function reply(){
			
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
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}
	
	

?>