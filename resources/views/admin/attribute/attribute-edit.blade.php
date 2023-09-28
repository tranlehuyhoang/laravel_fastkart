@extends('layouts.admin')

<!-- index body start -->
@section('content')

<div class="page-body">

    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-xxl-8 col-lg-10 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Update Attribute</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" method="POST" action="{{ route('admin.attribute.update', $attribute) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0" for="attribute_name">Attribute Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="attribute_name" name="name" placeholder="Attribute Name" value="{{ $attribute->name }}">
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-start">
                                        <label class="col-sm-3 col-form-label form-label-title" for="attribute_value">Attribute Value</label>
                                        <div class="col-sm-9">
                                            <div class="row g-sm-4 g-3">
                                             
                                                    <div class="col-sm-10 col-9">
                                                        <input class="form-control" type="text" name="value" value="{{ $attribute->value }}">
                                                    </div>
                                             
                                       
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn ms-auto theme-bg-color text-white" type="submit">Update Attribute</button>
                                </form>

                                

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
    <!-- footer End -->
</div>
<!-- Container-fluid End -->
@endsection