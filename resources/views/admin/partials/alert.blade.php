@if ($errors->any())
    <div class="error_header">
        <span>Что-то пошло не так</span>
    </div>
        <div class="alert alert-danger" role="alert">
            <ul class="ul_error pt-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
