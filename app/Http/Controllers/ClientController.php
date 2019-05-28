<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\Type;
use App\Booking;
use App\User;
use Spatie\Permission\Models\Role;
use Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = User::role('client')->orderBy('created_at','desc')->paginate(5);
        return view('client.index',compact('users','books'))->with('i', (request()->input('page', 1) - 1) * 5);
       // $clis = Client::orderBy('created_at','desc')->paginate(5);
       // return view('client.index',compact('clis'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cls = User::all();
        $tps= Type::all();
        return view('client.create',compact('tps','cls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'gender' => 'required',
            'picture' => 'nullable',

        ]);

            $client = new Client;
            $client->name = $request->input('name');
            $client->email = $request->input('email');
            $client->mobile = $request->input('mobile');
            $client->gender = $request->input('gender');
            $client->picture = $request->input('picture');
            $client->save();

            return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tps = Type::all();
        $client = Client::find($id);
        $bookings = Booking::find($id);
        return view ('client.show',compact('client','tps','bookings'));
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
        //
    }
}
