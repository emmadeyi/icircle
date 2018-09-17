<?php

namespace App\Http\Controllers\Dashboard\Contribution\ben;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contribution_record;
use Illuminate\Support\Facades\Validator;
use Session;
use Image;


class MakePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contributions.make-payment.ben-create');
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
            'amount' => 'required|numeric'
        ]);

        //check for proof of payment upload
        $fileName = '';
        if($request->hasFile('image')){
            $upload = $request->file('image');
            $rules = array(
                [
                    'image.*' => 'mimes:jpeg,gif,png|max:2048'
                ],

                [
                    'image.mimes' => 'Only jpg, png and gif image formats are allowed',
                    'image.max' => 'Image must not be less than 2MB',
                ]
            );

            $validator = Validator::make(array('image' => $upload), $rules);

            if ($validator->fails()) {
                    return redirect()->back()->with('error', 'Only jpg, png and gif image formats are allowed<br>Image must not be less than 2MB');

            }else{
                $fileName = time() . '.' . $upload->getClientOriginalExtension();
                $path = '../storage/app/public/uploads/contributions/'.$fileName;
                Image::make($upload)->resize(300, null, function($constraint){
                    $constraint->aspectRatio();
                })->save(public_path($path));

                $contribution = new contribution_record();
                $contribution->user_id = $request->beneficiary;
                $contribution->by = 1; //Auth user_id
                $contribution->amount = $request->amount;
                $contribution->pop = $fileName;
                $contribution->details = $request->for;
                //check if user has existing loan payment, if any subtract remaining loan and store record
                if($contribution->save()){
                    return redirect()->route('make-payment.index')->with('success', 'Contribution uploaded. Pending Approval');
                }
                return redirect()->route('make-payment.index')->with('error', 'Error occur while submitting contribution details. Please try again.');
            }            
        }else{
			$contribution = new contribution_record();
            $contribution->user_id = $request->beneficiary;
            $contribution->by = 1; //Auth user_id
            $contribution->amount = $request->amount;
            $contribution->details = $request->for;
            //check if user has existing loan payment, if any subtract remaining loan and store record
            if($contribution->save()){
                return redirect()->route('make-payment.index')->with('success', 'Contribution uploaded. Pending Approval');
            }
            return redirect()->route('make-payment.index')->with('error', 'Error occur while submitting contribution details. lease try again.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
