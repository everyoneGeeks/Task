<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Carbon\Carbon;
use App\category;

/*
|--------------------------------------------------------------------------
| CategoryController
|--------------------------------------------------------------------------
| this will handle all Category  part (CRUD)
|
*/

/*

           _
          | |
  ___ __ _| |_ ___  __ _  ___  _ __ _   _
 / __/ _` | __/ _ \/ _` |/ _ \| '__| | | |
| (_| (_| | ||  __/ (_| | (_) | |  | |_| |
 \___\__,_|\__\___|\__, |\___/|_|   \__, |
                    __/ |            __/ |
                   |___/            |___/
*/
class CategoryController extends Controller
{
  /**
  * show list of Categories
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function list(){
  $categories=category::get();
  return view('pages.categories.list',compact('categories'));
  }
  /**
  * show info of  category By id
  * @pararm int $id category id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function info($id){
  $category=category::where('id',$id)->first();

  return view('pages.categories.info',compact('category'));
  }

  /**
  *  edit  category By id
  * @pararm int $id category id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function formEdit($id){
      $category=category::where('id',$id)->first();
      return view('pages.categories.edit',compact('category'));
  }

  /**
  * edit  of  category By id
  * @pararm int $id category id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function submitEdit(UpdateCategoryRequest $request,$id){


          $category=category::where('id',$id)->first();
          $category->name=$request->name;
          $category->slug=$request->slug;
          $category->icon=$request->icon;
          $category->save();
        \Notify::success('update success','update category ');

            return redirect()->back();
  }


  /**
  * show  form add  of  categorys
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function formAdd(){
      return view('pages.categories.add');
  }

  /**
  * save add  of  category
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function submitAdd(CategoryRequest $request){

    $category=new category();
    $category->name=$request->name;
    $category->slug=$request->slug;
    $category->icon=$request->icon;
    $category->created_at=Carbon::now();
    $category->save();
  \Notify::success('add success','add category ');
      return redirect()->back();
  }




  /**
  * delete category By id
  * @pararm int $id category id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function delete(Request $request){
      foreach ($request->deletecategory as $key => $value) {

        $category=category::where('id',$value)->delete();

      }
      \Notify::success('delete success','delete categorys ');
      return redirect()->back();
  }

}
