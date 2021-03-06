@extends('layouts.adminLayout')
@section('content')
    <div>
                <div id="page-right-content">
                    <div class="container">
                        <div class="row main-content"  style="padding: 0 30px 0 30px">
                            <span><i class="ti ti-angle-left"></i><a href="{{url('admin/users')}}">All users</a></span>
                            <br>
                            <form method="post"  enctype="multipart/form-data" >
                                <h3 class="m-t-10 m-b-20">Role / Permission</h3>
                                <div class="row add-products-container">
                                    <div class="col-lg-4 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <span class="pull-right"><button type="button" data-toggle="modal" data-target="#addRoleModal" class="btn btn-danger btn-sm" >Create role</button></span>
                                            <div class="col-lg-12 form-group m-b-20">
                                                <br>
                                                <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead>
                                                        <tr>
                                                            <th>Role</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr v-for="roles in allUserRoles">
                                                                <td>@{{ roles.name }}</td>
                                                                <td>
                                                                    <button type="button" @click="editUserRoles(roles)" data-toggle="modal" data-target="#editRoleModal" class="btn btn-default btn-xs"><span class="fa fa-pencil"></span></button>
                                                                    <button type="button" @click="confirmDeleteRoles(roles.id)" class="btn btn-default btn-xs"><span class="fa fa-trash-o"></span></button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-8 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="row">
                                                <div class="col-lg-4 pull-right">
                                                    <select name="" class="form-control input-sm" id="">
                                                        <option value="">Super Admin</option>
                                                        <option value="">Author</option>
                                                        <option value="">Editor</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-lg-12 form-group m-b-20">
                                                <div class="table-responsive">
                                                    <table class="table m-0 table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Permission</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr v-for="permissions in userPermissions">
                                                            <td>@{{ permissions.name }}</td>
                                                            <td>
                                                                <button type="button" @click="editUserPermission(permissions)" data-toggle="modal" data-target="#editRoleModal" class="btn btn-default btn-xs"><span class="fa fa-pencil"></span></button>
                                                                <button type="button" @click="confirmDeletePermission(permissions.id)" class="btn btn-default btn-xs"><span class="fa fa-trash-o"></span></button>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                                <div class="row m-t-10">
                                    <div class="col-lg-12 m-t-10 products-details">
                                        <div class="col-lg-12 product-entity">
                                            <div class="row">
                                                <div class="col-lg-4 pull-right">
                                                    <select name="" class="form-control input-sm" id="">
                                                        <option value="">Super Admin</option>
                                                        <option value="">Author</option>
                                                        <option value="">Editor</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-lg-12 form-group m-b-20">
                                                <div class="table-responsive">
                                                    <table class="table m-0 table-striped">
                                                        <thead style="background: #c3c3c3">
                                                        <tr>
                                                            <th>Permission</th>
                                                            <th>Allow</th>
                                                            <th>Deny</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr v-for="permissions in userPermissions">
                                                            <td>@{{ permissions.name }}</td>
                                                            <td>
                                                                <div><input type="radio" name="allow"></div>
                                                            </td>
                                                            <td>
                                                                <div><input type="radio" name="allow"></div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-t-30">
                                    <span ><input type="submit" value="Save Changes" id="buttonSubmit" class="btn btn-primary btn-block"></span>
                                </div>
                            </form>

                        </div> <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </div>
    <div class="clearfix"></div>
    @include('admin.includes.modals')
@endsection
