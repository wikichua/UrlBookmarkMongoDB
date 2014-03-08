@section('content')
{{ Form::open(array('route'=>'bookmark.store','method'=>'post')) }}
	<div>
		<ul>
			<li>{{ Form::text('subject', Input::old('subject'), array('placeholder'=>'Subject')) }}</li>
			<li>{{ Form::text('content', Input::old('content'), array('placeholder'=>'URL')) }}</li>
			<li>{{ Form::textarea('description', Input::old('description'), array('placeholder'=>'Description')) }}</li>
			<li>{{ Form::submit('Create') }} {{ HTML::linkRoute('bookmark.index', '<< BACK') }}</li>
		</ul>
	</div>
{{ Form::close() }}
@stop