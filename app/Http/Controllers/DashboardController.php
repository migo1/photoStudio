<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\User;
use App\Type;
use App\Client;
use DB;
use Carbon\Carbon;

class DashboardController extends Controller
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
        $users = User::role('photographer')->get();
        $books = User::role('photographer')->orderBy('created_at','desc')->paginate(2);

        $birthdays = User::role('client')->whereRaw('DAYOFYEAR(curdate()) <= DAYOFYEAR(dob) AND DAYOFYEAR(curdate())  >=  dayofyear(dob)')
                        ->orderByRaw('DAYOFYEAR(dob)')
                        ->paginate(1);
        $books = Booking::orderBy('created_at','desc')->whereDate('date',DB::raw('CURDATE()'))->paginate(2);
        return view('dashboard.index',compact('books','users','client','birthdays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('dashboard.index');
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
        $photographer_id = $request->input('photographer_id');
        $created_by = $request->input('created_by');
        $booking->date = $request->input('date');
        $booking->start_time = $request->input('start_time');
        $booking->end_time = $request->input('end_time');
        $booking->photo = $request->input('photo');
        $booking->type_id = $type_id;
        $booking->note = $request->input('note');
        $booking->client_id = $client_id;
       // $booking->ammount = 250*$booking->photo;
       $booking->created_by = $created_by;
        $booking->photographer_id = $photographer_id;
        $booking->status = $request->input('status');

        $booking->update();

        return redirect()->route('dashboards.index');
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
