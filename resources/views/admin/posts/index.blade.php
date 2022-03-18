<div class="align_controller">
@include('layouts.admin')
    <div class="container">
        <div class="space_btn_area">
            <h2>Lista dei post</h2>
            <a href="{{ route('admin.posts.create')}}" class="btnStyl goback">Create</a>
        </div>           
        <div class="riga ind">
            <ul>
                <li>ID</li>
                <li>Title</li>
                <li>Contenuto</li>
                <li>Slug</li>
                <li>Categoria</li>
                <li>Operation</li>
            </ul>
        </div>
        @foreach ($posts as $post)
            <div class="riga">
                <ul>
                    <li>{{$post->id}}</li>
                    <li>{{$post->title}}</li>
                    <li>{{$post->content}}</li>
                    <li>{{$post->slug}}</li>
                    <li>{{$post->category ? $post->category->name : 'No category'}}</li>
                    <li>
                    <div class="space_btn_area">
                        <a class="btn_funct goback" href="{{ route('admin.posts.show', $post->id) }}">Open</a>
                        <a class="btn_funct goback" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>

                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn_funct delete_btn">x</button>
                        </form>
                    </div>    
                    </li>
                </ul>    
            </div> 
        @endforeach    
    </div>        