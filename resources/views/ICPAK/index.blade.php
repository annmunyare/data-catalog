
@extends('layout')

<div class = "container">
@section('content')

<p class="font-weight-bold "  >ICPAK Discussions</p>
   <table class="table table-condensed table-striped table-bordered table-hover  ">
   <tr>
   
   <th> Discussion</th>
 
   <th colspan = '1'>Actions</th>
   </tr>
   @foreach ($obj as $group)


   <tr>
 
   <td>{{$group['groupName']}} </td>

   <td>
   <a href="https://join.kaiza.la/p/v0WMyzizSp-tw0keHVCxYw" class="btn btn-sm btn-info">Join</a>
   </td>
   </tr>
@endforeach
</table>
 
@endsection
</div>