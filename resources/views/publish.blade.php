@extends('layout')

@section('content')
<div class="container-fluid p-3">
    <h1 class="text-light">PUBLISH A GAME!!!</h1>

    <form method="POST" action="/publish" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title" class="form-control my-2" id="i_title">
        <input type="text" name="tags" placeholder="Tags" class="form-control my-2">
        <input type="text" name="creator" placeholder="Creator(s)" class="form-control my-2">
        <input type="email" name="email" placeholder="Support email" class="form-control my-2">
        <input type="text" name="genre" placeholder="Genre" class="form-control my-2">
        <input type="text" name="short_description" placeholder="Short description" class="form-control my-2">
        <textarea name="description" placeholder="Description" class="form-control my-2" id="i_description"></textarea>

        <label class="text-light">Cover</label>
        <input type="file" name="cover" class="form-control my-2" id="i_cover" accept="image/*">
        <label class="text-light">Image 1</label>
        <input type="file" name="pic1" class="form-control my-2" accept="image/*">
        <label class="text-light">Image 2</label>
        <input type="file" name="pic2" class="form-control my-2" accept="image/*">
        <label class="text-light">Image 3</label>
        <input type="file" name="pic3" class="form-control my-2" accept="image/*">
        <label class="text-light">Image 4</label>
        <input type="file" name="pic4" class="form-control my-2" accept="image/*">

        <button type="button" class="btn btn-secondary mt-3" onclick="showPreview()">Preview</button>
        <button type="submit" class="btn btn-primary mt-3">Publish!</button>
    </form>

    <!-- Preview section, hidden by default -->
    <div id="preview" class="d-none mt-5 border-top pt-4">
        <h2 class="text-warning">PREVIEW</h2>
        <div class="container-fluid pt-3">
            <h1 class="text-light" id="prev_title"></h1>
            <div class="text-center">
                <img id="prev_cover" src="" alt="Cover" class="w-100 p-5" style="max-width: 1000px; display:none;">
            </div>
            <p class="text-light" id="prev_description"></p>
        </div>
    </div>

    <script>
    function showPreview() {
        // Show text fields
        document.getElementById('prev_title').textContent = document.getElementById('i_title').value;
        document.getElementById('prev_description').textContent = document.getElementById('i_description').value;

        // Show cover image using FileReader (reads file locally without uploading)
        const coverInput = document.getElementById('i_cover');
        if(coverInput.files && coverInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.getElementById('prev_cover');
                img.src = e.target.result;
                img.style.display = 'block';
            };
            reader.readAsDataURL(coverInput.files[0]);
        }

        // Scroll down to preview
        document.getElementById('preview').classList.remove('d-none');
        document.getElementById('preview').scrollIntoView({ behavior: 'smooth' });
    }
    </script>
</div>
@endsection