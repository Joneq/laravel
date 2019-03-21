<?php
/**
 * Created by 2019/3/21.
 * User: Joneq
 * Info: 2019/3/21
 * Time: 下午4:29
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{
    const STARTTIME = '2018-04-01 00:00:00';

    public function index()
    {
        $beiJingTime = time();
        $georgiaTime = time() - (3600*4);
        $haveKnowTime = time() - strtotime(self::STARTTIME);
        return view('welcome',['time'=>$beiJingTime,'gtime'=>$georgiaTime,'ktime'=>$haveKnowTime]);
    }

}