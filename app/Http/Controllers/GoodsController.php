<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsController extends Controller
{
    //
    function index(){
    	echo "index";
    }
    function create(){
    	return "create";
    }
  
    function update(){
    	return 'update';
    }
    function store(){
    	return 'store';
    }
      function edit($id){
    	return 'edit';
    }
      function destroy(){
    	return 'store';
    }
}
