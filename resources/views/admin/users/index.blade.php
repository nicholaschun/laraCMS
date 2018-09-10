@extends('layouts.adminLayout')
@section('content')
            <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row"  style="padding: 0 30px 0 30px">
                            <h3 class="m-t-0 m-b-20">Users</h3>
                            <div class="row">
                                <span class="pull-right"><button class="btn btn-danger" data-toggle="modal" data-target="#addUserModal">Add a user</button></span>
                            </div>
                            <div class="row all-products">
                                <div class="input-group" style="margin-bottom: 30px">
                                    <div class="input-group-btn">
                                        <button type="button"  class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Filter Users </button>
                                    </div>
                                    <input type="text" id="example-input1-group3"  name="example-input1-group3" class="form-control" placeholder="Search">
                                </div>
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>User role</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="users in admins">
                                            <td>@{{ users.name }}</td>
                                            <td>@{{ users.email }}</td>
                                            <td>@{{ users.status }}</td>
                                            <td>
                                                <button type="button" @click="editUsers(users)" data-toggle="modal" data-target="#editUserModal" class="btn btn-default btn-xs"><span class="fa fa-pencil"></span></button>
                                                <button type="button" @click="confirmDeleteUser(users.id)" class="btn btn-default btn-xs"><span class="fa fa-trash-o"></span></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div> <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </div>
            <!-- End #page-right-content -->
            <div class="clearfix"></div>
            @include('admin.includes.modals')
@endsection
