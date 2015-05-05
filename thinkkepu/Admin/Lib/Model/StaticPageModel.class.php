<?php
	
	class StaticPageModel extends Model{
		
		public function getAll(){	
			$Dao = M('staitc_page');
            $res = $Dao->select();
            return $res;
		}
		
		public function selectOne($id){
			$Dao = M('staitc_page');
            if(empty($id)){
                return false;
            }
            $con['kepu_staitc_page_id'] = $id;
            $re = $Dao->where($con)->find();
		}
		
		public function del($id){
			$Dao = M('staitc_page');
            if(empty($id)){
                return false;
            }
            $con['kepu_staitc_page_id'] = $id;
			$res = $Dao->where($con)->find();
			
			$filename = $res['kepu_staitc_page_file'];
			
			unlink(C('STATIC_PAGE_PATH').$filename);
			
			
            $re = $Dao->where($con)->delete();
            if($re){
                return true;
            }
		}
	}
?>