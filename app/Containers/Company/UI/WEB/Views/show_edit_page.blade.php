<div>
    <div>
        <div>
            <h3>Update Company</h3>
        </div>
        <div>
            <div>
                <form method="POST" action="{{ url('company/update', ['id' => $company->id]) }}"  role="form">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PATCH">
                    <div>
                        <div>
                            <div>
                                <input type="text" name="name" value="{{$company->name}}" id="name" placeholder="Company name">
                            </div>
                        </div>
                    </div>

                    <div>
                        <textarea name="description" class="form-control input-sm" placeholder="Description">{{$company->description}}</textarea>
                    </div>
                    <div>
                        <div>
                            <input type="submit"  value="Update">
                            <a href="{{ url('company/index') }}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
