<div class="row">
    <div class="col s12 m12 l12">

        <ul class="error">
            @foreach($errors->all() as $error)
            <li>{{  $error  }}</li>
            @endforeach
        </ul>

    </div>
</div>

<div class="row">
    <div class="col s12 m12 l12">
        <p> {{ Session::get('message') }} </p>
    </div>
</div>