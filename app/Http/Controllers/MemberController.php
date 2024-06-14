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
     * Show the form for creating a new resource.TODO:バリデーションにてuniqueの記述必要
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
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
