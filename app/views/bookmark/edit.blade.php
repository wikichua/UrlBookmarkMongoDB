@section('content')
{{ Form::open(array('route'=> array('bookmark.update', $bookmark->_id),'method'=>'put')) }}
{{ Form::hidden('_id', $bookmark->_id) }}
	<div>
		<ul>
			<li>{{ Form::text('subject', Input::old('subject', $bookmark->subject), array('placeholder'=>'Subject')) }}</li>
			<li>{{ Form::text('content', Input::old('content', $bookmark->content), array('placeholder'=>'URL')) }}</li>
			<li>{{ Form::textarea('description', Input::old('description', $bookmark->description), array('placeholder'=>'Description')) }}</li>
			<li>{{ Form::select('rate',[0,1,2,3,4,5], Input::old('description', $bookmark->description), array('placeholder'=>'Description')) }}</li>
			<li>{{ Form::submit('Save') }} {{ HTML::linkRoute('bookmark.index', '<< BACK') }}</li>
		</ul>
	</div>
{{ Form::close() }}
@stop