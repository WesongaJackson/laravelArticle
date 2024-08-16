@extends('layouts.app')

@section('title', config('app.name') . ' - Edit Article')

@section('content')
    <div
        style="background-image: url('{{ asset('assets/img/backgrounds/we-are-now-open.jpg') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div>
            <div class="container d-flex justify-content-center align-items-center min-vh-100">
                <div class="row">
                    <div class="col-sm-8 col-md-6 mx-auto">
                        <div class="card rounded rounded-bottom shadow">
                            <div class="card-header p-0">
                                <div class="text-center mx-auto p-3">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/img/branding/planet-logo.svg') }}" alt="Logo"
                                            height="30px">
                                    </a>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('articles.update', $article->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <label for="title"
                                                    class="form-label fw-bolder">{{ __('Title') }}</label>
                                                <input id="title" type="text"
                                                    class="rounded-1 form-control shadow-none rounded-1 @error('title') is-invalid @enderror"
                                                    name="title" value="{{ old('title', $article->title) }}"
                                                    autocomplete="title">

                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="category"
                                                    class="fw-bolder form-label">{{ __('Category') }}</label>
                                                <select id="category"
                                                    class="rounded-1 form-control shadow-none rounded-1 @error('category') is-invalid @enderror"
                                                    name="category_id">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @selected(old('category_id', $article->category_id) == $category->id)>
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>

                                                @error('category')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="tags"
                                                    class="form-label fw-bolder">{{ __('Tags') }}</label>
                                                <div class="form-check">
                                                    @foreach ($tags as $tag)
                                                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                                            id="tag{{ $tag->id }}" class="form-check-input"
                                                            @if ($article->tags->contains($tag->id)) checked @endif>
                                                        <label for="tag{{ $tag->id }}" class="form-check-label">
                                                            {{ $tag->name }}
                                                        </label>
                                                        <br>
                                                    @endforeach
                                                </div>


                                                @error('tags')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="content"
                                                    class="form-label fw-bolder">{{ __('Content') }}</label>
                                                <textarea id="content" class="rounded-1 form-control shadow-none rounded-1 @error('content') is-invalid @enderror"
                                                    name="content" rows="6" cols="10">{{ old('content', $article->content) }}</textarea>

                                                @error('content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Image -->
                                            <div class="mb-3 mt-3">
                                                @if ($article->image)
                                                    <img id="imagePreview" src="{{ asset('storage/' . $article->image) }}"
                                                        alt="Image Preview" style="max-width: 100%;">
                                                @else
                                                    <img id="imagePreview" src="#" alt="Image Preview"
                                                        style="max-width: 100%; display: none;">
                                                @endif
                                            </div>
                                            <div class="mb-3">
                                                <label for="image"
                                                    class="form-label fw-bolder">{{ __('Image') }}</label>


                                                <input type="file" id="image" name="image"
                                                    value="{{ old('image') }}"
                                                    class="form-control @error('image') is-invalid @enderror"
                                                    onchange="previewImage(event)">

                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="rounded-1 btn btn-primary">
                                                    {{ __('Update Article') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function previewImage(event) {
                const image = document.getElementById('image');
                const imagePreview = document.getElementById('imagePreview');

                const reader = new FileReader();
                reader.onload = function() {
                    if (reader.readyState === 2) {
                        imagePreview.src = reader.result;
                        imagePreview.style.display = 'block';
                    }
                }
                if (image.files[0]) {
                    reader.readAsDataURL(image.files[0]);
                }
            }
        </script>
    @endsection
