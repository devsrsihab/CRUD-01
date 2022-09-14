@extends('admin.layout.default')
@section('title','Users')
{{-- content section --}}
@section('content')
				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
		
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{ url('/') }}"><i class="icon-home2 position-left"></i> Dashboard</a></li>
							<li class="active">Post</li>
							<li class="active">Create</li>
						</ul>

					<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a></div>
				</div>
				<!-- /page header -->
				<!-- /user create table -->
                <div class="panel-body">
                    <div class="panel-heading">
                        <h5 class="panel-title">Add Post DataList</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li style="margin-right:10px;color:white"> <a class="btn btn-primary text-white"href="post/create">Add New</a></li>
                               
                            </ul>
                        </div>
                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>


                    <form class="form-horizontal" action="{{ url('post/store') }}" method="post">
                        @csrf
                        <fieldset class="content-group">
                            <div class="form-group">
                                <label class="control-label col-lg-2 " for="title" >Title</label>
                                <div class="col-lg-10">
                                    <input id="title" name="title" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2" id="author" >Author</label>
                                <div class="col-lg-10">
                                    <input id="author" name="author" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2 " for="descrption" >Description</label>
                                <div class="col-lg-10">
                                    <input id="descrption" name="descrption" type="text" class="form-control">
                                </div>
                            </div>

                        </fieldset>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </form>
                </div>
				<!-- /users create table -->
				

@endsection