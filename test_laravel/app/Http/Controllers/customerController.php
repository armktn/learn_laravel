<?php

namespace App\Http\Controllers;

use App\Models\customerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //GET /customers
    {   
        $data["customers"] = customerModel::all();
        return view('crud',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //POST /customers
    {
        $name = $request->input("name");
        $phone = $request->input("phone");

        $customerModel = new customerModel();

        $customerModel->c_name = $name;
        $customerModel->c_phone = $phone;

        $customerModel->save();
        return Redirect::to("/customers");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //--> customers/id --> customers/3
    {
        $c_data = customerModel::find($id);
        $customers = customerModel::all();

        if($c_data === null){
            return Redirect::to("/customers");
        } else{
            return view("read",compact("c_data"));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) 
    {
        $c_data = customerModel::find($id);
        $customers = customerModel::all();

        if($c_data === null){
            return Redirect::to("/customers");
        } else{
            return view("update",compact("c_data"));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //
    {
        $name = $request -> input("name");
        $phone = $request -> input("phone");

        $customerModelId = customerModel::find($id);

        $customerModelId -> c_name = $name;
        $customerModelId -> c_phone = $phone;

        $customerModelId -> save();

        return Redirect::to("/customers");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customerModelId = customerModel::find($id);

        $customerModelId -> delete();
        
        return Redirect::to("/customers");
    }
}