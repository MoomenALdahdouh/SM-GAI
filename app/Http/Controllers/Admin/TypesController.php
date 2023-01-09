<?php

namespace App\Http\Controllers\Admin;

use App\Facades\ImageFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Models\Customer;
use App\Models\Types;
use Illuminate\Support\Facades\Route;
use function redirect;
use function toastr;
use function trans;
use function view;

class TypesController extends Controller
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
        $type_data = str_contains(Route::current()->getName(),'heavy')
            ?'heavy'
            :(str_contains(Route::current()->getName(),'light')?'light':'introduction');
        $types = Types::where("type", $type_data)->paginate(15);
        return view('admin2.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin2.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeRequest $request)
    {
        $data = $request->validated();
        $data['title']  = [
            'en' => $data['title_en'],
            'ar' => $data['title_ar']
        ];

        $data['details'] = [
            'en' => $data['details_en'],
            'ar' => $data['details_ar']
        ];

        $image = ImageFacade::uploadImage($data['image']);
        $data['image'] = $image['image'];

        $data['type'] = str_contains(Route::current()->getName(),'heavy')?'heavy':(str_contains(Route::current()->getName(),'light')?'light':'introduction');
        $type = Types::create($data);

        toastr()->success(trans('message.successCreate'));

        return redirect()->route(str_contains(Route::current()->getName(),'heavy')?'transport-heavy.index':(str_contains(Route::current()->getName(),'light')?'transport-light.index':'introduction.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\types  $types
     * @return \Illuminate\Http\Response
     */
    public function show(Types $types)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\types  $types
     * @return \Illuminate\Http\Response
     */
    public function edit(types $types,$id)
    {
        $type= Types::find($id);
        return view('admin2.type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\types  $types
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeRequest $request, Types $types,$id)
    {
        $type= types::find($id);
        $data = $request->validated();
        $data['image'] = $type->image;
        if ($request->hasFile('image')) {
            $image = ImageFacade::uploadImage($data['image']);
            $data['image'] = $image['image'];
        }
        $data['title']  = [
            'en' => $data['title_en'],
            'ar' => $data['title_ar']
        ];

        $data['details'] = [
            'en' => $data['details_en'],
            'ar' => $data['details_ar']
        ];
        $data['type'] = str_contains(Route::current()->getName(),'heavy')?'heavy':(str_contains(Route::current()->getName(),'light')?'light':'introduction');

        $update = $type->update($data);
        toastr()->success(trans('message.successCreate'));

        return redirect()->route(str_contains(Route::current()->getName(),'heavy')?'transport-heavy.index':(str_contains(Route::current()->getName(),'transport-light.index')?'light':'introduction.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\types  $types
     * @return \Illuminate\Http\Response
     */

    public function destroy(Types $types,$id)
    {
        $type= Types::find($id);
        $isDeleted = $type->delete();
        return redirect()->route(str_contains(Route::current()->getName(),'heavy')?'transport-heavy.index':(str_contains(Route::current()->getName(),'transport-light.index')?'light':'introduction.index'));
    }

    public function delete()
    {
        $type_data = str_contains(Route::current()->uri(),'heavy')
            ?'heavy'
            :(str_contains(Route::current()->uri(),'light')?'light':'introduction');
//        dd(Route::current()->uri());
        $types = Types::onlyTrashed()->where("type", $type_data)->paginate(15);

        return view('admin2.type.deleted',compact('types'));
    }


    public function restore($id){
        Types::withTrashed()->find($id)->restore();
        return redirect()->back();

    }


}
