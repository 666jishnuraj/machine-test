<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Order; 
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function adminindex()
    {

        $products=Product::all();
       
        return view('admin.adminhome',compact('products'));
    }

    public function approve_project($id)
    {
        $products =\DB::table('products')
        ->where('id','=', $id)
        ->update(['status'=>'1']);
       
        return redirect()->back();
    }
    public function disapprove_product($id)
    {
        $products =\DB::table('products')
        ->where('id','=', $id)
        ->update(['status'=>'0']);
       
        return redirect()->back();
    }
    public function user_oders()
    {
        $orders =\DB::table('orders')
        ->join('products', 'products.id', '=', 'orders.product_id')
        ->select('orders.id','orders.quantity','orders.price','orders.status','products.name')->orderBy('status', 'ASC')->get()->toArray();
    
      
        return view('admin.adminuserorder',compact('orders'));
    }
    public function deliver($id)
    {
        $products =\DB::table('orders')
        ->where('id','=', $id)
        ->update(['status'=>'1']);
       
        return redirect()->back();
    }

    public function logout()
    {
        session()->flush();
      
         return redirect('/');
    }




}