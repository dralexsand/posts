<h2>Posts</h2>
<hr>

<h3>{{ $config['variable'] }}</h3>

<hr>
@forelse($posts as $post)
    <h4>{{ $loop->iteration }} {{ $post->title }}</h4>
@empty
    <h4>No data</h4>
@endforelse
