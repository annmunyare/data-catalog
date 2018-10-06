<?php

namespace App\Http\Controllers;
use App\Catalog;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DB;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::all();
        return view('catalogs.index', compact('catalogs'));
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
        
       // Guzzle is a simple PHP HTTP client that provide an easy method of creating calls and integration with web services.
        $client = new Client(['base_uri' => 'http://api.worldbank.org/v2/datacatalog?format=json']);  
        $response = $client->request('GET'); 
        $body = $response->getBody();
        $content =$body->getContents();
        $arr = json_decode($content,TRUE);
       
        foreach($arr['datacatalog'] as $obj )
        {
            foreach($obj['metatype'] as $value)
            { 
                //Laravel str_slug function help us to convert the keys so as to match
                // with our database table column names and finally we insert our array into the table. 
                $insertArr[str_slug($value['id'],'_')] = $value['value'];
            }
                   
            DB::table('catalogs')->insert($insertArr);
            $insertArr = [];
      
        }

        $catalogs = Catalog::all();
     
        return view('catalogs.index', compact('catalogs'));
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
