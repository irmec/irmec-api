<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Members extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Member::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $member = new Member;

        $member->lastname = $request->input('lastname');
        $member->firstname = $request->input('firstname');
        $member->middlename = $request->input('middlename');        
        $member->cell_phone = $request->input('cell_phone');
        $member->address = $request->input('address');
        $member->baptismal_date = $request->input('baptismal_date');
        $member->save();

        return 'Member record successfully created with id ' . $member->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Member::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $member = Member::find($id);

        $member->lastname = $request->input('lastname');
        $member->firstname = $request->input('firstname');
        $member->middlename = $request->input('middlename');        
        $member->cell_phone = $request->input('cell_phone');
        $member->address = $request->input('address');
        $member->baptismal_date = $request->input('baptismal_date');
        $employee->save();

        return "Sucess updating member #" . $member->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {
        $member = Member::find($request->input('id'));

        $member->delete();

        return "Member record successfully deleted #" . $request->input('id');
    }
}
