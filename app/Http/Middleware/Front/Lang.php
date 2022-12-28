<?php

namespace App\Http\Middleware\Front;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Lang
{
    public $languageList = [
        'zh-Hans'   =>  1,
        'zh-Hant'   =>  1,
        'en'        =>  2,
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->lang) {
            return redirect()->route('front.index',['lang'=>'zh-Hant']);
        }
        App::setLocale($request->lang??'zh-Hant');
        if(isset($this->languageList[config('app.locale')])) {
            putenv('language='.$this->languageList[config('app.locale')]);
        }
        return $next($request);
    }
}
