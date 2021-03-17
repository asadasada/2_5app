<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\User;
class EditController extends Controller
{
    /*
    */
    public function index(){
         $id = Auth::id();
         $resdata = User::find($id)->memo()->first() ?:[];
         return $resdata;
        // return response()->json($resdata);
    }
    /*
        データベースへの代入を行う。
        代入の後は即反映させる必要があるが
        一旦の仮実装としてresponseには
        データベース（もしあるならば）かそのままリクエストを返す。
        データベースにない場合も想定すること

    */
        public function edit(Request $request){
                    $request->validate([
            'text' => ['max:1000000']
        ]);
                    /*
                    既にテキストがある場合はテキストをアップデート
                    そうでない場合はcreateで作成する
                    updateOrCreateでも可
                    */
        $id = Auth::id();
        $user = User::find($id);
        $res = null;
        //validationで弾く?
        if(is_null($request->text)){
            $res = $user->memo()->create([
            'text' => ""
        ]);
        }elseif(!$user->memo()->first()){
        $res = $user->memo()->create([
            'text' => $request->text
        ]);
    }else{
            /*
                もし$resが0つまりupdateが失敗したらfalseを入れる。
                そうでない場合はオブジェクトを返す
            */
        $res = $user->memo()->first()->update(["text"=>$request->text]);
        if(!$res){
            $res = false;
            return response()->json(["error"=>"can't update data!"]);
        }else{
            $res = $user->memo()->first();
        }
    }
    $res = array_diff_key($res->getAttributes(), array_flip(["id", "user_id"]));
            return response()->json($res);
        }

}
