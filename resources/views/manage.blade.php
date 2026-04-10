@extends('layout')

@section('content')
<h1>EDIT A GAME!!!</h1>
<form method="POST" action="/manage" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <input type="number" name="id" placeholder="ID of game you want to change" class="form-control">

    <select class="form-select" id="dropdown" onchange="showField(this.value)">
        <option value="">Select field...</option>
        <option value="title">title</option>
        <option value="tags">tags</option>
        <option value="creator">creator(s)</option>
        <option value="email">support email</option>
        <option value="genre">genre</option>
        <option value="short_description">short description</option>
        <option value="description">description</option>
        <option value="cover">cover image</option>
        <option value="pic1">image 1</option>
        <option value="pic2">image 2</option>
        <option value="pic3">image 3</option>
        <option value="pic4">image 4</option>
    </select>

    <div id="field-title" class="field d-none">
        <input type="text" name="title" placeholder="Title" class="form-control">
    </div>
    <div id="field-tags" class="field d-none">
        <input type="text" name="tags" placeholder="Tags" class="form-control">
    </div>
    <div id="field-creator" class="field d-none">
        <input type="text" name="creator" placeholder="Creator(s)" class="form-control">
    </div>
    <div id="field-email" class="field d-none">
        <input type="email" name="email" placeholder="Support Email" class="form-control">
    </div>
    <div id="field-genre" class="field d-none">
        <input type="text" name="genre" placeholder="Genre" class="form-control">
    </div>
    <div id="field-short_description" class="field d-none">
        <input type="text" name="short_description" placeholder="Short Description" class="form-control">
    </div>
    <div id="field-description" class="field d-none">
        <textarea name="description" placeholder="Description" class="form-control"></textarea>
    </div>
    <div id="field-cover" class="field d-none">
        <input type="file" name="cover" class="form-control">
    </div>
    <div id="field-pic1" class="field d-none">
        <input type="file" name="pic1" class="form-control">
    </div>
    <div id="field-pic2" class="field d-none">
        <input type="file" name="pic2" class="form-control">
    </div>
    <div id="field-pic3" class="field d-none">
        <input type="file" name="pic3" class="form-control">
    </div>
    <div id="field-pic4" class="field d-none">
        <input type="file" name="pic4" class="form-control">
    </div>

    <button class="btn btn-primary mt-3">Publish!</button>
</form>

<script>
function showField(value) {
    document.querySelectorAll('.field').forEach(f => f.classList.add('d-none'));
    if(value) {
        document.getElementById('field-' + value).classList.remove('d-none');
    }
}
</script>
@endsection