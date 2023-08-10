<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = Request();
        $users = User::where('type','admin')->latest()->simplePaginate(20);
        return view('dashboard.admin.index', compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User();
        return view('dashboard.admin.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(User::where('email',$request->post('email'))->first()){
            return redirect()->back()->with('error', __("Error email last careated"));
        }


        $request->validate([
            'email' => 'required|email',
            'name'=>'required|string|max:255|min:3',
            'password' => [
                'required',
                'min:6',
            ],
        ]);
        User::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => Hash::make($request->post('password')),
            'type'=>'admin',
        ]);

        return redirect()->route('user.index')->with('success', __("Operation accomplished successfully"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('dashboard.admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'email' => 'required|email',
            'name'=>'required|string|max:255|min:3',
            'password' => [
                'required',
                'min:6',
            ],
        ]);
        $user=User::findOrFail($id);
        $user->update([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => Hash::make($request->post('password')),
            'type'=>'admin',
        ]);

        return redirect()->route('user.index')->with('success', __('operation accomplished successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', __('The deletion was completed successfully'));

    }
}
