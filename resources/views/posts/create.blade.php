@extends('main')

@section('title', '| create new post')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
				<h1>Create New Post<h1>
					<hr>
				{!! Form::open(array('route'=>'posts.store')) !!}

				{{ Form::label('title','Title:') }}
				{{ Form::text('title', null , array('class' => 'form-control')) }}
				
				{{ Form::label('slug' , 'Slug:') }}
				{{ Form::text('slug' , null , array('class' => 'form-control')) }}

				{{ Form::label('body' , 'Post Body:' , array('style' => 'margin-top:20px;')) }}
				{{ Form::textarea('body' , null , array('class' => 'form-control')) }}

				{{ Form::submit('Create Post' , array('class' => 'btn btn-lg btn-success btn-block' , 'style' => 'margin-top:20px;')) }}

				{!! Form::close() !!}
		</div>
	</div>	

@endsection