@if(Session::has('message'))
<center>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  {{Session::get('message')}}
</div></center>

@endif

@include('alerts.request')