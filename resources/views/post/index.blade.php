@extends('layouts.app')
@section('content')
    <div class="row">
        @foreach($posts as $p)
            <div class="col-sm-4">
                <div class="card" style="width: 18rem; ">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->title}}</h5>
                        <p class="card-text" style="max-height: 140px;overflow: hidden">{{$p->text}}</p>
                        <a href="{{route('post.show',['id'=>$p->id])}}" class="btn btn-primary">Просмотр</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection