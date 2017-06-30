@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">首页</div>

                <div class="panel-body">
                    @foreach ($articles as $article)
                        <div>
                            <img src="{{ $article['img'] }}" alt="" href="">
                            <a>{{ $article['title'] }}</a>
                            {{ $article['created_at'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
