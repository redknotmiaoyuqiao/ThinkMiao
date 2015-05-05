<?php

Class IndexAction extends Action{

    public function __construct(){
        parent::__construct();
        check_login();
    }

    public function index(){
        header("Location: /thinkkepu/admin.php/Index/admin_info");
    }

    public function admin_info(){
        $stat = $this->get_used_status();
        $this->assign('cpu_use',$stat['cpu_usage']);
        $this->assign('cpu_nonuse',1 - $stat['cpu_usage']);
        $this->assign('mem_use',$stat['mem_usage']);
        $this->assign('mem_nonuse',1 - $stat['mem_usage']);
        $this->display();
    }

    public function admin_art(){
        $Data = M('article'); // 实例化Data数据对象
        import('ORG.Util.Page');// 导入分页类
        $count      = $Data->where('')->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page       = new Page($count);// 实例化分页类 传入总记录数
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询
        $list = $Data->where('')->order('kepu_art_id')->limit($Page->firstRow.','.$Page->listRows)->select();

        for($i=0;$i<count($list);$i++){

            $class_id = $list[$i]['kepu_art_class'];;

            $Dao2 = M('sort');
            $con2['kepu_sort_id'] = $class_id;
            $res2 = $Dao2->where($con2)->find();

            $list[$i]['kepu_art_class'] = $res2['kepu_sort_name'];
        }

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板

    }

    public function admin_write(){
        $sort = new ArticleSortModel();
        $res = $sort->getAllSort();

        $this->assign('wen_list',$res);
        $this->display();
    }

    public function admin_page(){
        $Data = M('page'); // 实例化Data数据对象

        $list = $Data->select();

        $this->assign('list',$list);// 赋值数据集
        $this->display();
    }

    public function admin_add_module(){
        $Dao = M('custom_module_list');
        $res = $Dao->select();
        
        $id = $_GET['id'];
        
        $Dao2 = M('custom_module_content');
        $con['kepu_custom_module_content_list_id'] = $id;
        $res2 = $Dao2->where($con)->select();
        
        $this->assign('id',$id);


        $Dao = M('custom_module_list');
        $c['kepu_custom_module_list_id'] = $id;
        $li = $Dao -> where($c) ->find();


        $this->assign('title',$li['kepu_custom_module_list_title']);
        $this->assign('module_content',$res2);
        $this->assign('module_list',$res);
        $this->assign('idid',$id);
        $this->display();
    }

    public function admin_static_apge(){
        $static = new StaticPageModel();
        $list = $static->getAll();
        $this->assign('list',$list);
        $this->display();
    }

    public function admin_subject(){
        $Data = M('subject'); // 实例化Data数据对象
        import('ORG.Util.Page');// 导入分页类
        $count      = $Data->where('')->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page       = new Page($count);// 实例化分页类 传入总记录数
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询
        $list = $Data->where('')->order('kepu_subject_id')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function admin_sort(){
        $sort = new ArticleSortModel();
        $res = $sort->getAllSort();
        $this->assign('list',$res);
        $this->display();
    }

    public function admin_phone(){
        $Dao = M('phoneclass');
        $list = $Dao->select();
        $this->assign('list',$list);
        $this->display();
    }

    private function get_used_status(){
        $fp = popen('top -b -n 2 | grep -E "^(Cpu|Mem|Tasks)"',"r");//获取某一时刻系统cpu和内存使用情况
        $rs = "";
        while(!feof($fp)){
            $rs .= fread($fp,1024);
        }
        pclose($fp);
        $sys_info = explode("\n",$rs);
        $tast_info = explode(",",$sys_info[3]);//进程 数组
        $cpu_info = explode(",",$sys_info[4]);  //CPU占有量  数组
        $mem_info = explode(",",$sys_info[5]); //内存占有量 数组
        //正在运行的进程数
        $tast_running = trim(trim($tast_info[1],'running'));

        //CPU占有量
        $cpu_usage = trim(trim($cpu_info[0],'Cpu(s): '),'%us');  //百分比

        //内存占有量
        $mem_total = trim(trim($mem_info[0],'Mem: '),'k total');
        $mem_used = trim($mem_info[1],'k used');
        $mem_usage = round(100*intval($mem_used)/intval($mem_total),2);  //百分比

        $fp = popen('df -lh | grep -E "^(/)"',"r");
        $rs = fread($fp,1024);
        pclose($fp);
        $rs = preg_replace("/\s{2,}/",' ',$rs);  //把多个空格换成 “_”
        $hd = explode(" ",$rs);
        $hd_avail = trim($hd[3],'G'); //磁盘可用空间大小 单位G
        $hd_usage = trim($hd[4],'%'); //挂载点 百分比
        //print_r($hd);


        //检测时间
        $fp = popen("date +'%Y-%m-%d %H:%M'","r");
        $rs = fread($fp,1024);
        pclose($fp);
        $detection_time = trim($rs);

        $cpu_usage = $cpu_usage / 100;
        $mem_usage = $mem_usage / 100;

        return array('cpu_usage'=>$cpu_usage,'mem_usage'=>$mem_usage,'hd_avail'=>$hd_avail,'hd_usage'=>$hd_usage,
            'tast_running'=>$tast_running,'detection_time'=>$detection_time);
    }

}

?>