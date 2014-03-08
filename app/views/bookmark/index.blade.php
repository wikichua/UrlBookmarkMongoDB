@section('content')
	<div>
		<ul>
		<li>Set DB: <a href="{{ route('setdb',array('Mongo')) }}">MongoDB</a> <a href="{{ route('setdb',array('Mysql')) }}">MySQL</a></li>	
		<li><a href="{{ route('bookmark.create') }}">New Bookmark</a></li>	
	@foreach ($bookmarks as $bookmark)
		<li class="items">
			<h1>{{ $bookmark->subject }} (Rating: {{ $bookmark->rate }})</h1>
			<em>{{ $bookmark->content }}</em>
			<p>{{ $bookmark->description }}</p>
			<a href="{{ route('bookmark.show',array($bookmark->_id)) }}">Detail</a>
			<a href="{{ route('bookmark.edit',array($bookmark->_id)) }}">Update</a>
			<a href="{{ route('bookmark.delete',array($bookmark->_id)) }}">Delete</a>
			<div style="margin-top:10px;text-indent: 10px;">Rate Me:
				<a href="{{ route('bookmark.rate',array($bookmark->_id,1)) }}">1</a>
				<a href="{{ route('bookmark.rate',array($bookmark->_id,2)) }}">2</a>
				<a href="{{ route('bookmark.rate',array($bookmark->_id,3)) }}">3</a>
				<a href="{{ route('bookmark.rate',array($bookmark->_id,4)) }}">4</a>
				<a href="{{ route('bookmark.rate',array($bookmark->_id,5)) }}">5</a>
			</div>
		</li>
	@endforeach
		</ul>
	</div>
@stop