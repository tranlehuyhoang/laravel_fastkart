@extends('layouts.admin')

<!-- index body start -->
@section('content')
    <!-- Create Coupon Table start -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Create Coupon</h5>
                                    </div>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button">General</button>
                                        </li>

                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                            <form class="theme-form theme-form-2 mega-form"
                                                action="{{ url('admin/coupon', []) }}" method="POST">
                                                @csrf
                                                <div class="card-header-1">
                                                    <h5>Create Coupon</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-lg-2 col-md-3 mb-0">Coupon
                                                            Title</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="text" name="title"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Coupon
                                                            Code</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="text" name="code"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Discount</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="number" name="discount"
                                                                required>
                                                        </div>
                                                    </div>









                                                    <div class="row align-items-center">
                                                        <label
                                                            class="form-label-title col-lg-2 col-md-3 mb-0">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="form-check user-checkbox ps-0">
                                                                <input class="checkbox_animated check-it" type="checkbox"
                                                                    name="status" value="1" id="flexCheckDefault1">
                                                                <label class="form-label-title col-md-2 mb-0">Enable the
                                                                    Coupon</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-primary" type="submit">Create
                                                                Coupon</button>
                                                        </div>
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
            </div>
        </div>
        <div class="container-fluid">
            <footer class="footer" style="width: 100%;">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Create Coupon Table End -->
@endsection
<!-- index body end -->

<!-- Page Body End -->
