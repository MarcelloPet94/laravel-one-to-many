<div class="align_controller">
@include('layouts.admin')
    <div class="container">
    <h1>Crea un nuovo post</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo del post">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="content" name="content"
                    placeholder="Descrizione del prodotto"></textarea>
            </div>
            <div class="space_btn_area">
                 <a href="{{ route('admin.posts.index')}}" class="btnStyl goback">Go back</a>
                <button type="submit" class="btn_funct save_edit_btn">Edit</button>
            </div>  
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>  
</div>    