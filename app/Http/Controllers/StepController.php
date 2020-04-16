<?php

namespace App\Http\Controllers;

use App\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function show(Request $request)
    {
        $form_data = $request->query();
        $sort = $form_data['sort'];
        $product_id = $form_data['product-id'];
        $steps_count = Step::where('product_id', $product_id)->count();
        $step = Step::where([
            'product_id' => $product_id,
            'sort' => $sort,
        ])->first();
        $img = $step->img ? 'storage/' . $product_id . '/' . $step->img : null;
        $vars = explode(',', $step->vars);
        $lan = $form_data['lan'] === 'cn' ? 'zh-CN' : $form_data['lan'];
        $cur_product_name = $form_data['product'];
        $install_tip = trans('nas.1', [], $lan);
        return view('step.index' . $step->template, compact('steps_count', 'vars', 'cur_product_name', 'install_tip', 'lan', 'sort', 'img'));
    }
}
