<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        return view("admin-dashboard.permissions.index", [
            "permissions" => Permission::all()->sortBy("name")
        ]);
    }

    public function create()
    {
        return view("admin-dashboard.permissions.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Permission::create($request->all());
        return redirect()->route('permissions.index');
    }
}
