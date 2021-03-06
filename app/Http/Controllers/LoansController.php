<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loans;
use Illuminate\Support\Facades\Log;

class LoansController extends Controller
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
            $loans = Loans::whereHas('members', function($q) use ($search) {
                $q->where('first_name', 'ilike', $search)
                    ->orWhere('last_name', 'ilike', $search);
            })->orderBy($request->sort_by, $request->sort_order)->with('members')
                ->paginate($pageSize);
        } else {
            $loans = Loans::whereHas('members', function($q) use ($search) {
                $q->where('first_name', 'ilike', $search)
                    ->orWhere('last_name', 'ilike', $search);
            })->with('members')->paginate($pageSize);
        }

        return $loans;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info($request->members_id);
        $loans = new Loans();
        $loans->amount = $request->amount;
        $loans->loan_date = $request->loan_date;
        $loans->members_id = $request->members_id;
        $loans->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loan = Loans::with('members')->findOrFail($id);
        return $loan;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $loans = Loans::findOrFail($id);
        $loans->amount = $request->amount;
        $loans->loan_date = $request->loan_date;
        $loans->members_id = $request->members_id;

        $loans->save();

        return $loans;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loans = Loans::destroy($id);

        return $loans;
    }
}
