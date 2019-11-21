@extends('layouts.app')

@section('content')
    <h2>{{$post->title}}</h2>

    <div>{{$post->text}}</div>
    <br>
    <div class="font-weight-bold float-left">{{$post->userName->name}}</div>
    <div class="float-right">{{$post->created_at}}</div>

    <br>
    <br>
    @if(\Illuminate\Support\Facades\Auth::check())
        <div class="row">
        <div class="col-md-6">
        <form action="{{route('comment.store')}}" method="post">
            @csrf
            <div class="form-group">
                <textarea name="body" id="" rows="3" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <input type="hidden" class="form-control" name="post_id" value="{{$post->id}}">
            </div>
            <button class="btn btn-success" type="submit">Добавить комментарий</button>
        </form>
        </div></div>
    @endif
    <br>
    @foreach($comments as $c)
        <div class="row">
            <div class="col-md-4">
                <div class="font-weight-bold text-uppercase">{{$c->userName->name}}</div>
                <div class="ml-3">{{$c->body}}</div>
            </div>
            <div class="col-md-2">
                <div class="float-right">{{$c->created_at}}</div>

                @if(\Illuminate\Support\Facades\Auth::id()==$c->author)
                    <form action="{{route('comment.destroy',['id'=>$c->id])}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="btn-danger btn btn-sm float-right">Удалить</button>
                    </form>
                @endif
            </div>
        </div>
    @endforeach
@endsection

