@extends('layouts.admin')

<!-- index body start -->
@section('content')

<!-- Container-fluid starts-->
<div class="page-body">
    <!-- All User Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Attributes</h5>
                            <form class="d-inline-flex">
                                <a href="add-new-category.html" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive category-table">
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Value</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($attributes as $attribute)
                                    <tr>
                                        <td>{{ $attribute->name }}</td>
                                        <td>{{ $attribute->value }}</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('admin.attribute.edit', $attribute) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.attribute.delete', $attribute->id) }}" >
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All User Table Ends-->

    <div class="container-fluid">
        <!-- footer start-->
        <footer class="footer">
            <div class="footer-copyright text-center">
                <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
            </div>
        </footer>
        <!-- footer end-->
    </div>
</div>
<!-- Container-fluid end -->
@endsection
<!-- index body end -->

<!-- Page Body End -->
 