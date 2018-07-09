@extends('admin.master')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Thêm Loại Truyện') }}</div>
				<div class="card-body">
					<form class="add_story_type" method="POST" action="{{ route('storyMaster.create') }}">
					@csrf
					  <div class="form-row">
					    <div class="form-group col">
					      <label for="typeName">Loại Truyện</label>
					      <input type="typeName" name="typeName" class="form-control" id="typeName" placeholder="Nhập Thể Loại..." >
							@if ($errors->has('typeName'))
							    <div class="alert alert-danger" role="alert">
							        <strong>{{ $errors->first('typeName') }}</strong>
                                </div>
							@endif
					    </div>
					  </div>
					  <button type="submit" id="btn-add" class="btn btn-primary">Thêm</button>
					</form>
					<form class="edit_story_type" method="POST" action="{{ route('storyMaster.edit') }}" style="display: none;">
					@csrf
					  <div class="form-row">
						<div class="form-group col">
					      <label for="typeId">Id</label>
					      <input type="typeId" name="typeId" class="form-control" id="typeId" readonly>
					    </div>
					    <div class="form-group col">
					      <label for="typeName">Loại Truyện</label>
					      <input type="typeName" name="typeName" class="form-control" id="typeNameAdd" required>
							@if ($errors->has('typeName'))
							    <div class="alert alert-danger" role="alert">
							        <strong>{{ $errors->first('typeName') }}</strong>
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
	                            <th>STT</th>
	                            <th>Loại Truyện</th>
	                            <th>Flag</th>
	                            <th style="width: 110px;"><em class="fa fa-cog"></em></th>
	                    </thead>
	                    <tbody>
	                    @foreach($storyType as $type)
	                    	<tr>
	                            <td>{{$type ->type_id}}</td>
	                            <td>{{$type ->type_name}}</td>
	                            <td>{{$type ->flag}}</td>
	                            <td><a class="btn btn-default btn-edit border" typeid="{{$type ->type_id}}" typename="{{$type ->type_name}}" flag="{{$type ->flag}}"><em class="fa fa-pencil"></em></a>
                              	<a class="btn btn-danger btn-delete" href="storyMaster/delete/{{$type ->type_id}}" typeid="{{$type ->type_id}}"><em class="fa fa-trash"></em></a></td>
	                        </tr>
	                    @endforeach
	                    </tbody>
				</table>
				{!! $storyType->render() !!}
			</div>
		</div>
		</div>
	</div>
@endsection