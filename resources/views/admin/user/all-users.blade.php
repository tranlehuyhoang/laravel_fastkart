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
                            <h5>All Users</h5>
                            <form class="d-inline-flex">
                                <a href="{{ url('admin/user/create', []) }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive table-product">
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Name</th>
                                      
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $user)
                                        
                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="{{ asset($user->image) }}" class="img-fluid" alt="">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="user-name">
                                                <span>{{$user->name}}</span>
                                               
                                            </div>
                                        </td>

                                      

                                        <td>{{$user->email}}</td>
                                        <td>
                                            @if ($user->role == 1)
                                                Admin
                                            @elseif ($user->role == 0)
                                                User
                                            @elseif ($user->role == 2)
                                                Seller
                                            @endif
                                        </td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="order-detail.html">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ url('admin/user/'. $user->id .'/edit', []) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ url('admin/user/'. $user->id .'/delete', []) }}"  >
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
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>
</div>
<!-- Container-fluid end -->
@endsection
<!-- index body end -->

<!-- Page Body End -->
 