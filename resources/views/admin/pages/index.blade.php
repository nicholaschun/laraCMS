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
                        <div class="row"  style="padding: 0 30px 0 30px">
                            <h3 class="m-t-0 m-b-20">Pages</h3>
                            <div class="row">
                                <span class="pull-right"><a class="btn btn-danger" href="{{url('admin/posts/create')}}">Add a page/post</a></span>
                            </div>
                            <div class="row all-products">
                                <div class="input-group" style="margin-bottom: 30px">
                                    <div class="input-group-btn">
                                        <button type="button"  class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Filter Pages </button>
                                    </div>
                                    <input type="text" id="example-input1-group3"  name="example-input1-group3" class="form-control" placeholder="Search">
                                </div>
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Views</th>
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

        </div>
    </div>
    <!-- end .page-contentbar -->
</div>
<!-- End #page-wrapper -->
@include ('admin.includes.scripts')
</body>

</html>