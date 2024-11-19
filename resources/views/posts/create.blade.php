
<x-layout meta-title="blog title" meta-description="blog description" :sum="2+2">
   @dump($errors->all())
        @foreach ( $errors->all() as $error )
            <p>{{ $error }}</p>
        @endforeach
    <h1>crear un post</h1>  
    @dump($post->toArray())
        <form action= "{{route('posts.store')}}" method="POST">
            @csrf
           @include('posts.form')
            <button type="submit">save post</button>
        </form>
    </x-layout>   