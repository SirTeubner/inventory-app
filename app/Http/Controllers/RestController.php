<?php

namespace App\Http\Controllers;

use App\Models\InventoryItem;
use Illuminate\Http\Request;

class RestController extends Controller
{
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        $items = InventoryItem::all();

        $response = [];

        $data = [];

        foreach ($items as $item){
            $data[] = [
                'id' => $item->id,
                'title' => $item->title,
                'inventory_number' => $item->inventory_number,
            ];
        }

        $response['success'] = true;
        $response['items'] = $data;

        return response()->json($response, 200);


    }
}
