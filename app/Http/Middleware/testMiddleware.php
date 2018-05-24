<?php

namespace App\Http\Middleware;

use Closure;

class testMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         //记录请求的的路径
        $path = $request-> path();
        $str = '['.date('Y-m-d H:i:s').']'.$request->ip().'--------------'.$request->path().'----'.$request->ip();
        //将字符串路径存入到日志文件中
        file_put_contents("request.log", $str."\r\n" , FILE_APPEND);
        return $next($request);
    }
}
