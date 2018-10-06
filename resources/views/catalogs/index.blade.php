
@extends('layout')

 <div class = "container">
 @section('content')

<p class="font-weight-bold "  >World Bank Data Catalog</p>
    <table class="table table-condensed table-striped table-bordered table-hover  ">
    <tr>
    <th>#</th>
    <th> Name</th>
    <th>Url</th>
    <th>Type</th>
    <th colspan = '1'>Actions</th>
    </tr>
    @foreach ($catalogs as $catalog)


    <tr>
    <td>{{$catalog->id}} </td>
    <td>{{$catalog->name}} </td>
    <td>{{$catalog->url}} </td>
    <td>{{$catalog->type}} </td>
    <td>
    <a href="/singlecatalog/{{$catalog->id}}" class="btn btn-sm btn-info">See More</a>
    </td>
    </tr>
 @endforeach
 </table>
  
 @endsection
 </div>