@extends('master')

@section('user-control')
<form method="post" action="/">
	<input type="text" id="link-input-box" class="url-input" name="url" placeholder="Link to shorten...">
	<button type="submit" class="url-submit">enshorten</button>
</form>
@stop