{{-- SUCCESS Message --}}

@if (session()->has('success'))
	<div class="alert alert-dismissable alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-label='Close' >
			<span aria-hidden="true">&times;</span>
		</button>
		<strong>{!! session()->get('success') !!}</strong>
	</div>
@endif

{{-- ERROR Message --}}
@if (isset($errors) && count($errors) > 0)
	<div class="alert alert-dismissable alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-label='Close' >
			<span aria-hidden="true">&times;</span>
		</button>
		@foreach ($errors->all() as $error)
			<li><strong>{!! $error !!}</strong></li>
		@endforeach
	</div>
@endif