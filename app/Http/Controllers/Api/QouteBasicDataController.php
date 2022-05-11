<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qoutes;
use Illuminate\Support\Facades\Validator;


class QouteBasicDataController extends Controller
{
    public function qouteList(Request $request)
    {
        $data = Qoutes::all();
        $arQouteData = array();
        array_push($arQouteData,$data);
        // foreach ($data as $qoute) {
        //     $arQouteData[] = $qoute->getQouteBasicInfo();
        // }
          
        return response()->json(['success' => $data], 200);
    }

    public function store(Request $request)
  {

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|email|max:255',
        'quotes' => 'required|string|min:6|confirmed',
    ]);

  
    $newQuotes = new Qoutes([
      'name' => $request->get('name'),
      'quotes' => $request->get('quotes')
    ]);

    $newQuotes->save();

    return response()->json(['success' => $newQuotes], 200);
    
  }
}
