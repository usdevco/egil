<?php
namespace App\Http\Controllers\HotelManager;
use App\Http\Controllers\Controller;
use App\Models\Roomlisting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class BillingController extends Controller
{
public function __construct(){
if(Session::has('level')){
if(Session::get('level') != 5)
return redirect()->back();
}
else
return redirect()->back();
}
public function showRoomListing(){
if(Session::get('level') !=1){
$roomListings = Roomlisting::where('hmanager_id',Session::get('uid'))->get();
}
else{
$roomListings = Roomlisting::get();
}
return view('hotelmanager.viewRoomListing',compact('roomListings'));
}
public function downloadRoomListing($id){
$roomListing = Roomlisting::find($id);
if(Session::get('uid') != $roomListing->hmanager_id){
return redirect()->back();
}
$response = -1;
$file=public_path().'/uploads/users/'.$roomListing->file;
$response =  response()->download($file);
if($response  !== -1){
return $response;
}
}
public function destroyRoomListing($id){
Roomlisting::find($id)->delete();
Session::flash('success','Record Deleted Successfully');
return redirect()->back();
}
}