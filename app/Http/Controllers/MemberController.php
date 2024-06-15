<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MemberController extends Controller
{
    /**
     * 会員一覧
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $members = Member::orderBy('created_at' , 'asc')->get();
        return view('members.index' , ['members' => $members]);
    }

    /**
     * 会員登録画面表示
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        return view('members.create');
    }

    /**
     * 会員登録TODO:バリデーションにてuniqueの記述必要
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        // バリデーション
        $this->validate($request , [
            'name' => 'required|max:15',
            'phone' => 'required|max:15',
            'email' => 'required|string|max:254|unique:members',

            ]);

        //会員作成
        Member::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,

        ]);

        return redirect('members');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * 会員編集画面表示
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * 会員情報更新
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * 会員情報削除
     */
    public function destroy(Member $member)
    {
        //
    }
}
