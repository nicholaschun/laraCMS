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
            <div id="addUserModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Add new user</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Name</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="John">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Surname</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="Doe">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Email</label>
                                        <input type="text" class="form-control" id="field-3" placeholder="example@gmail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Role</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">-- Select a role --</option>
                                            <option value="">Super Admin</option>
                                            <option value="">Author</option>
                                            <option value="">Editor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal -->
    @endsection
