<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //

    public function index(){
           $allcat=category::all(['namecategory']);
           return view('addproduct',compact('allcat'));
    }

    public function indexmod(){
        $allpro=DB::table('products')->get();
        return view('modifyproduct',compact('allpro'));
 }

 public function desplayonepro($id){
    $allpro=DB::table('products')->get();
    $onepro=DB::table('products')->where('idproduct',$id)->get();
    return view('modifyproduct',compact('onepro','allpro'));
}

    public function addproduct(Request $request){
        $this->validate($request,
        [

          "nameproduct"=>"required",
          "catproduct"=>"required ",
          "description"=>"required ",
          "quentityproduct"=>"required",
          "priceproduct"=>"required",
          "imgproduct"=>"required",
        ],
        [
           "idproduct.required"=>"Id product is required",
           "nameproduct.required"=>"Last name is required",
           "catproduct.required"=>"Category of product is requered",
           "description.required"=>"description of product is requered",
           "quentityproduct.required" => "quentity of product is required",
           "priceproduct.required"=>"price of product is required",
           "imgproduct.required"=>"image of product is required",

        ]);

        $pro =new product();

           $idcat= DB::table('categories')->select('idcategory')->where('namecategory',$request->input('catproduct'))->first();
        $pro->nameproduct =$request->input("nameproduct");
        $pro->catproduct =$request->input("catproduct");
        $pro->description =$request->input("description");
        $pro->quentityproduct =$request->input("quentityproduct");
        $pro->priceproduct =$request->input("priceproduct");
        $pro->idcat =$idcat->idcategory;

        if($request->hasFile('imgproduct')){

             $file=$request->file('imgproduct');
              $extention=$file->getClientOriginalExtension();
              $filename=time().'.'.$extention;
              $file->move(public_path().'/publicimage',$filename);
              $pro->imageproduct=$filename;
        }else{
            return $request;
            $pro->imageproduct='';
        }

        $pro->save();
      return view('home');

  }


  public function allproduct($namcat){
      $allproduct= DB::table('products')->where("catproduct",$namcat)->get();

      return view('productOfCatogry',compact('allproduct','namcat'));
  }


public function editproduct(Request $request){
              DB::table('products')->where('idproduct',$request->input('idproduct'))->update([
                  "nameproduct"=>$request->input('nameproduct'),
                  "description"=>$request->input('description'),
                  "quentityproduct"=>$request->input('quentityproduct'),
                  "priceproduct"=>$request->input('priceproduct')

              ]);
              $allpro=DB::table('products')->get();
              return view('modifyproduct',compact('allpro'));

}
public function deleteproduct(Request $request){
    product::where('idproduct',$request->input('idpro'))->delete();
    $allpro=DB::table('products')->get();
              return view('modifyproduct',compact('allpro'));
}

}
