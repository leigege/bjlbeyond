<?php 

    class ResourseAction extends Action{
    	
    	public function resourse(){
    	$Data = M('Software'); // 实例化Data数据对象
    	import('ORG.Util.Page');// 导入分页类
    
    	 $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
    	$Page  = new Page($count,10);// 实例化分页类 传入总记录数
   		 $show = $Page->show();// 分页显示输出
    	// 进行分页数据查询
    	$list = $Data->where($map)->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);// 赋值数据集
    	$this->assign('page',$show);// 赋值分页输出
    	$this->display(); // 输出模板

    	}
    	
    	
    	public function delete(){
   			 $m=M('Software');
   			 $id=$_GET['id'];
			 $m->delete($id);               //删除id为2的数据
			 $m->where('id='.$id)->delete();
			 $this->display();
    	}
    	
    	
    	
    	
    }

?>

