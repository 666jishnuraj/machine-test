<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Product; 
use App\Models\Order; 
use Illuminate\Support\Facades\Session;


class UserLoginController extends Controller
{
    public function index()
    {
         
        return view('user.login');
    }

    public function login(Request $request)
    {

        session()->put('preventBack', true);
        $items =\DB::table('users')
            ->where('email','=', $request->userEmail)
            ->where('password','=', $request->userPassword)
            ->first(['id', 'user_role', 'name','email']);

       // $data = User::where('email',$request->userEmail)->where('password',$request->userPassword)->get();
     

        if (!empty($items))
        {

            
           if($items->user_role==0)
           {
            Session::put('id',$items->id,
          'name',$items->name);
          return redirect('admin');
                   

            
           }

           elseif($items->user_role==1)
           {
            Session::put('id',$items->id,
            'name',$items->name);
            return redirect('employe');
            
           }

           else
           {
            Session::put('id',$items->id,
          'name',$items->name);

          return redirect('customer');



           
           }

         }
         else
         {
            return back()->withErrors([
                'userEmail' => 'The provided credentials do not match our records.',
            ]);
         }
         



    }

    public function customerindex()
    {

        $products=\DB::table('products')
        ->where('status','=','1')
        ->get()->toArray();
        return view('customer.customerindex',compact('products'));
    }
   
    public function my_cart()
    {
        return view('customer.customercart');
    }
  
    public function add_to_cart(Request $request)
    {
        session_start();
       $user_id=session()->get('id');
       if(empty( $user_id))
       {
        return redirect('/');
       }
       $p_id=$request->product_id;
       $p_name=$request->product_name;
       $img=$request->product_img;
       $price=$request->product_price;
       $qnt=$request->quantity;
       $cart = session()->get('cart');
      // session()->forget('cart');
     $cart[$p_id]=array('product_id'=> $p_id,
        'product_name'=> $p_name,
        'product_img'=> $img,
        'product_price'=> $price,
        'product_quantity'=> $qnt);
       
        session()->put('cart', $cart);
   
       return redirect()->back();
      
     
    }
    public function remove_cart($id,Request $request)
    { 
        $products = session('cart');
       
        foreach ($products as $key => $value)
        {
            if ($value['product_id'] == $id) 
            {                
                unset($products [$key]);            
            }
        }
     
        $request->session()->put('cart',$products);         
        return redirect()->back();
    }
    public function check_out()
    {
        $user_id=session()->get('id');
        if(empty( $user_id))
        {
         return redirect('/');
        }
        if(session('cart'))
        {
            foreach(session('cart') as $id => $value)
            {
                $order = new Order();
                $order->product_id=$value['product_id'];
                  $order->price=$value['product_price'] * $value['product_quantity'];
                $order->quantity=$value['product_quantity'];
                $order->status=0;
                $order->user_id=$user_id;
                $order->save();
            }
            session()->forget('cart');
            return redirect()->back();
        }
    }

    public function user_order()
    {
        $user_id=session()->get('id');
        $orders =\DB::table('orders')
        ->join('products', 'products.id', '=', 'orders.product_id')
        ->where('orders.user_id','=',$user_id)
        ->select('orders.id','orders.quantity','orders.price','orders.status','products.name')->get();

        return view('customer.customerorders')->with('orders',$orders);
    }
    public function view_more($id)
    {
        $orders =\DB::table('orders')
        ->join('products', 'products.id', '=', 'orders.product_id')
        ->where('orders.id','=',$id)
        ->select('orders.id','orders.quantity','orders.price','orders.status','products.name','products.image')->first();
      
        return view('customer.customersingleorder')->with('orders',$orders);
    }
}
