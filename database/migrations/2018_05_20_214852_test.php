<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Test extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('test')){
            Schema::create('test',function(Blueprint $table){
            $table->increments('id')->comment('主键字段');
            $table->string('username')->nullable()->default('abc')->comment('用户名');
            $table->char('password',100)->comment('密码');
            $table->integer('group_id')->comment('小组id');

            $table->unique('username');
            });
        }else{
            Schema::table('test',function($table){
                if(!Schema::hasColumn('test','sex')){
                    $table->tinyinteger('sex')->commet('性别');
                    $table->string('email');
                    $table->text('username')->change();
                $table->timestamps();
                }
                
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
       // Schema::drop('test');
        Schema::dropIfExists('test');
    }
}
