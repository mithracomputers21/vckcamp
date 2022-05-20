<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Union;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UnionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('union_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.union.index');
    }

    public function create()
    {
        abort_if(Gate::denies('union_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.union.create');
    }

    public function edit(Union $union)
    {
        abort_if(Gate::denies('union_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.union.edit', compact('union'));
    }

    public function show(Union $union)
    {
        abort_if(Gate::denies('union_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $union->load('district');

        return view('admin.union.show', compact('union'));
    }
}
