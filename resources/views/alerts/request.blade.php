@if(count($errors)>0)
<center>
<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <ul>
  	@foreach($errors->all() as $error)
  		<li>{{$error}}</li>
  	@endforeach
  </ul>
</div></center>

@endif