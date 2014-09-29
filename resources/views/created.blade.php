@extends('master')

@section('user-control')
<p>Your Short-Lnk:</p>
<input type="text" class="url-input" readonly="readonly" value="{{ $link->getShortLink() }}">
<p><a href="/">Make another?</a></p>
@stop