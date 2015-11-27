@foreach($searchhotel as $hotel)

<div class="row">

	<i class="glyphicon glyphicon-home"></i>
	<h4>{!! $hotel->name !!}</h4>
	<br>
	<h5> {!! $hotel->address_line1 !!}
	<br>
	{!! $hotel->address_line2 !!}
	<br>
	</h5>

</div>
@endforeach

