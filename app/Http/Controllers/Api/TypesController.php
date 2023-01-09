<?php

namespace App\Http\Controllers\Api;

use App\Facades\ImageFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Http\Resources\TypeResource;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use function redirect;
use function toastr;
use function trans;
use function view;

class TypesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        App::setLocale($request->header("lang") ?? "en");
        $type_data = str_contains($request->url(),'heavy')
            ?'heavy'
            :(str_contains($request->url(),'light')?'light':'introduction');
        $types = Types::where("type", $type_data)->paginate(15);

        return custom_response(true, 'Success',TypeResource::collection($types));

    }


}
