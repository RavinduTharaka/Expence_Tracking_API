<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expences;

class ExpenceController extends Controller
{
    //

    function add(Request $req){
        $Expences = new Expences;
        $Expences ->user_id=$req->user_id;
        $Expences ->category_id=$req->category_id;
        $Expences ->amount=$req->amount;
        $Expences ->discription=$req->discription;
        $Expences ->date=$req->date;
        $Expences ->location=$req->location;
        $Expences ->save();
       /* if($result)
        {
            return["Result"=>"Data has been saved"];
        }
        else{
            return["Result"=>"Operation Failed"];
        }*/
    }
}
