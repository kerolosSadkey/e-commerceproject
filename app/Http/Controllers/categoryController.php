<?php

namespace App\Http\Controllers;
use App\category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    //

    public function index(){
        return view('addCatogry');
 }

    public function addcat(Request $request){
        $this->validate($request,
        [

          "namecat"=>"required",
          "descriptioncat"=>"required",
        ],
        [

           "namecat.required"=>"Last name is required",
           "descriptioncat.required"=>"description of category is required",

        ]);

        $cat =new category();


        $cat->namecategory=$request->input("namecat");
        $cat->descriptioncat=$request->input("descriptioncat");

        $cat->save();

         return view('home');
  }

  public function allcategory(){
      $allcat=category::all();

      return view("modifycat",compact("allcat"));
  }

  public function desplaycat($id){
    $allcat=DB::table('categories')->get();
    $onecat=DB::table('categories')->where('idcategory',$id)->get();
    return view('modifycat',compact('onecat','allcat'));
}

public function editcatrgory(Request $request){
    DB::table('categories')->where('idcategory',$request->input('idcat'))->update([
        "namecategory"=>$request->input('namecat'),
        "descriptioncat"=>$request->input('description'),

    ]);
    $allcat=DB::table('categories')->get();
    return view('modifycat',compact('allcat'));

}

public function deletecetogry(Request $request){
    category::where('idcategory',$request->input('idcat'))->delete();
    product::where('idcat',$request->input('idcat'))->delete();
    $allcat=DB::table('categories')->get();
              return view('modifycat',compact('allcat'));
}

}
