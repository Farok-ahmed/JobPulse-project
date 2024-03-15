@extends('companyPanel.layout.app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card-header">
                            <h4 class="card-title">Blog Edit</h4>

                        </div>
                        <form action="{{ route('BlogUpdate',$blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body p-4">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Title</label>
                                                <input class="form-control" name="title" type="text" value="{{$blog->title}}"
                                                    id="example-text-input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="vacancy" class="form-label">Excerpt</label>
                                                <input class="form-control" name="excerpt" type="text" value="{{$blog->excerpt}}"
                                                    id="vacancy">
                                            </div>

                                            <div class="mb-3">
                                                <label for="image" class="form-label">Blog Image</label>
                                                <input class="form-control" name="image" type="file" value=""
                                                    id="selectImage">
                                                <img id="preview" src="{{asset('/'.$blog->image.'')}}" alt="your image" class="mt-3 w-7 h-auto"
                                                     />

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class=" form-control" name="description" type="text" value="{{$blog->description}}"id="ckeditor-classic"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
    </div>

    <script>
        selectImage.onchange = evt => {
            preview = document.getElementById('preview');
            preview.style.display = 'block';
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
