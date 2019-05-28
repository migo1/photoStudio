<?php

use Illuminate\Support\Facades\Input;
use App\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('dashboards', 'DashboardController');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('clients','ClientController');
    Route::resource('bookings', 'BookingController');
    Route::resource('types', 'TypeController');
    Route::resource('finds', 'FindController');
    Route::resource('caledars', 'CalendarController');
    Route::resource('pics','PicController');
    Route::resource('photographers', 'PhotoController');
    Route::resource('client_calendars', 'KalendarController');
    Route::resource('invoices','InvoiceController');
    Route::post('/search', function(){
        $q = Input::get('q');
        if($q != ""){
                $apps = Client::where('name', 'LIKE', '%'. $q .'%')
        
                ->orWhere('mobile', 'LIKE', '%'. $q .'%')
                ->get();
                $clis = Client::orderBy('created_at','desc')->paginate(5);
                if(count($apps) > 0){
                    return view('client.index',compact('clis'))->withDetails($apps)->withQuery($q)->with('i', (request()->input('page', 1) - 1) * 5);
                
                }
        }
        $clis = Client::orderBy('created_at','desc')->paginate(5);
        return redirect()->route('clients.index',compact('clis'))->withMessage('the searched photoshoot session does not exist')->with('i', (request()->input('page', 1) - 1) * 5);
});
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
