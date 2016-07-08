<!DOCTYPE html>
<html>
<head>
    <title>Sign In | Students</title>
    @include('includes.importcss')
</head>

<body>

<header>
    @include('includes.brandOnlyHeader')
</header>

<main>
    <div class="row">
        <h3>Students Sign In</h3>
    </div>

    <div class="row">
        <form action="{{route('student-signin')}}" method="post" class="col s12 m12 l12">

            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" name="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" name="password">
                    <label for="password">Password</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>

            <input type="hidden" name="_token" value="{{Session::token()}}">

        </form>
    </div>
</main>

@include('includes.footer')

</body>

@include('includes.importjs')
</html>
