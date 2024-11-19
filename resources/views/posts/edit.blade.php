
<x-layout :meta-title="$post-> posts1" meta-description="blog description" :sum="2+2">
    <h1>{{$post-> posts1}}</h1>
    <p>{{$post-> description}}</p>
    <h1>editar un post</h1>  
    @dump($post->toArray())
        <form action= "{{route('posts.update', $post)}}" method="POST">
            @csrf @method('PATCH')
            @include('posts.form')
            <button type="submit">save post</button>
        </form>

    <a href="{{route('posts.index')}}">back</a>
</x-layout> 