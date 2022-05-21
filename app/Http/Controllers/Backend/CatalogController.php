<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\User;
use Session;
use Image;
use DB;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category','inventory')->get();
        return view('pages.backend.catalogs.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.backend.catalogs.create');
    }
    public function upload(Request $request){
        $image = $request->file('file');
        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('uploads/product/images'),$avatarName);
        return response()->json(['success'=>$avatarName]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'details'       => 'required',
            'short_desc'    => 'required',
            'price'         => 'required',
            'size'          => 'required',
            'sku'           => 'required',
            'material'      => 'required',
            'quantity'      => 'required',
        ]);
        $request['user_id'] = auth()->user()->id ?? null;
        $inventory = new Inventory;
        $inventory->sku      = $request->sku;
        $inventory->quantity = $request->quantity;
        $inventory->save();

        $catalogs = new Product;
        $catalogs->name           = $request->name;
        $catalogs->images         = implode(',',$request->images);
        $catalogs->details        = $request->details;
        $catalogs->short_desc     = $request->short_desc;
        $catalogs->inventory_id   = $inventory->id;
        $catalogs->price          = $request->price;
        $catalogs->size           = $request->size;
        $catalogs->material       = $request->material;
        $catalogs->save();
        return redirect()->route('admin.catalog.index')->with('message','Catalogs Create Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //

        $product = Product::where('slug',$slug)->first();
        return view('pages.backend.catalogs.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = Product::where('slug',$slug)->with('inventory','category')->first();
        return view('pages.backend.catalogs.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //
        $request->validate([
            'name'          => 'required',
            'details'       => 'required',
            'short_desc'    => 'required',
            'price'         => 'required',
            'size'          => 'required',
            'sku'           => 'required',
            'material'      => 'required',
            'quantity'      => 'required',
            //'image'         => 'required ',
        ]);
        $request['user_id'] = auth()->user()->id ?? null;
        $catalogs = Product::where('slug',$slug)->first();
        $inventory = Inventory::where('id',$catalogs->inventory_id)->first();
        $inventory->sku      = $request->sku;
        $inventory->quantity = $request->quantity;
        $inventory->update();

        $catalogs->name           = $request->name;
        $catalogs->details        = $request->details;
        $catalogs->short_desc     = $request->short_desc;
        $catalogs->inventory_id   = $inventory->id;
        $catalogs->price          = $request->price;
        $catalogs->size           = $request->size;
        $catalogs->material       = $request->material;
        if($request->images){
            $catalogs->images     = implode(',',$request->images);
        }
        $catalogs->update();
        return redirect()->route('admin.catalog.index')->with('message','Catalogs Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalog = Catalog::findorfail($id);
        $catalog->delete();
        Session()->flash('message', 'Delete Catalogs Successfully!');
        return ['status' => 'true'];
    }
}
