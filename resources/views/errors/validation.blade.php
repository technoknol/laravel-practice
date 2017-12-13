@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            {!! $err !!}<br/>
        @endforeach
    </div>
@endif