@extends('layouts.admin')

<!-- index body start -->
@section('content')

<!-- Page Sidebar Start -->
<div class="page-body">
    <!-- New User start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h5>Edit User</h5>
                                </div>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button">Account</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button">Pernission</button>
                                    </li>
                                </ul>

                                <form class="theme-form theme-form-2 mega-form" enctype="multipart/form-data" method="POST" action="{{ url('admin/user/'. $user->id. '', []) }}">
                                    @csrf
                                    @method('PUT')
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                      
                                            <div class="card-header-1">
                                                <h5>User Information</h5>
                                            </div>

                                            <div class="row">
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-lg-2 col-md-3 mb-0">Full
                                                        Name</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input value="{{$user->name}}" class="form-control" type="text" name="name">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                        Address</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" value="{{$user->email}}"type="email" name="email">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" value="{{$user->password}}" disabled type="password" name="password">
                                                    </div>
                                                </div>

 
                                            </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                        <div class="card-header-1">
                                            <h5>Quyền người dùng</h5>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-md-2 mb-0">Choose One : </label>
                                            <div class="col-md-9">
                                                <div class="radio-section">
                                                    <label>
                                                        <input type="radio" value="1" name="role"  {{$user->role == '1' ? 'checked' :''}} >
                                                        <i></i>
                                                        <span>Admin</span>
                                                    </label>

                                                    <label>
                                                        <input type="radio"value="2" name="role"{{$user->role == '2' ? 'checked' :''}}  />
                                                        <i></i>
                                                        <span>Seller</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio"value="0" name="role"{{$user->role == '0' ? 'checked' :''}}  />
                                                        <i></i>
                                                        <span>User</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                               

                                        <div class="card-header-1">
                                            <h5>Avatar</h5>
                                        </div>
                                 

                                        <div class="dropzone-wrapper" style="width: 150px; border-radius: 50%">
                                            <div class="dropzone-desc">
                                                <i class="ri-upload-2-line"></i>
                                                <p>Choose an image file or drag it here.</p>
                                            </div>
                                            <input type="file" name="image" class="dropzone" onchange="previewImage(event, 'image-preview')" data-bs-original-title="" title="">
                                            <img id="image-preview" src="{{ asset($user->image) }}" alt="Image Preview" style="display: {{$user->image ? 'block' :'none'}}; width: 100%;; height: 100%;">
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
                                        <button class="btn ms-auto theme-bg-color text-white" type="submit" data-bs-original-title="" title="">Update User</button>
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
    <!-- New User End -->

    <!-- footer start -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- footer end -->
</div>
<!-- Page Sidebar End -->
@endsection