<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assembly;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AssemblyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('assembly_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.assembly.index');
    }

    public function create()
    {
        abort_if(Gate::denies('assembly_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.assembly.create');
    }

    public function edit(Assembly $assembly)
    {
        abort_if(Gate::denies('assembly_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.assembly.edit', compact('assembly'));
    }

    public function show(Assembly $assembly)
    {
        abort_if(Gate::denies('assembly_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $assembly->load('district');

        return view('admin.assembly.show', compact('assembly'));
    }
}
