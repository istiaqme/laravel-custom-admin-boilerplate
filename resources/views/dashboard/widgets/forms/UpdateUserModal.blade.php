<div id="edit-user-modal{{$row->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">{{ $row->name }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{url('/private/user/update')}}" method="POST">
                @csrf
                <input type="hidden" value="{{ $row->token }}" name="token">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="example-name" class="form-label">Name</label>
                        <input type="name" id="example-name" name="name" class="form-control" value="{{ $row->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="example-email" class="form-label">Email</label>
                        <input type="email" id="example-email" name="email" class="form-control" value="{{ $row->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="example-select" class="form-label">Select User Type</label>
                        <select class="form-select" name="kind">
                            @if ($row->kind == "Official")
                                <option value="Official" selected>Official</option>
                                <option value="User">User</option>
                            @else
                                <option value="User" selected>User</option>
                                <option value="Official">Official</option>
                                
                            @endif
                            
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>