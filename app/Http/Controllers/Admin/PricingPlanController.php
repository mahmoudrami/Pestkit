<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;

class PricingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = PricingPlan::latest('id')->get();
        return view('admins.pricingplan.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.pricingplan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'title' => 'required',
            'features' => 'required',
        ]);

        $data = $request->except('_token');

        PricingPlan::create([
            'name' => $request->name,
            'price' => $request->price,
            'title' => $request->title,
            'features' => json_encode($request->features,JSON_UNESCAPED_UNICODE),
            'disadvantages' => json_encode($request->disadvantages,JSON_UNESCAPED_UNICODE),
        ]);

        return redirect()->route('admin.pricingPlan.index')
        ->with('msg', 'Add Project Successfully')->with('type', 'successs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = PricingPlan::find($id);
        return count(json_decode($item->features));
        // dd($item->features);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return 4;
        $item = PricingPlan::findOrFail($id);
        return view('admins.pricingplan.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PricingPlan $pricingPlan)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'title' => 'required',
            'features' => 'required',
        ]);

        $features = [];
        $disadvantages = [];
        foreach($request->features as $one){
            if($one != null){
                array_push($features, $one);
            }
        }

        foreach($request->disadvantages as $one){
            if($one != null){
                array_push($disadvantages, $one);
            }
        }

        $pricingPlan->update([
            'name' => $request->name,
            'price' => $request->price,
            'title' => $request->title,
            'features' => json_encode($features,JSON_UNESCAPED_UNICODE),
            'disadvantages' => json_encode($disadvantages,JSON_UNESCAPED_UNICODE),
        ]);

        return redirect()->route('admin.pricingPlan.index')
        ->with('msg', 'Updated Project Successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PricingPlan $pricingPlan)
    {
        $pricingPlan->delete();
        return redirect()->route('admin.pricingPlan.index')
        ->with('msg', 'Deleted Project Successfully')->with('type', 'danger');
    }
}
