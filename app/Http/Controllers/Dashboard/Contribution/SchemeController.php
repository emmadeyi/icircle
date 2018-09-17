<?php

namespace App\Http\Controllers\Dashboard\Contribution;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contribution_scheme;
use Illuminate\Support\Facades\Session;

class SchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schemes = contribution_scheme::orderBy('id', 'desc')->get();
        return view('dashboard.contributions.scheme.index')->with('schemes', $schemes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required|numeric',
            'frequency' => 'required'
        ]);

        $scheme = new contribution_scheme();
        $scheme->user_id = 1; //replace with logged in user Auth()->user;
        $scheme->minimum_amount = $request->amount;
        $scheme->frequency = $request->frequency;

        if($scheme->save()){   
            return redirect()->route('contribution-scheme.index')->with('success', 'Scheme Created Successfully');
        }else{
            return redirect()->route('contribution-scheme.index')->with('error', 'Sorry a problem occured  while creating new scheme');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scheme = contribution_scheme::findOrFail($id);
        return view('dashboard.contributions.scheme.edit')->with('scheme', $scheme);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'amount' => 'required|numeric',
            'frequency' => 'required'
        ]);

        $scheme = contribution_scheme::findOrFail($id);
        $scheme->user_id = 1; //replace with logged in user Auth()->user;
        $scheme->minimum_amount = $request->amount;
        $scheme->frequency = $request->frequency;

        if($scheme->save()){   
            return redirect()->route('contribution-scheme.index')->with('success', 'Scheme Updated Successfully');
        }else{
            return redirect()->route('contribution-scheme.index')->with('error', 'Sorry a problem occured  while updating scheme');
        }
    }

    public function activate(Request $request, $id){
        $scheme = contribution_scheme::findOrFail($id);
        if ($scheme->status === 1) {
            $scheme->status = 0;
            if($scheme->save()){
                return redirect()->route('contribution-scheme.index')->with('success', 'Scheme has been suspended');
            }else{
                return redirect()->route('contribution-scheme.index')->with('error', 'Unable to suspend scheme');
            }
        } else {
            $schemes = contribution_scheme::where('status', 1)->get();
            foreach ($schemes as $item) {
                $sch = contribution_scheme::findOrFail($item->id);                
                $sch->status = 0;
                $sch->save();       
            }
            
            $scheme->status = 1;
            if($scheme->save()){
                return redirect()->route('contribution-scheme.index')->with('success', 'Scheme has been activated');
            }else{
                return redirect()->route('contribution-scheme.index')->with('error', 'Unable to activate scheme');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scheme = contribution_scheme::where('id', $id);
        if($scheme->delete()){
            return redirect()->back()->with('success', 'Scheme Deleted Successfully');
        }
        return redirect()->back()->with('error', 'Sorry a problem occured  while deleting scheme');
    }
}
