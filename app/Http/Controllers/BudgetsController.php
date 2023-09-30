<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\budgets;

class BudgetsController extends Controller
{
    //
    function insert(Request $req){
        $budgets = new budgets;
        $budgets ->user_id=$req->user_id;
        $budgets ->category_id=$req->category_id;
        $budgets ->from_date=$req->from_date;
        $budgets ->to_date=$req->to_date;
        $budgets ->amount=$req->amount;
        $budgets ->save();
        if($result)
        {
            return["Result"=>"Data has been saved"];
        }
        else{
            return["Result"=>"Operation Failed"];
        }
    }
}
