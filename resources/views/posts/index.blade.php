
<x-layout meta-title="blog title" meta-description="blog description" :sum="2+2">


    <h1>inicio blog</h1>  
    <a href="{{route('posts.create')}}">create new post</a>
    @foreach ($post as $post)
        <div style="display:flex; align-items:baseline">
            <h1>
                <a href="{{route('posts.show', $post->id)}}">
                {{ $post->posts1 }}
                </a>
            </h1>&nbsp;
            <!--   ruta a la carpeta de post pasando la variable post como parametro para que la reciba -->
            <a href="{{route('posts.edit', $post)}}">Edit   </a> &nbsp;
            <br/>
            <form action="{{route('posts.destroy', $post)}}", method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" >Eliminar </button>
            </form>
        </div>
    @endforeach
    </x-layout>  