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
                    <td><a class="btn btn-default btn-edit border" authorid="{{$author ->author_id}}" authorname="{{$author ->author_name}}" flag="{{$author ->flag}}"><em class="fa fa-pencil"></em></a>
                  	<a class="btn btn-danger btn-delete" href="authorMaster/delete/{{$author ->author_id}}" typeid="{{$author ->author_id}}"><em class="fa fa-trash"></em></a></td>
                </tr>
            @endforeach
            </tbody>
	</table>
	{!! $storyAuthor->render() !!}
</div>