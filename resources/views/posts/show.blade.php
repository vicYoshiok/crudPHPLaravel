

<x-layout :meta-title="$post-> posts1" meta-description="blog description" :sum="2+2">
    <h1>{{$post-> posts1}}</h1>
    <p>{{$post-> description}}</p>
    <a href="{{route('posts.index')}}">back</a>
</x-layout> 