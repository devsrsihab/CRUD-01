@extends('admin.layout.default')
@section('title','Post List')
@section('content')
		<!-- Page header -->
		<div class="page-header">
            <div class="page-header-content">
                <div class="page-title">

            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}"><i class="icon-home2 position-left"></i> Dashboard</a></li>
                    <li class="active">Users</li>
                </ul>

            <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
</div>
<!-- /page header -->
<!-- /basice database -->
<!-- Content area -->
<div class="content">

    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">User Data List</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li style="margin-right:10px;color:white"> <a class="btn btn-primary text-white"href="post/create">Add New</a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Post Id</th>
                    <th>Post Title</th>
                    <th>Post Author</th>
                    <th>Post Description</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)                    
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->descrption }}</td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li><a href="post/delete/{{ $post->id }}"><i class="icon-trash-alt"></i></a></li>
                            <li><a href="edit/{{ $post->id }}"><i class="icon-pencil5"></i></a></li>
                        </ul>
                    </td>
                </tr>
                @endforeach

               
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->
<script type="text/javascript">
alert = function() {};

</script>
</div>
<!-- /content area -->
<!-- /basice database -->
    
@endsection