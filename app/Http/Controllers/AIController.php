<?php

namespace App\Http\Controllers;

use App\Models\AI;
use App\Http\Requests\StoreAIRequest;
use App\Http\Requests\UpdateAIRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class AIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ai = DB::table('a_i_s')->orderBy('id', 'desc')->paginate(10);
        return view('admin.ai.index', [
            'ai' => $ai
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAIRequest $request)
    {
        $ai = new AI;
        $ai->question = $request->question;
        $ai->system = $request->system;
        $ai->response = $request->result;

        $ai->save();
        return redirect('/ai');


        /*return view('admin.ai.api-test', [
            'system' => $system,
            'question' => $question,
            'result' => $result
        ]);*/
    }

    public function storePost(StorePostRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->body;

        $post->save();
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ai = AI::findOrFail($id);
        return view('admin.ai.show', [
            'ai' => $ai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AI $aI)
    {

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
    public function destroy($id)
    {
        AI::findOrFail($id)->delete();

        return redirect('/ai');
    }

    public function aiResponse(StoreAIRequest $request)
    {
        $system = $request->system;
        $question = $request->question;
        $system = $this->removeSpecialChars($system);
        $question = $this->removeSpecialChars($question);

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
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer $key",
            ),
            CURLOPT_POSTFIELDS =>'{
            "model": "gpt-3.5-turbo",
            "messages": [
                    {
                        "role": "system",
                        "content": "' . $system . '"
                    },
                    {
                        "role": "user",
                        "content": "' . $question . '"
                    }
                ],
            "max_tokens": 350
            }',
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $json = json_decode($response, false);
        $choices = json_encode($json->choices);
        $json2 = json_decode($choices, false);

        $result = $json2[0]->message->content;

        return view('admin.ai.response', [
            'system' => $system,
            'question' => $question,
            'result' => $result
        ]);
    }

    public function removeSpecialChars($string){
        return preg_replace('/[^A-Za-z0-9\-]/', ' ', $string);
    }
}
