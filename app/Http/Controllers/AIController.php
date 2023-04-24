<?php

namespace App\Http\Controllers;

use App\Models\AI;
use App\Http\Requests\StoreAIRequest;
use App\Http\Requests\UpdateAIRequest;

class AIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ai.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AI $aI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AI $aI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAIRequest $request, AI $aI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AI $aI)
    {
        //
    }

    public function testAPIConnection()
    {
        $key = $_ENV['OPENAI_KEY'];
        $url = 'https://api.openai.com/v1/engines/davinci-codex/completions';
        $data = array(
            'prompt' => 'Hello, ',
            'max_tokens' => 5,
            'temperature' => 0.5,
            'n' => 1,
        );

        $data_string = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Bearer $key",
        ));

        $result = curl_exec($ch);

        curl_close($ch);

        echo $result;

        /*return view('admin.ai.api-test', [
            'result' => $result
        ]);*/
    }

    public function TestAPI()
    {
        $key = $_ENV['OPENAI_KEY'];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.openai.com/v1/chat/completions',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            /*CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "Authorization: Bearer $key",
            ),*/
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer $key",
            ),
            CURLOPT_POSTFIELDS =>'{
            "model": "gpt-3.5-turbo",
            "messages": [
                {
                    "role": "system",
                    "content": "Your name is AICMS. You are an assistant for a coding bootcamp website. When answering try to be funny."
                },
                {
                    "role": "user",
                    "content": "How do I learn the LAMP tech stack?"
                }
            ]
}',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
