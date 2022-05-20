<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Parliment;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParlimentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('parliment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.parliment.index');
    }

    public function create()
    {
        abort_if(Gate::denies('parliment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.parliment.create');
    }

    public function edit(Parliment $parliment)
    {
        abort_if(Gate::denies('parliment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.parliment.edit', compact('parliment'));
    }

    public function show(Parliment $parliment)
    {
        abort_if(Gate::denies('parliment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parliment->load('district');

        return view('admin.parliment.show', compact('parliment'));
    }
}
