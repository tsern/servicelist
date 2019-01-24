<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Update Company</h3>
        </div>
        <div class="panel-body">
            <div class="table-container">
                <form method="POST" action="{{ route('web_company_update', ['id' => $company->id]) }}"  role="form">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" value="{{$company->name}}" id="name" class="form-control input-sm" placeholder="Company name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea name="text" class="form-control input-sm" placeholder="Description">{{$company->description}}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="submit"  value="Update" class="btn btn-success btn-block">
                            <a href="{{ url('company/index') }}" class="btn btn-info btn-block" >Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
