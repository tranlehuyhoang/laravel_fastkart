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
                            <h5>All Category</h5>
                            <form class="d-inline-flex">
                                <a href="add-new-category.html" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive category-table">
                            <div>
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Date</th>
                                            <th>Product Image</th>
                                            <th>Icon</th>
                                            <th>Slug</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Aata Buscuit</td>

                                            <td>26-12-2021</td>

                                            <td>
                                                <div class="table-image">
                                                    
                                                    <img src="{{ asset('assets_admin/images/product/1.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/vegetable.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>buscuit</td>

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
                                            <td>Cold Brew Coffee</td>

                                            <td>21-05-2022</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('assets_admin/images/product/2.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/cup.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>coffee</td>

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
                                            <td>Peanut Butter Cookies</td>

                                            <td>25-12-2021</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('assets_admin/images/product/3.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/meats.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>cookies</td>

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
                                            <td>Wheet Flakes</td>

                                            <td>10-05-2022</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('assets_admin/images/product/4.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/breakfast.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>flakes</td>

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
                                            <td>Potato Chips</td>

                                            <td>05-01-2022</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('assets_admin/images/product/5.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/frozen.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>chips</td>

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
                                            <td>Tuwer Dal</td>

                                            <td>20-08-2022</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('assets_admin/images/product/6.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/biscuit.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>dal</td>

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
                                            <td>Almond Milk</td>

                                            <td>11-09-2022</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('assets_admin/images/product/7.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/milk.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>milk</td>

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
                                            <td>Wheat Bread</td>

                                            <td>20-09-2022</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('assets_admin/images/product/11.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/grocery.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>bread</td>

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
                                            <td>Dog Food</td>

                                            <td>30-08-2022</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('assets_admin/images/product/8.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/drink.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>dog Food</td>

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
                                            <td>Fresh Meat</td>

                                            <td>30-03-2022</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('assets_admin/images/product/9.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/milk.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>meat</td>

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
                                            <td>Classic Coffee</td>

                                            <td>18-02-2022</td>

                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('assets_admin/images/product/10.png') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="category-icon">
                                                    <img src="{{ asset('assets_admin/svg/1/pet.svg') }}" class="img-fluid" alt="">
                                                </div>
                                            </td>

                                            <td>coffee</td>

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
    <!-- All User Table Ends-->

    <div class="container-fluid">
        <!-- footer start-->
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>
</div>
@endsection
<!-- index body end -->

<!-- Page Body End -->
 