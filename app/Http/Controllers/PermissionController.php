<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
{
    $permissions = Permission::all();
    return view('permissions.index', compact('permissions'));
}
public function create()
{
    return view('permissions.create');
}

public function store(Request $request)
{
    $request->validate([
        'control' => 'required|string|max:255',
        'function' => 'required|string|max:255',
        'title' => 'required|string|max:255',
    ]);

    Permission::create($request->all());
    return redirect()->route('permissions.index')->with('success', 'Permission created successfully.');
}

public function managePermissions(Group $group)
{
    $groups = Group::all(); // استرجاع جميع المجموعات
    $permissions = Permission::all(); // استرجاع جميع الصلاحيات

    return view('groups.permissions', compact('groups', 'permissions', 'group'));
}

public function updatePermissions(Request $request)
{
    try {
        $request->validate([
            'permissions' => 'required|array',
            'groups' => 'required|array',
        ]);

        $groups = Group::find($request->groups);
        $permissions = Permission::find($request->permissions);

        foreach ($groups as $group) {
            $group->permissions()->sync($permissions);
        }

        return redirect()->route('groupspermissions')->with('success', 'Permissions updated successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
    }
}

}
