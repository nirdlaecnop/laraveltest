<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Checklist;
use Response;
use Illuminate\Support\Facades\Input;
class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$checklists = Checklist::all();
		return view('checklist.index',['checklists'=>$checklists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
		$checklist = new Checklist;
	$checkval = $request->input('checklist'); 
		
		
		$checklist->checklist_title = $checkval ;
		
		if($checklist->save()){			
			return response()->json(['return'=> "success"]);
			
		}
		
		return response()->json(['return'=>"failed"]);
		
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {	
        //
	  $checkval = $req->input('checklist'); 
	 
	  
	  $checklist = Checklist::find ($req->id);
      $checklist->checklist_title = $checkval;
      
      $checklist->save();
      return $checklist->checklist_title;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req)
    {
        //
		Checklist::find($req->id)->delete();
		return response()->json(array('return'=>'success'));
    }
}
