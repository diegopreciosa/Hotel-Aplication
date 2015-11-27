@extends('layouts.main')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}" />

<form class="form-inline">
	<div class="col-lg-3">
		<div class="form-group">
			{!! Form::label('City') !!}
			<select class="form-control input-sm" name="city" id="city" >
				<option value="" disabled selected>Select a city</option>
				@foreach($cities as $city)
				<option value="{!! $city->id !!}">{!! $city->name !!}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="form-group">

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<input type="text" id="search-input" class="form-control" placeholder="Search" onkeydown="down()" onkeyup="up()" />

		</div>
	</div>

</form>
<br><br><br>
<div class="col-lg-12" id="search-results">

</div>

@endsection
