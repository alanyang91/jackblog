<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="http://v4-alpha.getbootstrap.com/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/blog.css" rel="stylesheet">

</head>

<body>

@include('layouts.nav')
@include('layouts.header');

<div class="container">
    <div class="row">
        @yield('content')
        @include('layouts.siderbar')
    </div>
</div>