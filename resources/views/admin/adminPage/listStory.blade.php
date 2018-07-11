@extends('admin.master')

@section('head')
<script src="{{ asset('js/admin.listStory.js') }}" defer></script>
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{ __('Thêm Truyện') }}</div>
				<div class="card-body">
					<form class="add_change" method="POST" action="{{ route('listStoryMaster.create') }}" enctype="multipart/form-data">
					@csrf
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-6">
							<div class="form-row">
							  	<div class="form-group col-md-9">
							  		<img class="img-thumbnail" alt="194x284" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1648228bc57%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1648228bc57%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E194x284%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" style="width: 194px; height: 284px;">
							  	</div>
							  	<div class="form-group col-md-3">
								    <input type="file" name="storyImage" class="form-control-file d-none" id="storyImage" onchange="OnJspSelectImage(this);">
								    <a onclick="event.preventDefault();
		                         document.getElementById('storyImage').click();" class="btn btn-default btn-edit border"><i class="fa fa-upload" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-row">
								<div class="form-group col">
							      <label for="storyName">Tên Truyện</label>
							      <input type="storyName" name="storyName" class="form-control" id="storyName" placeholder="Nhập Tên Truyện..." >
									@if ($errors->has('storyName'))
									    <div class="alert alert-danger" role="alert">
									        <strong>{{ $errors->first('storyName') }}</strong>
		                                </div>
									@endif
							    </div>
							    <div class="form-group col">
							      <label for="authorId">Tác Giả</label>
							      <select class="form-control" name="authorId" id="authorId">
								      	<option selected>Chọn Tác Giả...</option>
								   @foreach($storyAuthor as $author )
		        						<option value="{{$author ->author_id}}">{{$author ->author_name}}</option>
		        					@endforeach
								  </select>
							    </div>
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6">
							      <label for="storySource">Nguồn</label>
							      <input type="storySource" name="storySource" class="form-control" id="storySource" placeholder="Nhập Nguồn Truyện..." >
									@if ($errors->has('storySource'))
									    <div class="alert alert-danger" role="alert">
									        <strong>{{ $errors->first('storySource') }}</strong>
		                                </div>
									@endif
							    </div>
							    <div class="form-group col-md-4">
							      <label for="storyType">Loại Truyện</label>
							      <select multiple  class="form-control" name="storyType[]" id="storyType">
		        					@foreach($storyType as $type)
		        						<option >{{$type ->type_name}}</option>
		        					@endforeach
								  </select>
							    </div>
						    	<div class="form-group col-md-2">
								      <label for="storySumChapter">Số Chương</label>
								      <input type="storySumChapter" name="storySumChapter" class="form-control" id="storySumChapter" value="0" >
										@if ($errors->has('storySumChapter'))
										    <div class="alert alert-danger" role="alert">
										        <strong>{{ $errors->first('storySumChapter') }}</strong>
			                                </div>
										@endif
								    </div>
								</div>
							<div class="form-row">
							    <div class="form-group col-md-3">
							      <label for="storyView">Lược Xem</label>
							      <input type="storyView" name="storyView" class="form-control" id="storyView" value="0">
									@if ($errors->has('storyView'))
									    <div class="alert alert-danger" role="alert">
									        <strong>{{ $errors->first('storyView') }}</strong>
		                                </div>
									@endif
							    </div>
							    <div class="form-group col-md-3">
							      <label for="storyRating">Đánh Giá</label>
							      <select class="form-control" name="storyRating" id="storyRating">
								      	<option value="" selected>Đánh Giá...</option>
		        						<option value="1">1</option>
		        						<option value="2">2</option>
		        						<option value="3">3</option>
		        						<option value="4">4</option>
		        						<option value="5">5</option>
		        						<option value="6">6</option>
		        						<option value="7">7</option>
		        						<option value="8">8</option>
		        						<option value="9">9</option>
		        						<option value="10">10</option>
								  </select>
							    </div>
							    <div class="form-group col-md-3">
							      <label for="storyStatus">Trạng Thái</label>
							      <select class="form-control" name="storyStatus" id="storyStatus">
								      	<option value="" selected>Trạng Thái...</option>
		        						<option value="1">Hoàn Thành</option>
		        						<option value="2">Đang Ra</option>
								  </select>
							    </div>
							     <div class="form-group col-md-3">
							      <label for="storyPrice">Tính Phí</label>
							      <select class="form-control" name="storyPrice" id="storyPrice">
								      	<option value="" selected>Tính Phí...</option>
		        						<option value="1">Có</option>
		        						<option value="2">Không</option>
								  </select>
							    </div>
							</div>
						</div>
					</div>
				</div>
					<div class="form-row">
					</div>
					<!--  -->
					<div class="form-row">
						<div class="form-group col-md-12">
						    <label for="storyIntro">Mô Tả</label>
						    <textarea  name="storyIntro" class="form-control" id="editor1"></textarea>
						</div>
					</div>
					<!--  -->
					  <button type="submit" id="btn-add" class="btn btn-primary">Thêm</button>
					</form>
					<form class="edit_change" method="POST" action="{{ route('storyMaster.edit') }}" style="display: none;">
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
		<div class="col-md-12" id="i_alert">
			<div class="alert alert-success d-none">
			  <!-- <strong>Success!</strong> Sửa thành công!. -->
			</div>
		</div>
	</div>
</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-2">
			<a class="btn btn-default btn-add border" href ="{{ route('listStoryMaster.test') }}"><em class="fa fa-plus-square fa-2x" style="color:#007bff"></em></a>
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
		                            <th>Tên Truyện</th>
		                            <th>Ảnh Đại Diện</th>
		                            <th>Tác Giả</th>
		                            <th>Nguồn</th>
		                            <th>Loại Truyện</th>
		                            <th>Số Chương</th>
		                            <th>Lược Xem</th>
		                            <th>Đánh Giá</th>
		                            <th>Trạng Thái</th>
		                            <th>Tính Phí</th>
		                            <th>Flag</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    @foreach($listStory as $story)
	                    	<tr>
	                            <td>{{$story ->story_name}}</td>
	                            <td>
	                            	<img src="{{ asset( 'images/' . $story ->story_image ) }}" alt="{{ $story ->story_image }}" width="120" height="120">
	                            </td>
	                            <td>{{$story ->author_name}}</td>
	                            <td>{{$story ->story_source}}</td>
	                            <td>{{$story ->story_type}}</td>
	                            <td>{{$story ->story_sum_chapter}}</td>
	                            <td>{{$story ->story_view}}</td>
	                            <td>
	                            	{{$story ->story_rating . __(' *')}}
	                            </td>
	                            <td>
	                            	@if($story ->story_status == 1)
	                            	{{__('Hoàn Thành')}}
	                            	@else
	                            	{{__('Đang Ra')}}
	                            	@endif
	                            </td>
	                            <td>
	                            	@if($story ->story_price == 1)
	                            	{{__('Có Phí')}}
	                            	@else
	                            	{{__('Không Phí')}}
	                            	@endif
	                            </td>
	                            <td>
	                            	@if($story ->flag == 1)
	                            	{{__('true')}}
	                            	@else
	                            	{{__('false')}}
	                            	@endif
	                            </td>
	                        </tr>
	                    	@endforeach
		                    </tbody>
					</table>
					{!! $listStory->render() !!}
				</div>
			</div>
		</div>
	</div>
	<!-- CKEDITOR -->
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script> CKEDITOR.replace('editor1'); </script>
	<!-- CKEDITOR-->
@endsection