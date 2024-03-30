<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

class HomeController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $employees=User::all();
        return view('employee.index',compact('employees'));
    }

    public function adminHome()
    {   
        return view('employee.master-home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        User::create($request->all());
        return redirect('/manage-employees');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::findOrFail($id);
        return view('employee.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $user=User::findOrFail($id);
        $user->update($request->all());
        return redirect('/manage-employees');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::whereId($id)->delete();
        return redirect('/manage-employees');
    }
}
