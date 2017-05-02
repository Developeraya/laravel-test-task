<?php

namespace App\Http\Controllers;

use App\Category;
use App\Client;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->paginate(20);

        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title','id');
        return view('clients.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        Client::create($request->input());

        return redirect()->route('clients.index')->with('success','Client Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        if($client)
        {
            $categories = Category::pluck('title','id');

            return view('clients.edit',compact('client','categories'));
        }
        else
        {
            return redirect()->route('clients.index')->with('error','Client Not Found');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {
        $client = Client::find($id);

        $client->update($request->input());

        if($client)
        {
            return redirect()->route('clients.index')->with('success','Client Updated Successfully');
        }
        else
        {
            return redirect()->route('clients.index')->with('error','Client Not Found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);

        if($client)
        {
            $client->delete();
            return redirect()->route('clients.index')->with('success','Client Deleted Successfully');
        }
        else
        {
            return redirect()->route('clients.index')->with('error','Client Not Found');
        }
    }
}
