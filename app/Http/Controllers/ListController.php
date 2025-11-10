<?php

namespace App\Http\Controllers;

use App\Models\InventoryItem;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ListController extends Controller
{
    public function index(Request $request):Response{

        $items = InventoryItem::all();

        return Inertia::render('inventory/List',[
            'items' => $items
        ]);
    }
}
