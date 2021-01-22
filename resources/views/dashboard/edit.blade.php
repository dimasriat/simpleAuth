@extends("layouts.app")

@section("content")
<h2>Edit Profile</h2>
<form method="POST" action="{{ route('dashboard.update') }}">
	@csrf
	@method("PUT")
	<div>
		<label for="name">Name:</label><br />
		<input id="name" type="text" name="name" value="{{ Auth::user()->name }}" />
	</div>
	<input type="submit" name="update" value="update" />
</form>
@if ($errors->any())
@foreach($errors->all() as $error)
<div style="color: red">{{ $error }}</div>
@endforeach
@endif
@endsection