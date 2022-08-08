@if (Session::has('appMessage'))
    @if(Session::get('appMessageType') == 'success')
        <script>
            swal({
                title: "Good job!",
                text: "{{Session::get('appMessage')}} ",
                icon: "success",
                button: "Aww yiss!",
            });
        </script>
    @else
        <div class="alert alert-{{Session::get('appMessageType')}} mt-2 mb-2" role="alert">
            <strong>{{Session::get('appMessage')}}</strong>
        </div>
    @endif
    
@endif