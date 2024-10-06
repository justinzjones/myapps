<div>
    <!-- Very little is needed to make a happy life. - Marcus Antoninus -->
    <li class="sm:px-6 sm:rounded-md px-4 py-4 overflow-hidden bg-white shadow">
        
        <!-- Your post card content  -->
        <h1><a href="/posts/{{ $post['id'] }}">{{ $post['title'] }}</a></h1>
        {!! $post['content'] !!}
        
    </li>

</div>