<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageSize = $request->page_size ?? 10;
        $search = sprintf('%%%s%%', $request->search);
        if(isset($request->sort_by)) {
            $members = Members::where('first_name', 'ilike', $search)
                ->orWhere('last_name', 'ilike', $search)
                ->orderBy($request->sort_by, $request->sort_order)
                ->paginate($pageSize);
        } else {
            $members = Members::where('first_name', 'ilike', $search)
                ->orWhere('last_name', 'ilike', $search)
                ->paginate($pageSize);
        }

        return $members;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $members = new Members();
        $members->first_name = $request->first_name;
        $members->last_name = $request->last_name;
        $members->email = $request->email;
        $members->users_id = $request->users_id;
        $members->order = Members::max('order') + 1;
        $members->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Members::findOrFail($id);
        return $member;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $members = Members::findOrFail($id);
        $members->first_name = $request->first_name;
        $members->last_name = $request->last_name;
        $members->email = $request->email;
        $members->users_id = $request->users_id;


        $members->save();

        return $members;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = Members::destroy($id);

        return $members;
    }
}
