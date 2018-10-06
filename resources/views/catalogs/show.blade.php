@extends('layout')

 <div class = "container" >
 @section('content')
 <div class="card" style=" margin: 5px;">
  <h5 class="card-header">{{$catalog->name}} ({{$catalog->acronym}}) </h5>
  <div class="card-body">
    
    <p class="card-text"> {{$catalog->description}} <b>Url:</b> {{$catalog->url}}</p> 
    <p class="card-text"><b> Topics:</b> {{$catalog->topics}}  </p> 
    <p class="card-text"><b> Number of Econimies:</b> {{$catalog->numberofeconomies}}  </p> 
    <p class="card-text"><b>Bulk Download:</b> {{$catalog->bulkdownload}}  </p>
     
    <table class="table table-condensed table-striped table-bordered table-hover ">
    <tr>
    <th>Languages Supported</th>
    <th> Periodicity</th>
    <th>Economic Coverage</th>
    <th>Garanulity</th>
    <th>Update Frequency</th>
    <th> Update Schedule</th>
    <th>Last Version Date</th>
    <th>Contact details</th>
    <th >Access Options</th>
    </tr>
    <tr>
    <td>{{$catalog->languagesupported}} </td>
    <td>{{$catalog->periodicity}} </td>
    <td>{{$catalog->economycoverage}} </td>
    <td>{{$catalog->granularity}} </td>
    <td>{{$catalog->updatefrequency}} </td>
    <td>{{$catalog->updateschedule}} </td>
    <td>{{$catalog->lastrevisiondate}} </td>
    <td>{{$catalog->contactdetails}} </td>
    <td>{{$catalog->accessoption}} </td>
    </tr>
 </table>
    <a href="/catalogsindex" class="btn btn-primary">Go Back</a>
  </div>
</div>
  
 @endsection
 </div>