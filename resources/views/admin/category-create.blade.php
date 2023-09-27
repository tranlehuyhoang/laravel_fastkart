@extends('layouts.admin')

<!-- index body start -->
@section('content')

<div class="page-body">

    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Category Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" method="POST" action="{{ url('admin/category', []) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control"  style="" type="text" name="category_name" placeholder="Category Name">
                                            @error('category_name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                    </div>
                                
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Category Image</label>
                                        <div class="form-group col-sm-9">
                                            <div class="dropzone-wrapper">
                                                <div class="dropzone-desc">
                                                    <i class="ri-upload-2-line"></i>
                                                    <p>Choose an image file or drag it here.</p>
                                                </div>
                                                <input type="file" name="category_image" class="dropzone" onchange="previewImage(event, 'image-preview')">
                                                <img id="image-preview" src=" " alt="Image Preview" style="display: none;  height: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 form-label-title">Category Icon</label>
                                        <div class="form-group col-sm-9">   
                                            <div class="dropzone-wrapper">
                                                <div class="dropzone-desc">
                                                    <i class="ri-upload-2-line"></i>
                                                    <p>Choose an image file or drag it here.</p>
                                                </div>
                                                <input type="file" name="icon" class="dropzone" onchange="previewImage(event, 'icon-preview')">
                                                <img id="icon-preview" src=" " alt="Icon Preview" style="display: none;   height: 100%  ;">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Slug</label>
                                        <div class="col-sm-9">
                                            <input class="form-control"  type="text" name="slug" placeholder="Slug">
                                            @error('slug')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        </div>
                                    </div>
                                    <button class="btn ms-auto theme-bg-color text-white" data-bs-original-title="" title="">Add Category</button>
                                </form>
                                
                                <script>
                                    function previewImage(event, previewId) {
                                        var input = event.target;
                                        var reader = new FileReader();
                                        reader.onload = function () {
                                            var preview = document.getElementById(previewId);
                                            preview.src = reader.result;
                                            preview.style.display = "block";
                                        };
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                    
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

    <!-- footer Start -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- footer En -->
</div>
<!-- Container-fluid End -->
@endsection
<!-- index body end -->

<!-- Page Body End -->
 