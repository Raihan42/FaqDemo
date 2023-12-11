<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class CollectionController extends Controller
{
    public function AllCollectionView(Request $request) {

        $collections = Collection::where('shop_id', auth()->user()->id)->get();
   
        return view('collection.collectionview', compact('collections'));
    }
    public function AllCollectionStore(Request $request)
    {
        $collections = new Collection();

        $collections->name = $request->name;
        $collections->description = $request->description;
        $collections->shop_id = auth()->user()->id;
        $collections->status = 1;

        $collections->save();

        return Redirect::tokenRedirect('collections.view');
        
    }
}

    

