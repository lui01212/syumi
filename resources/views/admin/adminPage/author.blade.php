@extends('admin.master')

@section('head')
<script src="{{ asset('js/admin.author.js') }}" defer></script>
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Thêm Tác Giả') }}</div>
				<div class="card-body">
					<form class="add_change" method="POST" action="{{ route('authorMaster.create') }}">
					@csrf
					  <div class="form-row">
					    <div class="form-group col">
					      <label for="authorName">Tên Tác Giả</label>
					      <input type="authorName" name="authorName" class="form-control" id="authorName" placeholder="Nhập Tên Tác Giả..." >
							@if ($errors->has('authorName'))
							    <div class="alert alert-danger" role="alert">
							        <strong>{{ $errors->first('authorName') }}</strong>
                                </div>
							@endif
					    </div>
					  </div>
					  <button type="submit" id="btn-add" class="btn btn-primary">Thêm</button>
					</form>
					<form class="edit_change" method="POST" action="{{ route('authorMaster.edit') }}" style="display: none;">
					@csrf
					  <div class="form-row">
						<div class="form-group col">
					      <label for="authorId">Id</label>
					      <input type="authorId" name="authorId" class="form-control" id="authorId" readonly>
					    </div>
					    <div class="form-group col">
					      <label for="authorName">Tên Tác Giả</label>
					      <input type="authorName" name="authorName" class="form-control" id="authorNameAdd" required>
							@if ($errors->has('authorName'))
							    <div class="alert alert-danger" role="alert">
							        <strong>{{ $errors->first('authorName') }}</strong>
                                </div>
							@endif
					    </div>
					  </div>
					 <fieldset class="form-group">
					    <div class="row">
					      <legend class="col-form-label col-sm-2 pt-0">Flag</legend>
					      <div class="col-sm-10">
					        <div class="form-check">
					          <input class="form-check-input" type="radio" name="flag" id="flag1" value="1" >
					          <label class="form-check-label" for="flag1">
					            1
					          </label>
					        </div>
					        <div class="form-check mt-2">
					          <input class="form-check-input" type="radio" name="flag" id="flag2" value="2" checked>
					          <label class="form-check-label" for="flag2">
					            2
					          </label>
					        </div>
					      </div>
					    </div>
					  </fieldset>
					  <button type="submit" id="btn-edit" class="btn btn-primary mt-2">Sửa</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8" id="i_alert">
			<div class="alert alert-success d-none">
			  <!-- <strong>Success!</strong> Sửa thành công!. -->
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-2">
			<a class="btn btn-default btn-add border"><em class="fa fa-plus-square fa-2x" style="color:#007bff"></em></a>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<!-- <h2>Thể loại truyện</h2> -->
			<div class="col-md-12" id="i-pagination">
			<div class="table-responsive">
				<table class="table table-bordered">
					    <thead>
	                        <tr>
	                            <th>ID</th>
	                            <th>Tác Giả</th>
	                            <th>Flag</th>
	                            <th style="width: 110px;"><em class="fa fa-cog"></em></th>
	                    </thead>
	                    <tbody>
	                    @foreach($storyAuthor as $author)
	                    	<tr>
	                            <td>{{$author ->author_id}}</td>
	                            <td>{{$author ->author_name}}</td>
	                            <td>{{$author ->flag}}</td>
	                            <td><a class="btn btn-default btn-edit border" authorId="{{$author ->author_id}}" authorName="{{$author ->author_name}}" flag="{{$author ->flag}}"><em class="fa fa-pencil"></em></a>
                              	<a class="btn btn-danger btn-delete" href="authorMaster/delete/{{$author ->author_id}}" authorid="{{$author ->author_id}}"><em class="fa fa-trash"></em></a></td>
	                        </tr>
	                    @endforeach
	                    </tbody>
				</table>
				{!! $storyAuthor->render() !!}
			</div>
		</div>
		</div>
	</div>
@endsection