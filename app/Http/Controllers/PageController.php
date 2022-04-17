<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    /**
     * Котроллер отображения страницы
     */
    public function getPage(Request $request)
    {
        $requestApi = [
            'id' => $request->page,
        ];
        $ApiJson = json_encode($requestApi, true);
        $response = Http::post('http://localhost:8000/api/get-page', [
            $ApiJson,
        ]);
        if ($response->successful()) {
            $responseArr = [
                'responseArr' => json_decode($response->body(), true),
                'massage' => 'test',
            ];
        }
        return view('page', $responseArr);
    }
}
