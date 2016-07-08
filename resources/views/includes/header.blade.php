<nav>

    <div class="nav-wrapper">

        <div class="container">

            <a href="@if(Auth::user()->email == "admin@uwindsor.ca")
                            {{route('admin-dashboard')}}
                        @else
                        {{route('students-dashboard')}}
                        @endif"
               class="brand-logo">IMS</a>

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">
                @if(Auth::user()->email == "admin@uwindsor.ca")
                <li><a href="{{route('admins_add_students')}}">Students</a></li>
                @else
                    <li><a href="{{route('student-accounts')}}">Accounts</a></li>
                @endif
                <li><a href="{{route('internships')}}">Internships</a></li>
                <li><a href="{{route('search')}}">Search</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Students</a></li>
                <li><a href="badges.html">Jobs</a></li>
            </ul>

        </div>

    </div>

</nav>