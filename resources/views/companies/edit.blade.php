@extends('layouts.app')

@section('content')
	<form action="{{ route('companies.update', [$company->id]) }}" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		<div class="form-group">
			<label for="company-nane">Company name: <span class="required">*</span></label>
			<input  type="text"
					placeholder="Enter name"
					id="company-name"
					required
					 name="name"
					 class="form-control"
					 value="{{ $company->name }}"
			/>	
		</div>

		<div class="form-group">
			<label for="company-name">Company description: <span class="required">*</span></label>
			<textarea
					placeholder="Enter description"
					id="company-content"
					required
					name="description"
					class="form-control text-left"
					rows="5" >
			{{ $company->description }} </textarea>	
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Submit" name="submit" />
		</div>
	</form>

@stop