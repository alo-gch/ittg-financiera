<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Client;



class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $loans = Loan::all();
        return view('loans.index',['loans' => $loans]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $clients =Client::all();
         return view('loans.create',compact('clients'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([
        'client_id' => 'required',
        'cantidad' => 'required',
        'numeropagos' => 'required',
        'cuota' => 'required',
        'totalapagar' => 'required',
        'fechadeministracion' => 'required',
        'fechadevencimiento' => 'required',

    ]);



        Loan::create([
        'client_id' =>$request->input('client_id'),
        'cantidad' =>$request->input('cantidad'),
        'numeropagos' =>$request->input('numeropagos'),
        'cuota' =>$request->input('cuota'),
        'totalapagar' =>$request->input('totalapagar'),
        'fechadeministracion' =>$request->input('fechadeministracion'),
        'fechadevencimiento' =>$request->input('fechadevencimiento'),
    ]);

        return redirect()->route('loans.index');



        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loan = Loan::find($id);
        $loan -> delete();
        return $loan;


        //
    }
}
