<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $id = $_GET['id'];
        if(empty($id)){
            $id=2;
        }
        $Dao = M('page');
        $res = $Dao->where('kepu_page_id=%s',$id)->find();
        $id = $res['kepu_page_subject_id'];

        $Data = M('subject');
        $content = $Data->where('kepu_subject_id=%s',$id)->find();
        $str = $content['kepu_subject_content'];

        $str = $this->setModul($str);

        $this->assign('content',$str);
        $this->display();
    }

    public function article(){
        $this->display();
    }

    public function wen(){
        $Dao = M('page');
        $res = $Dao->where('kepu_page_id=1')->find();
        $id = $res['kepu_page_subject_id'];

        $Data = M('subject');
        $content = $Data->where('kepu_subject_id=%s',$id)->find();
        $str = $content['kepu_subject_content'];

        $art_id = $_GET['art_id'];

        $wen_dao = new ArticleModel();
        $wen_dao->addOneHot($art_id);
        $wen = $wen_dao->getOneArticle($art_id);

        $time = date("Y-m-d H:i:s", $wen['kepu_art_time']);

        $table_change = array(
            '{wen}'=>$wen['kepu_art_content'],
            '{wen_title}'=>$wen['kepu_art_title'],
            '{wen_author}'=>'作者：'.$wen['kepu_art_author'].'    '.$time,
            '{wen_class}'=>$wen['kepu_art_class'],
            '{wen_show}'=>$wen['kepu_art_show'],
            '{art_id}'=>$art_id,
            '{add_comment}'=>$this->setComment($art_id),
        );
        $str = strtr($str,$table_change);

        $str = $this->setModul($str);  

        $this->assign('content',$str);
        $this->display();
    }

    public function subject(){
        $Data = M('subject');
        $id = $_GET['id'];
        $content = $Data->where('kepu_subject_id=%s' ,$id)->find();

        $str = $content['kepu_subject_content'];

        $str = $this->setModul($str);

        $this->assign('content',$str);
        $this->display();
    }

    private function setModul($str){
        $carousel = new ModuleCarouselModel();
        $carousel_str = $carousel->getView();

        $article_model = new ArticleModel();
        $article_model_str = $article_model->getAutoArticleListView();

        $article_search_str = $article_model->getSearchArticleListView();

        $subject_list = new ModuleSubjectModel();
        $subject_list_str = $subject_list->getView();

        $top5 = new Top5Model();
        $top5_str = $top5->getView();

        $activity = new ModuleActivityModel();
        $activity_str = $activity->getView();

        $class_list = new ModuleClassModel();
        $class_list_str = $class_list->getView();

        $table_change = array(
            '{carousel}'=>$carousel_str,
            '{auto_article_model}' => $article_model_str,
            '{top_5_model}' => $top5_str,
            '{subject_list_model}' => $subject_list_str,
            '{activity_model}' => $activity_str,
            '{search_res_list}' => $article_search_str,
            '{class_list}' => $class_list_str,
        );

        $str = strtr($str,$table_change);

        $Dao = M('custom_module_list');
        $res = $Dao->select();

        for($i=0;$i<count($res);$i++){
            $item = $res[$i];

            $custom = new CustomModel();


            $out = $custom->getCustomByTag($item['kepu_custom_module_list_tag']);

            
            $str = strtr($str,[$item['kepu_custom_module_list_tag']=>$out]);

        }

        
        return $str;
    }

    private function setComment($art_id){
        if(empty($_SESSION['user_id'])){
            $add_comment = '<p>请先<a target="_BLANK" href="/thinkkepu/index.php/Login/index">登录</a></p>';
        }
        else{
            $add_comment = '
                             <input type="hidden" id="comment_art_id" value="'.$art_id.'" />
                             <textarea name="comment_content" id="tv_comment_content" style="width: 100%"></textarea>
                             <img id="check_img" src="/thinkkepu/index.php/Common/getCodeImage" onclick="this.src=\'/thinkkepu/index.php/Common/getCodeImage?d=\'+Math.random();"/>
                             <input type="text" id="txtCheckCode" /><p id="show"></p></br>
                             <button onclick="onupcomment()">评论</button>
                            ';
        }

        return $add_comment;
    }
}

?>