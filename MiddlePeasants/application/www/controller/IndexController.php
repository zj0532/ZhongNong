<?php
namespace app\www\controller;
use think\Controller;
use think\Db;
use think\Request;
class IndexController extends Controller
{

    public function index_cn(){
        return $this->fetch('index_cn');
    }
//  public function index_cn()
//  {
//		$request=Request::instance();
//		$url=$request->url();
//		//print_r($url);
//
//		$language='cn';
//		if(strpos($url,'cn') !== false)
//		{
//			$language='cn';
//			$sql="select * from base_news where ns_language='cn' order by ns_id desc limit 0,6";
//		}
//		if(strpos($url,'en') !== false)
//		{
//			$language='en';
//			$sql="select * from base_news where ns_language='en' order by ns_id desc limit 0,6";
//		}
//		if(strpos($url,'ar') !== false)
//		{
//			$language='ar';
//			$sql="select * from base_news where ns_language='ae' order by ns_id desc limit 0,6";
//		}
//
//		$resulttd=Db::query($sql);
//		foreach($resulttd as $k=>$v)
//		{
//			$resulttd[$k]['Ym']=date("Y-m",$resulttd[$k]['ns_intime']);
//			$resulttd[$k]['d']=date("d",$resulttd[$k]['ns_intime']);
//			$resulttd[$k]['img']=config("news_upload_path").$resulttd[$k]['ns_img'];
//
//	    }
//		//print_r($resulttd);
//
//
//		$sqlcountry="select * from base_country where cou_is_show='1' order by cou_id asc";
//		$resultcountry=Db::query($sqlcountry);
//		$j['language']=$language;
//		$j['news']=$resulttd;
//		$j['country']=$resultcountry;
//
//		//print_r($j);
//
//		return view('index',$i);
//  }

  public function index_en()
  {
		$request=Request::instance();
		$url=$request->url();
		//print_r($url);
		
		$language='cn';
		if(strpos($url,'cn') !== false)
		{
			$language='cn';
			$sql="select * from base_news where ns_language='cn' order by ns_id desc limit 0,6";
		}
		if(strpos($url,'en') !== false)
		{
			$language='en';
			$sql="select * from base_news where ns_language='en' order by ns_id desc limit 0,6";
		}
		if(strpos($url,'ar') !== false)
		{
			$language='ar';
			$sql="select * from base_news where ns_language='ae' order by ns_id desc limit 0,6";
		}
		
		$resulttd=Db::query($sql);
		foreach($resulttd as $k=>$v)
		{
			$resulttd[$k]['Ym']=date("Y-m",$resulttd[$k]['ns_intime']);
			$resulttd[$k]['d']=date("d",$resulttd[$k]['ns_intime']);
			$resulttd[$k]['img']=config("news_upload_path").$resulttd[$k]['ns_img'];
			
	    }
		//print_r($resulttd);
		
		$sqlcountry="select * from base_country where cou_is_show='1' order by cou_id asc";
		$resultcountry=Db::query($sqlcountry);
		$j['language']=$language;
		$j['news']=$resulttd;
		$j['country']=$resultcountry;
	   return view('index_en',$j);
  }

	public function index_ar()
	{
		$request=Request::instance();
		$url=$request->url();
		//print_r($url);
		
		$language='cn';
		if(strpos($url,'cn') !== false)
		{
			$language='cn';
			$sql="select * from base_news where ns_language='cn' order by ns_id desc limit 0,6";
		}
		if(strpos($url,'en') !== false)
		{
			$language='en';
			$sql="select * from base_news where ns_language='en' order by ns_id desc limit 0,6";
		}
		if(strpos($url,'ar') !== false)
		{
			$language='ar';
			$sql="select * from base_news where ns_language='ae' order by ns_id desc limit 0,6";
		}
		
		$resulttd=Db::query($sql);
		foreach($resulttd as $k=>$v)
		{
			$resulttd[$k]['Ym']=date("Y-m",$resulttd[$k]['ns_intime']);
			$resulttd[$k]['d']=date("d",$resulttd[$k]['ns_intime']);
			$resulttd[$k]['img']=config("news_upload_path").$resulttd[$k]['ns_img'];
			
	    }
		//print_r($resulttd);
		
		$sqlcountry="select * from base_country where cou_is_show='1' order by cou_id asc";
		$resultcountry=Db::query($sqlcountry);
		$j['language']=$language;
		$j['news']=$resulttd;
		$j['country']=$resultcountry;
		return view('index_ar',$j);
	}
	
	

	
	
}
