<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\cart;
use Illuminate\Support\Facades\Auth;

use phpDocumentor\Reflection\Types\Integer;

class cartController extends Controller
{
    //

    public function buyproduct(Request $request){

        $cart=new cart();

        $qynt=DB::table('products')->select('quentityproduct')->where('idproduct',$request->input('idpro'))->first();
        $price=DB::table('products')->select('priceproduct')->where('idproduct',$request->input('idpro'))->first();


        $total=$price->priceproduct *  intval($request->input('quentity')) ;
        $cart->newquy=$request->input('quentity');
         $cart->total=$total;
          $cart->idproduct=$request->input('idpro');
          $cart->iduser=Auth::user()->id;

         $newquentity=$qynt->quentityproduct - intval($request->input('quentity'));

          DB::table('products')->where('idproduct',$request->input('idpro'))->update(['quentityproduct'=> $newquentity]);

          if($cart->save()){
            session()->put('message', "yes, you bought product succesfully");

              return redirect()->back();
          }

    }

    public function addcart(Request $request){
        $prod=DB::table('products')->where("idproduct", $request->input('idpro'))->get();
        $arr=[];
         array_push($arr,$prod);

        if(session()->has('cart')){
            $oldarr=session()->get('cart');
         $arr=   array_merge($arr,$oldarr);
        }


        session()->put('cart',$arr);

        return view('cart');
    }


    public function allcart(){
      $allcart  = DB::table('carts')->select('carts.*','products.*')->join('products','carts.idproduct','products.idproduct')->where('carts.iduser',Auth::user()->id)->get();

      return view('histroy',compact('allcart'));
    }
}
