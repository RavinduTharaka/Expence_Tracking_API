<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class CategoriesController extends Controller
{
    //
    function add(Request $req){
        $categories = new categories;
        $categories ->category_id=$req->category_id;
        $categories ->Category_name=$req->Category_name;
        $categories ->save();
       /* if($result)
        {
            return["Result"=>"Data has been saved"];
        }
        else{
            return["Result"=>"Operation Failed"];
        }*/
    }

    function view(){
        return categories::select('Category_name')->get();
    }
    
}
