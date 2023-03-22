<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Order; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class EmployeController extends Controller
{
    public function employeindex()
    {

        $user_id=session()->get('id');
        $products =DB::table('products')
       ->where('user_id','=', $user_id)->orderBy('status', 'ASC')
       ->get()->toArray();
    
     

       return view('employe.employe',compact('products'));
    }
    public function add_product(Request $request)
    {
        $user_id=session()->get('id');
       
        $img= Time().$request->file('image')->getClientOriginalName();
       
        $product = new Product;

        $product->name = $request->input('name');
        $product->image = $img;
        $product->user_id = $user_id;
        $product->status = 0;
        $product->price = $request->input('price');
        $add=$product->save();
        
        $request->file('image')->storeAs('public/products/',$img);
        if($add)
        {
              return redirect('employe');
        }

    }
    


}    