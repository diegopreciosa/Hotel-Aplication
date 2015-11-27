<div class="row">
	<div class="col-lg-4"></div>
	{!! HTML::image('img/banner.jpg','Responsive image',array('class' => 'img-responsive','class' => 'img-thumbnail')) !!}
</div>	


<div class="navbar">
	<div class="navbar-inner">
		<ul class="nav nav-pills">
			
			<li>
				<a href="{!! URL::route('insert') !!}">ADD HOTEL</a>
			</li>
			<li>
				<a href="{!! URL::route('search') !!}">SEARCH</a>
			</li>
			
		</ul>
	</div>
</div>
