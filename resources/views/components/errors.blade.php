<div class="container">
    @if($errors->any())
        <div class="row">
            <div class="offset-2 col-md-8">
                <div class="alert alert-danger text-center">
                    @foreach ($errors->all() as $error)
                        <p class="p-0 m-0">{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

</div>