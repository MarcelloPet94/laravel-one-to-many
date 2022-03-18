<div class="align_controller">
@include('layouts.admin')
    <div class="container">
        <div class="space_btn_area">
            <h2>Post ID: {{$post->id}}</h2>
        </div>         
        <div class="riga ind">
            <ul>
                <li>ID</li>
                <li>Title</li>
                <li>Contenuto</li>
                <li>Slug</li>
                <li>Operation</li>
            </ul>
        </div>
            <div class="riga">
                <ul>
                    <li>{{$post->id}}</li>
                    <li>{{$post->title}}</li>
                    <li>{{$post->content}}</li>
                    <li>{{$post->slug}}</li>
                    <li>
                        <a  href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                    </li>
                </ul>    
            </div> 
            <div class="space_btn_area">
                <a href="{{ route('admin.posts.index')}}" class="btnStyl goback">Go back</a>
            </div>            
    </div>  
</div>    

         