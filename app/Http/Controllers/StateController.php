<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Country;
class StateController extends Controller
{
  public function index() {
  	$states = State::all();
   return view('admin.pages.state.index', ['states' => $states]);
  }


 public function create( State $state)
  {
  	$countries = Country::all();
    return view('admin.pages.state.create', ['countries' => $countries]);
  }


  public function store(Request $request)
  {   
    $request->validate([
      'name' => ['required', 'max:100'],
      'country_id' => ['required']
    ]);  
    State::create($request->all());   
    return redirect()->route('state.create')
                    ->with('success','State created successfully.');
  }
  public function edit(State $state) {
  	$countries = Country::all();
  	return view('admin.pages.state.edit', ['state' => $state], ['countries' => $countries]);
  }

  public function update(Request $request, State $state)
    {
       $data = $request->validate([          
          'name' => ['required', 'max:100'],
          'country_id' => ['required']
        ]);
        $state->update($data);
        return redirect()->route('state.index')->with('info', 'State Update Successfully');
    }
    public function destroy(State $state) {
    	$state->delete();
      return redirect()->route('state.index')->with('warning', 'State Deleted Successfully');
    }

}
