<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Client;
use App\Type;
use App\User;

class BookingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Booking::select('client_id');
        return view('client.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photographers = User::role('photographer')->get();
        $tps= Type::all();
        $id = User::select('id');
        $client = User::find($id);
        return view('bookings.create',compact('photographers','tps','client'));
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
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'photo' => 'required',
            'note' => 'nullable',
            'status' => 'nullable'
        ]);

        $booking = new Booking;
        $client_id = $request->input('client_id');
        $photographer_id = $request->input('photographer_id');
        $type_id = $request->input('type_id');
        //$created_by = $request->input('created_by');
        $booking->date = $request->input('date');
        $booking->start_time = $request->input('start_time');
        $booking->end_time = $request->input('end_time');
        $booking->photo = $request->input('photo');
        $booking->type_id = $type_id;
        $booking->note = $request->input('note');
        $booking->client_id = $client_id;
        $booking->price = 300*$booking->photo;
        $booking->created_by = auth()->user()->id; 
        $booking->photographer_id = $photographer_id;
        $booking->status = $request->input('status');

        $booking->save();

        return redirect()->route('users.show',$client_id);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($client_id)
    {
       
        $client = Client::find($client_id);
        $tps= Type::all();
        $photographers = User::role('photographer')->get();
        return view('client.show',compact('client','bookings','tps','photographers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($booking_id)
    {
        $booking = Booking::find($booking_id);
        $tps = Type::all();
        $user = User::all();
        return view('client.edit',compact('booking','tps','user','booking_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'photo' => 'required',
            'note' => 'nullable',
            'status' => 'nullable',
        ]);

        $booking = Booking::findOrFail($request->booking_id);
        $client_id = $request->input('client_id');
        $type_id = $request->input('type_id');
        $created_by = $request->input('created_by');
        $photographer_id = $request->input('photographer_id');
        $user_id = $request->input('user_id');
        $booking->date = $request->input('date');
        $booking->start_time = $request->input('start_time');
        $booking->end_time = $request->input('end_time');
        $booking->photo = $request->input('photo');
        $booking->type_id = $type_id;
        $booking->note = $request->input('note');
        $booking->client_id = $client_id;
        $booking->price = 300*$booking->photo;
        $booking->created_by = $created_by;
        $booking->photographer_id = $photographer_id;
        $booking->status = $request->input('status');

        $booking->update();

        return redirect()->route('clients.show',$client_id);
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
