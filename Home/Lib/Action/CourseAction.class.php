<?php 
	class CourseAction extends  Action{
		public function introduce(){
			$this->display();
		}
		
		public function method(){
			$this->display();
		}
		
		public function dagang(){
			$this->display();
		}
		
		public function kejian(){
			$this->display();
		}
		public function downloadruanjian(){
			$sw=M('Software');
			$arr=$sw->select();
			$this->assign('data',$arr);
			$this->display(); 		
		}
		
		public function download(){
			$m=M("Software");
			$data['id'] = $_GET['id'];
			$data['count']++;
			$m->save($data);
		}
		
		public function practice(){
			$this->display();
		}
		
		public function tuozhan(){
			$this->display();
		}
		
		public function shipin(){
			$this->display();
		}
	}
?>