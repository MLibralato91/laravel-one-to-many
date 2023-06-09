@extends('layouts.admin')
@section('content')
    <div class="container">


        <h1>Modifica il progetto</h1>
        @if ($errors->any())
            <div class="alert alert-danger mt-2">
                @error('title')
                    <p>*{{ $message }}</p>
                @enderror

                @error('image')
                    <p>*{{ $message }}</p>
                @enderror

                @error('description')
                    <p>*{{ $message }}</p>
                @enderror


            </div>
        @endif

        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" required maxlength="150"
                    minlength="3" value="{{ $project['title'] }}">
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image"
                    value="{{ old('image', $project->image) }}">
            </div>
            <select class="form-select" aria-label="Default select example" name='type_id' id='type_id'>
                <option selected>Seleziona la tecnologia</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach

            </select>
            <div class="mb-3">
                <label for="description">Body</label>
                <textarea name="description" id="description" rows="10" class="form-control">{{ $project['description'] }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Modifica</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
    </div>
@endsection
