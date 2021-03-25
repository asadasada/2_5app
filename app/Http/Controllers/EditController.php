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
/*
$request->textの値がnullの場合,明示的に""を代入させる
*/
        if(!$user->memo()->first()){

            $text = $request->text?:"";
            $res = $user->memo()->create([
                'text' => $text
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
    //response dataの加工処理 idやuser_idをresponseから除外したりformatを付けたり
    //配列になるので事前にformatを付ける
    $parsed_create = $res->created_at->toDate()->format("m j, Y, g:i a");
    $parsed_update = $res->updated_at->toDate()->format("m j, Y, g:i a");
    $res = array_diff_key($res->getAttributes(), array_flip(["id", "user_id"]));
    //破壊的な代入なので値には気をつける
    $res["created_at"] = $parsed_create;
    $res["updated_at"] = $parsed_update;
            return response()->json($res);
        }

}
