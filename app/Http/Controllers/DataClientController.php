<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\dataClients;

class DataClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|dataClients[]|Factory|View|Collection
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            return dataClients::all();
        }else{
            return view('Home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return dataClients
     */
    public function store(Request $request)
    {
        $dataClient = new dataClients();
        $dataClient->companyName = $request->companyName;
        $dataClient->businessTurn = $request->businessTurn;
        $dataClient->name = $request->name;
        $dataClient->address = $request->address;
        $dataClient->phone = $request->phone;
        $dataClient->email = $request->email;
        $dataClient->status = false;
        $dataClient->save();

        return $dataClient;
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
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataClient = dataClients::find($id);
        $dataClient->companyName = $request->companyName;
        $dataClient->businessTurn = $request->businessTurn;
        $dataClient->name = $request->name;
        $dataClient->address = $request->address;
        $dataClient->phone = $request->phone;
        $dataClient->status = $request->status;
        $dataClient->save();

        return $dataClient;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataClient = dataClients::finf($id);

        $dataClient->delete();
    }
}
