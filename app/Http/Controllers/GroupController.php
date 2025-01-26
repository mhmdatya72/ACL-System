<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\GroupRequest;


class GroupController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::paginate(10);
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupRequest $request)
    {
        $data = $request->validated();
        $data['allow_guest_access'] = $request->allow_guest_access ?? false;
        $data['status'] = $request->status ?? 'active';

        Group::create($data);

        return redirect()->route('groups.index')->with('success', 'تم إنشاء المجموعة بنجاح.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GroupRequest $request, Group $group)
    {
        $group->fill([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'level' => $request->level,
            'allow_guest_access' => $request->allow_guest_access ?? false,
            'status' => $request->status ?? 'active',
        ])->save();

        return redirect()->route('groups.index')->with('success', 'تم تحديث المجموعة بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index')->with('success', 'تم حذف المجموعة بنجاح.');
    }

    /**
     * Display the total number of groups.
     */
    public function total()
    {
        $totalGroups = Group::count();
        return response()->json(['total' => $totalGroups]);
    }
}
