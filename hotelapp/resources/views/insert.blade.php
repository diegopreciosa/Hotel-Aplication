@extends('layouts.main')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}" />

@foreach($errors->all() as $error)
<p class="error">
	{!! $error !!}
</p>

@endforeach
<div class="row">

	<div class="col-lg-4">

		{!! Form::open(array('action'=>'#', 'method' => 'post', 'url' => '/insert', 'id' => 'insert_form')) !!}

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			{!! Form::label('Hotel Name') !!}
			{!! Form::text('name', null,
			array('required',
			'id' => 'name',
			'class'=>'form-control',
			'placeholder'=>'Hotel Name')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Address Line 1') !!}
			{!! Form::text('address_line1', null,
			array('required',
			'id' => 'address_line1',
			'class'=>'form-control',
			'placeholder'=>'Address Line 1')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Address Line 2') !!}
			{!! Form::text('address_line2', null,
			array('required',
			'id' => 'address_line2',
			'class'=>'form-control',
			'placeholder'=>'Address Line 2')) !!}
		</div>

		<div class="form-group">
			{!! Form::label('City') !!}
			<select class="form-control input-sm" name="city" id="city">
				<option value="" disabled selected>Select the city</option>
				@foreach($cities as $city)
				<option value="{!! $city->id !!}">{!! $city->name !!}</option>
				@endforeach
			</select>

		</div>

		<div class="form-group">
			{!! Form::submit('Submit',
			array('class'=>'btn btn-primary','id' => 'btnsubmit')) !!}
		</div>

		{!! Form::close() !!}

	</div>
</div>

@endsection
