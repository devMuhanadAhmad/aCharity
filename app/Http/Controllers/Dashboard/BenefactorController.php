<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Benefactor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Intl\Countries;
class BenefactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = Request();
        $benefactors = User::with('benefactor')->where('type','user')->latest()->simplePaginate(15);
        return view('dashboard.benefactor.index', compact('benefactors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $benefactor=User::with('benefactor')->where('type','user')->findOrFail($id);
        return view('dashboard.benefactor.edit', compact('benefactor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $benefactor=User::where('type','user')->findOrFail($id);
        $benefactor_detules=Benefactor::where('user_id',$id)->limit(1);
        $request->validate([
            'email' => 'required|email',
            'name'=>'required|string|max:255|min:3',
            'country'=>'required',
            'phone'=>'required',
            'password' => [
                'required',
                'min:6',

            ],
        ]);
        $benefactor->update([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => Hash::make($request->post('password')),
            'type'=>'user'

        ]);

        $benefactor_detules->update([
            'user_id'=>$benefactor->id,
            'country' => $request->post('country'),
            'phone'=>$request->post('phone'),
        ]);
            return redirect()->route('benefactor.index')->with('success', __('operation accomplished successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $benefactor=User::findOrFail($id);
        $benefactor->delete();
        return redirect()->route('benefactor.index')->with('success', __('The deletion was completed successfully'));

    }

}
