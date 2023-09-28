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
                                    <h5>Product Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Product Name">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Category</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option disabled>--Chosse one--</option>
                                                @foreach ($categories as $category)
                                                   
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Product Image</label>
                                        <div class="dropzone-wrapper" style="width: 150px; border-radius: 50%">
                                            <div class="dropzone-desc">
                                                <i class="ri-upload-2-line"></i>
                                                <p>Choose an image file or drag it here.</p>
                                            </div>
                                            <input type="file" name="image" class="dropzone" onchange="previewImage(event, 'image-preview')" data-bs-original-title="" title="">
                                            <img id="image-preview" src=" " alt="Image Preview" style="display: none; width: 100%;; height: 100%;">
                                        </div>
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

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product
                                            Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" placeholder="Product Price">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Attribute</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100">
                                                <option disabled>Attribute Menu</option>
                                                @foreach ($attributes as $attribute)
                                                    
                                                <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Stock</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" placeholder="Product Stock">

                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Sale</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" placeholder="Product Sale">

                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Sale Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date" placeholder="Sale Date">

                                        </div>
                                    </div>
                                    
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Status</label>
                                        <div class="col-sm-9">
                                            <label class="switch">
                                                <input type="checkbox"><span class="switch-state"></span>
                                            </label>
                                        </div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Description</h5>
                                </div>

                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">title</label>
                                                <div class="col-sm-9">
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" placeholder="Description title">
            
                                                    </div>
                                                </div>
                               
                                            </div>
                                        </div>
                                        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>

                                        <div class="col-12">
                                            <div class="mb-4 row align-items-center">
                                               
                                                <div class="col-sm-12">
                                                    <div class="col-sm-12">
                                                        <textarea id="editor" name="editor" rows="10" cols="80"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <script>
                                            ClassicEditor.create(document.querySelector('#editor'))
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                        
                                    </div>
                                </div>
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
@endsection
