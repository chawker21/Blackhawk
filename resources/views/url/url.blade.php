

@foreach($urls as $url)
   <li> <a href="http:\\www.{{$url->url}}">www.{{$url->url}}</a></li>
    @endforeach
{{ $urls->links() }}