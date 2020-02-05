<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    //
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('teams')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('year', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('website', 'like', '%'.$query.'%')
         ->orWhere('players', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('teams')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td><a href="/view-team/'.$row->id.'">'.$row->name.'</a></td>
         <td>'.$row->year.'</td>
         <td>'.$row->stadium.'</td>
         <td>'.$row->players.'</td>
         <td>'.$row->coach_name.'</td>
         <td>'.$row->website.'</td>
         <td><a class="btn btn-primary" href="/edit/'.$row->id.'">EDIT</a></td>
         <td><a class="btn btn-danger" href="/delete/'.$row->id.'">DELETE</a></td>
         <td><a class="btn btn-success" href="/update/'.$row->id.'">UPDATE</a></td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
