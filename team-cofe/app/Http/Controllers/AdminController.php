<?php 

namespace App\Http\Controllers;

use App\Models\Food;

use App\Models\User;
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

}