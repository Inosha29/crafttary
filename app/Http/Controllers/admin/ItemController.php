<?php
  
namespace App\Http\Controllers\admin;
  
use App\item;
use Illuminate\Http\Request;
  
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::latest()->paginate(5);
  
        return view('admin.items.index',compact('items'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.items.create');
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
         
            'name' => 'required',
            'category' => 'required',
            'unit_price' => 'required',
            'available_quantity'  => 'required',
            'restock_level'  => 'required',
            'details' => 'required',
        ]);
  
        Item::create($request->all());
   
        return redirect()->route('admin.items.index')
                        ->with('success','item created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('admin.items.show',compact('item'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('admin.items.edit',compact('item'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            
            'name' => 'required',
            'category' => 'required',
            'unit_price' => 'required',
            'available_quantity'  => 'required',
            'restock_level'  => 'required',
            'details' => 'required',
        ]);
  
        $item->update($request->all());
  
        return redirect()->route('admin.items.index')
                        ->with('success','Item updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
  
        return redirect()->route('admin.items.index')
                        ->with('success','Item deleted successfully');
    }
}
