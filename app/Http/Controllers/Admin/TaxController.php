<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaxRequest;
use App\Models\Tax;
use Illuminate\Http\Request;
use function view;

class TaxController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ADMIN|SM_GAI_EMPLOYEE', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taxes = Tax::all();
        return view('admin2.taxes.index', compact('taxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin2.taxes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaxRequest $request)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title_en'],
            'ar' => $data['title_ar']
        ];
        $data['details'] = [
            'en' => $data['details_en'],
            'ar' => $data['details_ar']
        ];

        $tax = tax::withTrashed()->where('title' ,json_encode($data["title"]))->first();
        if ($tax){
            if($tax->deleted_at){
                $tax::withTrashed()->restore();
            }
            $type = $tax->update($data);
        }else {

            $type = tax::create($data);
            toastr()->success(trans('message.successCreate'));
        }
        return redirect()->route('taxes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\tax $tax
     * @return \Illuminate\Http\Response
     */
    public function show(tax $tax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\tax $tax
     * @return \Illuminate\Http\Response
     */
    public function edit(Tax $tax)
    {
        return  view('admin2.taxes.edit',compact('tax'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\tax $tax
     * @return \Illuminate\Http\Response
     */
    public function update(TaxRequest $request, Tax $tax)
    {
        $data = $request->validated();

        $data['title'] = [
            'en' => $data['title_en'],
            'ar' => $data['title_ar']
        ];

        $data['details'] = [
            'en' => $data['details_en'],
            'ar' => $data['details_ar']
        ];

        $type = $tax->update($data);
        toastr()->success(trans('message.successCreate'));

        return redirect()->route('taxes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\tax $tax
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $tax = Tax::find($request["id"]);
        $isDeleted = $tax->delete();
        toastr()->success("تم الحدف بنجاح");
        return redirect()->back();

    }
}
