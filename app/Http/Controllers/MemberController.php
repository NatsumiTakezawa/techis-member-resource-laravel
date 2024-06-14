<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

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
     * Store a newly created resource in storage.TODO:バリデーションにてuniqueの記述必要
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
