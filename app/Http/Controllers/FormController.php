<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    /**
     * Главная Форма
     */
    public function getForm()
    {
        $response = Http::get('http://localhost:8000/api/get-form');
        $hint = 'Введите данные';
        if ($response->successful()) {
            $responseArr = [
                'responseArr' => json_decode($response->body()),
                'massage' => $hint,
            ];
        }
        
        return view('form', $responseArr);
    }

    /**
     * Отправляет данные на сайт data
     */
    public function saveContact(Request $request)
    {
        $requestApi = $request->all();
        $del = array_shift($requestApi);
        $ApiJson = json_encode($requestApi, true);
        $response = Http::post('http://localhost:8000/api/save-page', [
            $ApiJson,
        ]);
        $hint = 'Данные отправлены. Можете ввести новые';
        if ($response->successful()) {
            if ($response->body()) {
                $responseArr = [
                'responseArr' => json_decode($response->body()),
                'massage' => $hint,
                ];
            }
        }

        return view('form', $responseArr);
    }
}
