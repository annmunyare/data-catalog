<?php

namespace App\Http\Controllers;
use App\Catalog;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DB;

class ICPAKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $catalogs = Catalog::all();
    //     return view('catalogs.index', compact('catalogs'));
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
     * @return \Illuminate\Http\Response
     */


    public function getState()
    {
      
        // 'https://kms.kaiza.la/v1/groups/0b9e0148-1006-47c5-b371-5bc80e1aa098/subGroups'

        $client = new Client();
        $response = $client->request('GET', 'https://kms.kaiza.la/v1/groups/', [
            'headers' => [
            'Accept' => 'application/json',
            'Content-type' => 'application/json',
            'accessToken' =>'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cm46bWljcm9zb2Z0OmNyZWRlbnRpYWxzIjoie1wicGhvbmVOdW1iZXJcIjpcIisyNTQ3MTM2MjQyNTRcIixcImNJZFwiOlwiXCIsXCJ0ZXN0U2VuZGVyXCI6XCJmYWxzZVwiLFwiYXBwTmFtZVwiOlwiY29tLm1pY3Jvc29mdC5tb2JpbGUua2FpemFsYWFwaVwiLFwiYXBwbGljYXRpb25JZFwiOlwiZmE3ZGJmOWUtMTA4YS00ZWQwLTliNzYtM2M0NTg5NzU0NDY0XCIsXCJwZXJtaXNzaW9uc1wiOlwiMi4zMDozLjMwOjQuMjo2LjIyOjUuNDo5LjI6MTUuMzA6MTQuMzA6MTkuMzA6MjQuMzBcIixcImFwcGxpY2F0aW9uVHlwZVwiOjMsXCJkYXRhXCI6XCJ7XFxcIkFwcE5hbWVcXFwiOlxcXCJhbm5Db25uZWN0b3IyXFxcIn1cIn0iLCJ1aWQiOiJNb2JpbGVBcHBzU2VydmljZToyNDVhYjIzZC0xZGMwLTQyZGYtYmE2ZC1kYzYwMTZlZGY4NjciLCJ2ZXIiOiIyIiwibmJmIjoxNTQxNDEzOTgxLCJleHAiOjE1NDE1MDAzODEsImlhdCI6MTU0MTQxMzk4MSwiaXNzIjoidXJuOm1pY3Jvc29mdDp3aW5kb3dzLWF6dXJlOnp1bW8iLCJhdWQiOiJ1cm46bWljcm9zb2Z0OndpbmRvd3MtYXp1cmU6enVtbyJ9.RNh1U-pBs8zOV-TeTscTHjhfT7GZq7Nrs085irCFVuY'
        ]]);
        $body = $response->getBody();
        $content =$body->getContents();
        $arr = json_decode($content,TRUE);
    //    return $content;
    // return $arr['groupName'];
        foreach($arr as $obj )
        {
            
            // return $obj;
            
         
         }
     

       
     
        return view('ICPAK.index', compact('obj'));
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
        $catalog = Catalog::find($id);
        $catalogs = Catalog::all();
        return view('catalogs.show', compact('catalog', 'catalogs'));
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
