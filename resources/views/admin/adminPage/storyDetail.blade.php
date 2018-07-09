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