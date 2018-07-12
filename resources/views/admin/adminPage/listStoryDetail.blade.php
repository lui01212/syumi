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
                    <th style="width: 110px;"><em class="fa fa-cog"></em></th>
                </tr>
            </thead>
            <tbody>
            @foreach($listStory as $story)
        	<tr>
                <td>{{$story ->story_name}}</td>
                <td>
                	<img id ="images{{$story ->story_id}}" src="{{ asset( 'images/' . $story ->story_image ) }}" alt="{{ $story ->story_image }}" width="120" height="120">
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
                <td><a idImage="images{{$story ->story_id}}" class="btn btn-default btn-edit border" href="listStoryMaster/loadData/{{$story ->story_id}}"><em class="fa fa-pencil"></em></a>
              	<a class="btn btn-danger btn-delete" href=""><em class="fa fa-trash"></em></a></td>
            </tr>
        	@endforeach
            </tbody>
	</table>
	{!! $listStory->render() !!}
</div>