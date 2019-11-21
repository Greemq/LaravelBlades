@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::check())
    <div class="col-md-6 justify-content-center">
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок:</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="text">Текст:</label>
                <textarea name="text" id="" rows="3" class="form-control"></textarea>
            </div>

            <button class="btn btn-success" type="submit">create</button>
        </form>

    @else
        please, log in
    @endif
    </div>
@endsection

