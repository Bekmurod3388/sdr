<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoSearchController extends Controller
{
    public function room(Request $request){
        if ($request->get('query')){
            $query = $request->get('query');
            $data = DB::table('rooms')
                ->where('floor_id', $query)
                ->get();
            $output='<option value="0" disabled selected >Xonani tanlang</option>';
            foreach ($data as $row){
                $output.='<option value="'.$row->id.'" >'.$row->room.'</option>';
            }

            echo $output;
        }
    }
}
