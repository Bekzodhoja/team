<?php 

namespace App\Http\Controllers;

use App\Models\Food;

use App\Models\User;
use App\Models\Foodchef;
use App\Models\Reservetion;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function user()
   {

    $date=user::all();  
    return view("admin.users",compact("date"));
   }

   public function deleteuser($id)
   {

    $date=user::find($id); 
    $date->delete(); 
    return redirect()->back();
   }


   public function foodmenu(){



        $data = Food::all();  
        return view("admin.foodmenu", compact('data'));
   }

   public function upload(Request $request){
        $data = new Food;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename); 

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();

   }

   public function deletemenu($id) {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
   }

   public function updateview($id) {
        $data = Food::find($id);
        return view("admin.updateview", compact('data'));
   }

   public function update(Request $request, $id) {
        $data = Food::find($id);

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename); 

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
   }

   public function reservation(Request $request) {
        $data = new Reservetion;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;

        $data->save();

        return redirect()->back();
   }

   public function viewreservation(){
        $data = Reservetion::all();
        return view('admin.adminreservation', compact("data"));
   }

   public function viewchef() {
        $data = Foodchef::all();
        return view('admin.adminchef', compact('data'));
   }

   public function uploadchef(Request $request) {

        $data = new Foodchef;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename); 

        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();
   }

   public function deletechef($id){
        $data = Foodchef::find($id);
        $data->delete();
        return redirect()->back();
   }

   public function updatechef($id){
        $data = Foodchef::find($id);
        return view('admin.updatechef', compact('data'));
   }

   public function updatefoodchef(Request $request, $id) {

        $data = Foodchef::find($id);

        $image = $request->image;

        if($image) {
             $imagename = time() . '.' . $image->getClientOriginalExtension();
             $request->image->move('chefimage', $imagename);                     
             $data->image =$imagename;
        }        

        $data->name = $request->name;
        $data->name = $request->speciality;
        
        $data->save();
        return redirect()->back();
   }

}