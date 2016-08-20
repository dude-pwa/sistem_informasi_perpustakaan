<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MembersRequest;
use Session;
use App\Member;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $members = Member::orderBy('nama');
        $search = $request->input('search');
        if(!empty($search)){
            $members->Where('nama', 'like', '%' . $search . '%');
        }
        $members = $members->paginate();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MembersRequest $request)
    {
        Member::create($request->all());

        Session::flash('message', 'Successfully saved member!');
        return redirect('members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MembersRequest $request, $id)
    {
        $member = Member::findOrFail($id);
        $member->update($request->all());
        Session::flash('message', 'Successfully saved member!');
        return redirect('members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        Session::flash('message', 'Successfully deleted member!');
        return redirect('members');
    }
}
