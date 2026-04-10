@extends('layout')

@section('content')
<h1>PUBLISH A GAME!!!</h1>
<form method="POST" action="/publish" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="title">
    <input type="text" name="tags" placeholder="tags">
    <input type="text" name="creator" placeholder="creator(s)">
    <input type="email" name="email" placeholder="support email">
    <input type="text" name="genre" placeholder="genre">
    <input type="text" name="short_description" placeholder="short description">
    <input type="text" name="description" placeholder="description">

    cover
    <input type="file" name="cover">
    pic1
    <input type="file" name="pic1">
    pic2
    <input type="file" name="pic2">
    pic3
    <input type="file" name="pic3">
    pic4
    <input type="file" name="pic4">

    <button class="btn btn-primary">Publish!</button>
</form>
@endsection