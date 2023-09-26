@extends('layouts.admin')

<!-- index body start -->
@section('content')
<div class="page-body">


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>Products List</h5>
                            <div class="right-options">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">import</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Export</a>
                                    </li>
                                    <li>
                                        <a class="btn btn-solid" href="add-new-product.html">Add Product</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table all-package theme-table table-product" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Product Image</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Current Qty</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/1.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Aata Buscuit</td>

                                            <td>Buscuit</td>

                                            <td>12</td>

                                            <td class="td-price">$95.97</td>

                                            <td class="status-danger">
                                                <span>Pending</span>
                                            </td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/2.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Cold Brew Coffee</td>

                                            <td>Drinks</td>

                                            <td>10</td>

                                            <td class="td-price">$95.97</td>

                                            <td class="status-close">
                                                <span>Approved</span>
                                            </td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/3.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Peanut Butter Cookies</td>

                                            <td>Cookies</td>

                                            <td>9</td>

                                            <td class="td-price">$86.35</td>

                                            <td class="status-close">
                                                <span>Approved</span>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/4.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Wheet Flakes</td>

                                            <td>Flakes</td>

                                            <td>8</td>

                                            <td class="td-price">$95.97</td>

                                            <td class="status-danger">
                                                <span>Pending</span>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/5.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Potato Chips</td>

                                            <td>Chips</td>

                                            <td>23</td>

                                            <td class="td-price">$95.97</td>

                                            <td class="status-close">
                                                <span>Approved</span>
                                            </td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/6.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Tuwer Dal</td>

                                            <td>Dals</td>

                                            <td>50</td>

                                            <td class="td-price">$95.97</td>

                                            <td class="status-close">
                                                <span>Approved</span>
                                            </td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/7.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Almond Milk</td>

                                            <td>Milk</td>

                                            <td>25</td>

                                            <td class="td-price">$121.43</td>

                                            <td class="status-close">
                                                <span>Approved</span>
                                            </td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/11.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Wheat Bread</td>

                                            <td>Breads</td>

                                            <td>6</td>

                                            <td class="td-price">$95.97</td>

                                            <td class="status-danger">
                                                <span>Pending</span>
                                            </td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/8.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Dog Food</td>

                                            <td>Pet Food</td>

                                            <td>11</td>

                                            <td class="td-price">$95.97</td>

                                            <td class="status-close">
                                                <span>Approved</span>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/9.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Fresh Meat</td>

                                            <td>Meats</td>

                                            <td>18</td>

                                            <td class="td-price">$95.97</td>

                                            <td class="status-close">
                                                <span>Approved</span>
                                            </td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ url('assets_admin/images/product/10.png', []) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>Classic Coffee</td>

                                            <td>Coffee</td>

                                            <td>25</td>

                                            <td class="td-price">$86.35</td>

                                            <td class="status-close">
                                                <span>Approved</span>
                                            </td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="container-fluid">
        <!-- footer start-->
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
 