@section('content')
	<div>
		<ul>	
			<li>{{ $bookmark->type }}</li>
			<li>{{ $bookmark->subject }}</li>
			<li>{{ $bookmark->content }}</li>
			<li>{{ $bookmark->description }}</li>
		</ul>
	</div>
@stop