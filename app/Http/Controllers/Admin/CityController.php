<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\City;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CityController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = City::class;
    }

    public function index()
    {
        abort_if(Gate::denies('city_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.city.index');
    }

    public function create()
    {
        abort_if(Gate::denies('city_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.city.create');
    }

    public function edit(City $city)
    {
        abort_if(Gate::denies('city_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.city.edit', compact('city'));
    }

    public function show(City $city)
    {
        abort_if(Gate::denies('city_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $city->load('state', 'team');

        return view('admin.city.show', compact('city'));
    }
}
