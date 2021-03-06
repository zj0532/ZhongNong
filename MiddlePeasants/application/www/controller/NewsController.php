<?php
namespace app\www\controller;
use think\Controller;
use think\Db;
use think\Request;
use app\admin\Model\NewsModel;
use app\admin\Model\YouShiModel;

class NewsController extends Controller
{
    private $news;
    private $you_shi;

    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->news = new NewsModel(); //新闻
        $this->you_shi = new YouShiModel(); //迪拜投资房产投资优势
    }

    //迪拜投资房产投资优势
    public function investment_advantage_cn(){
        try{
            $list = $this->you_shi->order('you_order asc')->paginate(3);
            $this->assign('list',$list);
        }catch (\Exception $e){
            $this->error($e->getMessage());
        }
        return $this->fetch('investment_advantage_cn');
    }
    //迪拜新闻
    public function new_list_cn(){
        $data = $this->news->where('ns_language','cn')->order('ns_intime', 'desc')->paginate(3);
        $news_upload_path=config("news_upload_path");
        $this->assign('news_upload_path',$news_upload_path);
        $this->assign('data',$data);
        return $this->fetch('new_list_cn');
    }
    //迪拜新闻详情
    public function new_content_cn(){
        $id = input('id');
        $data = $this->news->where('ns_id',$id)->find();
        $news_upload_path=config("news_upload_path");
        $data_next = $this->news->where('ns_id','>',$id)->find();
        $data_last = $this->news->where('ns_id','<',$id)->find();
        $this->assign('news_upload_path',$news_upload_path);
        $this->assign('data',$data);
        $this->assign('data_next',$data_next);
        $this->assign('data_last',$data_last);
        return $this->fetch('new_content_cn');
    }
	public function page_cn()
  {
		$request=Request::instance();
		$url=$request->url();
		//print_r($url);
		
		$language='cn';
		if(strpos($url,'/cn/') !== false)
		{
			$language='cn';
 		}
		if(strpos($url,'/en/') !== false)
		{
			$language='en';
 		}
		if(strpos($url,'/ar/') !== false)
		{
			$language='ar';
 		}
		
 		//print_r($resulttd);
		
		$j['language']=$language;
		
		
	  $data = input();	
	  $sql="select * from base_news where ns_language='cn' and  ns_id='".$data['id']."'";
	  // echo $sql;
	  $result=Db::query($sql);
		foreach($result as $k=>$v)
		{
			$result[$k]['Ymd']=date("Y-m-d",$result[$k]['ns_intime']);
			//$result[$k]['d']=date("d",$result[$k]['ns_intime']);
			$result[$k]['img']=config("news_upload_path").$result[$k]['ns_img'];
			
	    }
	  
	  
	  $j["news"] = $result[0];
		
 	 //print_r($j);
     return view('page_cn',$j);
  }
	public function page_en()
	{
		$request=Request::instance();
		$url=$request->url();
		//print_r($url);
		
		$language='cn';
		if(strpos($url,'/cn/') !== false)
		{
			$language='cn';
 		}
		if(strpos($url,'/en/') !== false)
		{
			$language='en';
 		}
		if(strpos($url,'/ar/') !== false)
		{
			$language='ar';
 		}
		
 		//print_r($resulttd);
		
		$j['language']=$language;


	  $data = input();	
	  $sql="select * from base_news where ns_language='en' and ns_id='".$data['id']."'";
	  // echo $sql;
	  $result=Db::query($sql);
		foreach($result as $k=>$v)
		{
			$result[$k]['Ymd']=date("Y-m-d",$result[$k]['ns_intime']);
			//$result[$k]['d']=date("d",$result[$k]['ns_intime']);
			$result[$k]['img']=config("news_upload_path").$result[$k]['ns_img'];
			
	    }
	  
	  
	  $j["news"] = $result[0];



		 return view('page_en',$j);
	}
	public function page_ar()
  {
		$request=Request::instance();
		$url=$request->url();
		//print_r($url);
		
		$language='cn';
		if(strpos($url,'/cn/') !== false)
		{
			$language='cn';
 		}
		if(strpos($url,'/en/') !== false)
		{
			$language='en';
 		}
		if(strpos($url,'/ar/') !== false)
		{
			$language='ar';
 		}
		
 		//print_r($resulttd);
		
		$j['language']=$language;

	  $data = input();	
	  $sql="select * from base_news where ns_language='ae' and ns_id='".$data['id']."'";
	  // echo $sql;
	  $result=Db::query($sql);
		foreach($result as $k=>$v)
		{
			$result[$k]['Ymd']=date("Y-m-d",$result[$k]['ns_intime']);
			//$result[$k]['d']=date("d",$result[$k]['ns_intime']);
			$result[$k]['img']=config("news_upload_path").$result[$k]['ns_img'];
			
	    }
	  
	  
	  $j["news"] = $result[0];


     return view('page_ar',$j);
  }
}
