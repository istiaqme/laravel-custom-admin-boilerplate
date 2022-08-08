<div id="create-user-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Create User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ url('/private/user/create') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="example-name" class="form-label">Name</label>
                        <input type="name"  name="name" class="form-control" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="example-email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="example-password" class="form-label">Password</label>
                        <input type="password"  class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="example-select" class="form-label">Select User Type</label>
                        <select class="form-select" name="kind">
                            <option value="Official">Official</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>