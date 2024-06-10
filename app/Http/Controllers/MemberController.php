<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{

    /**
     * 会員一覧
     * 
     * @param Request $request
     * @return Response
     * 
     */
    public function index(Request $request)
    {
        $members = Member::orderBy('created_at' , 'asc')->get();
        return view('members.index' ,[
            'members' => $members,
        ]);
    }


    //TODO:バリデーションのemailの際に、unique(重複禁止)を記載return 
}
