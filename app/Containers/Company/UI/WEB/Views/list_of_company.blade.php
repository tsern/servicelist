<div class="panel-body">
    <table class="table table-striped table-hover">
        <thead>
            {{--<th><input type="checkbox" id="checkall" /></th>--}}
            <th>ID</th>
            <th>Company name</th>
            <th>Company logo</th>
            <th>Company address</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @if($companies->count())
                @foreach($companies as $company)
                    <tr>
                        {{--<td><input type="checkbox" class="checkthis" /></td>--}}
                        <td>{{$company->id}}</td>
                        <td>{{$company->name}}</td>
                        {{--<td>{{$company->logo}}</td>--}}
                        <td><img src={{url('storage/'.$company->logo)}} height="120px" width="150px"></td>
                        <td>{{$company->location}}</td>
                        {{--<td><a class="btn btn-primary btn-xs" href="{{action('Controller@showEditCompanyPage', $company->id)}}" >
                        <span class="glyphicon glyphicon-pencil"></span></a></td>--}}
                        <td>
                            {{--<form action="{{'Controller@delete', $company->id}}" method="post">--}}
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7">No Records found !!</td>
                </tr>
                @endif
        </tbody>
    </table>
</div>