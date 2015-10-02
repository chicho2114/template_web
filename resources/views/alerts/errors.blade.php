@if(Session::has('message-error'))
<center>
<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  {{Session::get('message-error')}}
</div></center>

@endif

@include('alerts.request')