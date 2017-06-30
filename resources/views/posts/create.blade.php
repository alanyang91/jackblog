@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>创建文章</h1>
        <hr>
        <form action="{{ action('PostsController@store') }}" method="post">
            <div class="form-group">
                <label for="title">标题</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">内容</label>
                <textarea class="form-control" id="body" name="body" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">提交</button>
        </form>
    </div>
@endsection