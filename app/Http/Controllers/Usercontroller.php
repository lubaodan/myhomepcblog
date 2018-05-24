<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Good;
class Usercontroller extends Controller
{
    //
    function show(){
    	return 'iloveyou';
    }
    function edit($id){
    	return '这是用户的更新 操作'.$id;
    }
    function edit2($id){
    	return route("/admin/user/edit",['id'=>100]);
    }
    function shengji(){
    	return '用户升级';
    }
    function qingqiu(Request $request){
    	//请求方法获取
    	//$method = $request->method();

    	//检测请求方式
    	//$method = $request->isMethod('post');
    	//请求路径
    	//$method = $request->path();
    	//$method = $request->url();

    	//$method = $request->ip();
    	//$method = $request->getPort();

    	$method = $request->input('name');
    	var_dump($method);
    	//return $method;
    }

    public function form(){
    	return view('user');
    }
    public function insert(){

    }
    public function cookie(){
    	//写入cookie setcookie   时间单位为分钟
    	\Cookie::queue('name','xiaoming',20);
    }

    public function page(){
        //解析模板
        return view('page.index',['title' => '首页']);
    }
    public function cart(){
        //解析模板
        return view('page.cart',['title' => '购物车']);
    }
    public function layout(){
        //解析模板
        return view('layout.index',['title' => 'layout']);
    }
    public function extend(){
        //解析模板
        return view('layout.extend',['title' => 'extend']);
    }

    public function liucheng(){
        //解析模板
        return view('control.liucheng',['title' => 'liucheng','total' => 100,'users'=>[
                ['name'=>'老大'],
                ['name' => '你妹爷']
            ]
            ]);
    }
    function db(){
        $rest = DB::table('ims_ewei_shop_order')->skip(5)->take(4)->get();
        dd($rest);
       // return view();env  DB::insertGetId();db:beginTransaction();DB::rollback();DB::commit();
    }
    public function func(){
        love();
        //return "nihaofunc";
    }

    public function model(){
        // $goods = new \App\Good;
        // $goods->title = "水果";
        // $goods->content = "好吃的水果呀";
        // $goods->save();
        //dd($goods);
        // $goods = \App\Good::find(5);
        // $goods->title = '大苹果';
        // $goods->save();
        //echo $goods['title'];
//themeforest.net
        $data = Good::get();
        dd($data);
    }
}