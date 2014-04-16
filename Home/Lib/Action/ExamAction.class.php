<?php 

	class ExamAction extends Action{
		
		public function exam(){
		/* 	$m=M('Exam');
			$arr=$m->select();
			$this->assign('data',$arr); */
			$this->display();
		}
		
		public function check(){

			$correct=0;
			$score=0;
		
		    if($_POST['question1']=='A'){
		    	$correct=$correct+1;
		    }
		    if($_POST['question2']=='C'){
		    	$correct=$correct+1;
		    }
		    if($_POST['question3']=='D'){
		    	$correct=$correct+1;
		    }
		    if($_POST['question4']=='D'){
		    	$correct=$correct+1;
		    }
		    if($_POST['question5']=='D'){
		    	$correct=$correct+1;
		    }
		    if($_POST['question6']=='D'){
		    	$correct=$correct+1;
		    }
		    if($_POST['question7']=='D'){
		    	$correct=$correct+1;
		    }
		    if($_POST['question8']=='C'){
		    	$correct=$correct+1;
		    }
		    if($_POST['question9']=='B'){
		    	$correct=$correct+1;
		    }
		    if($_POST['question10']=='C'){
		    	$correct=$correct+1;
		    }
		    $score=$correct*10;

		    echo $score;
		    
		    $m=M('Score');
		    $m->username=$_SESSION['username'];
		    $m->changci=1;
		    $m->score=$score;
		    $m->add();
		    
	
		}
	}

?>	