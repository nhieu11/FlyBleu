<?php

namespace App\Http\Controllers;

use App\Entities\Account;
use App\Entities\History;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function payment(Request $request){
        $acc_num = $request->acc_num;
        $password = $request->password;
        $amount = $request->amount;
        $balance = Account::where([['acc_num',$acc_num],['password',$password]])->value('balance');
        if($balance==null){
            echo "sai mật khẩu";
        }
        else{
            $balance-=$amount;
            if($balance<0){
                echo "Tài khoản không đủ";
            }
            else {
                $codeTrade = $this->creatCodeTrade();
                Account::where('acc_num',$acc_num)->update(['balance'=>$balance]);
                History::insert(['acc_num'=>$acc_num,'code_trade'=>$codeTrade,'amount'=>$amount]);
                return view('message',['codeTrade'=>$codeTrade])->with(['flag'=>'success','message'=>'Giao dịch thành công']);
            }
        }
    }
    public function creatCodeTrade(){
        $codeTrade = date("Ymdhis");
        $codeTrade = 'banking'.$codeTrade;
        return $codeTrade;
    }
}
