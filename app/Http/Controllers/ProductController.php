<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\category;
use App\productImage;
use App\Http\Requests\productsRequest;
use App\Http\Requests\UpdateproductsRequest;


use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| ProductController
|--------------------------------------------------------------------------
| this will handle all Product  part (CRUD)
|
*/
/*
_____               _            _
|  __ \             | |          | |
| |__) | __ ___   __| |_   _  ___| |_
|  ___/ '__/ _ \ / _` | | | |/ __| __|
| |   | | | (_) | (_| | |_| | (__| |_
|_|   |_|  \___/ \__,_|\__,_|\___|\__|


*/
class ProductController extends Controller
{
  /**
  * show list of products
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function list(){
  $products=Product::get();
  return view('pages.products.list',compact('products'));
  }
  /**
  * show info of  products By id
  * @pararm int $id products id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function info($id){
  $product=Product::where('id',$id)->first();

  return view('pages.products.info',compact('product'));
  }

  /**
  *  edit  products By id
  * @pararm int $id products id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function formEdit($id){
      $product=Product::where('id',$id)->first();
      $categories=category::get();
      return view('pages.products.edit',compact('product','categories'));
  }

  /**
  * edit  of  products By id
  * @pararm int $id products id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function submitEdit(UpdateproductsRequest $request,$id){


    $products=Product::where('id',$id)->first();
    $products->name=$request->name;
    $products->slug=$request->slug;
    $products->category=$request->category;
    $products->description=$request->description;
    if($request->image){
    $this->SaveFile($products,'image','image','ProductImages');
  }
    $products->save();

if($request->images){
foreach($request->images as $image){
    $productImage=new productImage();
    $productImage->product=$products->id;
    $filename = \Str::random(6).'_'.time().'.'.$image->getClientOriginalExtension();
    $image->move('ProductImages',$filename);
    $productImage->image='/ProductImages'.'/'.$filename;
    $productImage->save();


  }
}
\Notify::success('upate success','update products ');
    return redirect()->back();
  }


  /**
  * show  form add  of  productss
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function formAdd(){
      $categories=category::get();
      return view('pages.products.add',compact('categories'));
  }

  /**
  * save add  of  products
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function submitAdd(productsRequest $request){

    $products=new Product();
    $products->name=$request->name;
    $products->slug=$request->slug;
    $products->category=$request->category;
    $products->description=$request->description;
    $this->SaveFile($products,'image','image','ProductImages');
    $products->created_at=Carbon::now();
    $products->save();

foreach($request->images as $image){
    $productImage=new productImage();
    $productImage->product=$products->id;
    $filename = \Str::random(6).'_'.time().'.'.$image->getClientOriginalExtension();
    $image->move('ProductImages',$filename);
    $productImage->image='/ProductImages'.'/'.$filename;
    $productImage->save();


  }
  \Notify::success('add success','add products ');
      return redirect()->back();
  }




  /**
  * delete products By id
  * @pararm int $id products id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function delete($id){


        $products=Product::where('id',$id)->delete();
        $productImages=productImage::where('product',$id)->delete();



      \Notify::success('delete success','delete products ');
      return redirect()->back();
  }


  /**
  * delete products By id
  * @pararm int $id products id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function deleteProductImage($id){

        $productImage=productImage::where('id',$id)->delete();

      \Notify::success('delete success','delete products image ');
      return redirect()->back();
  }
}
