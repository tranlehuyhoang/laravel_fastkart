@extends('layouts.admin')

<!-- index body start -->
@section('content')
    <!-- Coupon list table starts-->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Coupon List</h5>
                                <div class="right-options">
                                    <ul>
                                        <li>
                                            <a class="btn btn-solid" href="add-new-product.html">Add Coupon</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package coupon-list-table table-hover theme-table"
                                        id="table_id">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span class="form-check user-checkbox m-0 p-0">
                                                        <input class="checkbox_animated checkall" type="checkbox"
                                                            value="">
                                                    </span>
                                                </th>
                                                <th>Title</th>
                                                <th>Code</th>
                                                <th>Discount</th>
                                                <th>Status</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach ($coupons as $coupon)
                                                <tr>
                                                    <td>
                                                        <span class="form-check user-checkbox m-0 p-0">
                                                            <input class="checkbox_animated check-it" type="checkbox"
                                                                value="">
                                                        </span>
                                                    </td>
                                                    <td>{{ $coupon->title }}</td>
                                                    <td>{{ $coupon->code }}</td>
                                                    <td class="theme-color">{{ $coupon->discount }}%</td>
                                                    @if ($coupon->status == '1')
                                                        <td class="menu-status">
                                                            <span class="success">Success</span>
                                                        </td>
                                                    @else
                                                        <td class="menu-status">
                                                            <span class="danger">Restitute</span>
                                                        </td>
                                                    @endif


                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a
                                                                    href="{{ url('admin/coupon/' . $coupon->id . '/edit', []) }}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a
                                                                    href="{{ url('admin/coupon/' . $coupon->id . '/delete', []) }}">
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
                        <!-- Pagination End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- footer start-->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
<!-- index body end -->

<!-- Page Body End -->
