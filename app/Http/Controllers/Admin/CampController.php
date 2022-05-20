<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Camp;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CampController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('camp_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.camp.index');
    }

    public function create()
    {
        abort_if(Gate::denies('camp_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.camp.create');
    }

    public function edit(Camp $camp)
    {
        abort_if(Gate::denies('camp_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.camp.edit', compact('camp'));
    }

    public function show(Camp $camp)
    {
        abort_if(Gate::denies('camp_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $camp->load('state', 'district', 'blockName', 'panchayatName', 'habitationName', 'legislativeAssembly', 'parliamentAssembly', 'members', 'owner');

        return view('admin.camp.show', compact('camp'));
    }
}
