<!DOCTYPE html>
<html lang="en">

<head>
    @include ('admin.includes.head')
</head>

<body>

<div id="page-wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Top navbar -->
    @include('admin.includes.topBar')
    <!-- end navbar -->
    </div>
    <!-- Top Bar End -->

    <!-- Page content start -->
    <div id="app">
        <div class="page-contentbar">

            <!--left navigation start-->
            <aside class="sidebar-navigation">
                @include('admin.includes.side')
            </aside>
            <!--left navigation end-->

            <!-- START PAGE CONTENT -->
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
                                                            <tr>
                                                                <td>Super Admin</td>
                                                                <td>
                                                                    <button type="button" data-toggle="modal" data-target="#editRoleModal" class="btn btn-default btn-xs"><span class="fa fa-pencil"></span></button>
                                                                    <button type="button" data-toggle="modal" data-target="#confirmDeleteModal" class="btn btn-default btn-xs"><span class="fa fa-trash-o"></span></button>
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
                                                            <th>Allow</th>
                                                            <th>Deny</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Create Admin</td>
                                                            <td><div class="radio-primary"><input  type="radio" name="perm1"></div></td>
                                                            <td><div class="radio-primary"><input  type="radio" name="perm1"></div></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Create Post</td>
                                                            <td><div class="radio-primary"><input  type="radio" name="perm1"></div></td>
                                                            <td><div class="radio-primary"><input  type="radio" name="perm1"></div></td>
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
            <!-- End #page-right-content -->

            <div class="clearfix"></div>
            @include('admin.includes.modals')
        </div>
    </div>
    <!-- end .page-contentbar -->
</div>
<!-- End #page-wrapper -->
@include ('admin.includes.scripts')
</body>

</html>