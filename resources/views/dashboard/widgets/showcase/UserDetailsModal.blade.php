<div id="showcase-user-details-modal{{$row->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">{{ $row->name }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="table table-borderless mb-0">
                    <div class="mb-2">
                        <p>
                            Name
                        </p>
                        <p>
                            <b>{{ $row->name }}</b>
                        </p>
                    </div>
                    <div class="mb-2">
                        <p>
                            Email
                        </p>
                        <p>
                            <b>{{ $row->email }}</b>
                        </p>
                    </div>
                    <div class="mb-2">
                        <p>
                            Kind
                        </p>
                        <p>
                            <b>{{ $row->kind }}</b>
                        </p>
                    </div>
                    <div class="form-group mt-5">
                        <a href="{{ url('/private/user/discard/'.$row->token)}}" class="btn btn-danger">!! Delete !!</a>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>