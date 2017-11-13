@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<div class="jumbotron">
				<h1>{{ $company->name }}</h1>
				<p class="lead">{{ $company->description }}</p>
			</div>
		
			@foreach ($company->projects as $project)
				<div class="col-md-4 panel panel-default">
					<h2>{{ $project->name }}</h2>
					<p>{{ $project->description }}</p>
					<p><a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">View Project</a></p>
				</div>
			@endforeach
		</div>
		<div class="col-md-2 col-md-offset-1">
			<div class="sidebar-module">
				<h2>Actions</h2>
				<ol class="list-unstyled">
					<li><a href="{{ route('companies.edit', $company->id) }}">Edit</a></li>
					<li><a href="#" 
						onclick="
							var result = confirm('Are you sure?');
							if (result) {
								event.preventDefault();
								document.getElementById('delete-form').submit();
							}
						"
					>
					Delete</a>
					<form action="{{ route('companies.destroy', $company->id) }}" method="POST" id="delete-form" style="display:none;">
						<input type="hidden" name="_method" value="delete">
						{{ csrf_field() }}
					</form>
					</li>
					<li><a href="">Add new member</a></li>
				</ol>
		</div>
		
	</div>

@stop