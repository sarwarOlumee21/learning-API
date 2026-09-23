<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use App\Events\ChirpCreated;
use App\Events\UserRegistered;
use App\Models\resident;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'http://localhost:8001/api/v1/data';
        $apiKey = config('api.key');

        $response = Http::withHeaders([
            'X-API-KEY' => $apiKey,
            'API_KEY' => $apiKey,
        ])->get($url, [
            'api_key' => $apiKey,
        ]);

        if (! $response->successful()) {
            return dd([
                'message' => 'Upstream API request failed',
                'status' => $response->status(),
                'body' => $response->body(),
                'headers' => $response->headers(),
            ]);
        }

        $payload = $response->json();
        $users = data_get($payload, 'data', []);

        return view('welcome', ['users' => $users]);
    }
    public function resident()
    {

        return view('resident');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\RedirectResponse
     */

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name'     => 'required|string|max:255',
        'LastName' => 'required|string|max:255',
        'email'    => 'nullable|email|max:255',
        'note'     => 'nullable|string|max:1000',
        'phone'    => 'required|string|max:20',
    ]);

    $user = Resident::create($validatedData);

    // Trigger the event
    event(new UserRegistered($user));

    return redirect()->back()->with('success', 'Resident data submitted successfully!');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
