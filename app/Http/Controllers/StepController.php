<?php

namespace App\Http\Controllers;

use App\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function show(Request $request)
    {
        $form_data = $request->query();
        $steps = Step::where('product_id',$form_data['product-id'])->get();
        return view('step');
    }
}
