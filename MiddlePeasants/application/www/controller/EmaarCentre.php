<?php
namespace app\www\controller;
use think\Db;
use think\Request;

class EmaarCentre
{
  public function index_cn()
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
 		//print_r($j);
      return view("index_cn",$j);
  }
  public function index_en()
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
 		//print_r($j);
      return view("index_en",$j);
  }
  public function index_ar()
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
 		//print_r($j);
      return view("index_ar",$j);
  }


}
