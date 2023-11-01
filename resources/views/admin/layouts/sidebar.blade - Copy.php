<nav class="col-md-2 d-none d-md-block bg-light">

    <div class="sidebar-sticky">
        <ul class="nav flex-column"  >
            <li class="nav-item">
                <a class="nav-link active" href="#"> <span data-feather="home"></span> Dashboard <span
                        class="sr-only">(current)</span> </a>
            </li>

            <li class="nav-item">
                <a class="btn btn-link" data-toggle="collapse" href="#collapseTeachers" data-target="#collapseTeachers"
                    aria-expanded="false" aria-controls="collapseOne"><i class='fas fa-chalkboard-teacher'
                        style='font-size:16px'></i> Teachers </a>

                <ul class="collapse" id="collapseTeachers" aria-labelledby="headingOne">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/teachers') }}"> All Teachers </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/teachers/create') }}"> Add Teacher </a> </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="btn btn-link" data-toggle="collapse" href="#collapseStudent" data-target="#collapseStudent"
                    aria-expanded="false" aria-controls="collapseOne"><i class='fas fa-user-graduate'
                        style='font-size:16px'></i> Students </a>

                <ul class="collapse" id="collapseStudent" aria-labelledby="headingOne">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/students') }}"> All Students </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/students/create') }}"> Add Student </a> </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="btn btn-link {{ Request::segment(1) == 'videos' ? '' : 'collapsed' }}"
                    data-toggle="collapse" href="#collapseOne" data-target="#collapseOne"
                    aria-expanded="{{ Request::segment(1) == 'videos' ? 'true' : 'false' }}"
                    aria-controls="collapseOne"><i class='fas fa-book-open' style='font-size:16px'></i> Education </a>

                <ul class="collapse {{ Request::segment(1) == 'videos' ? 'show' : '' }}" id="collapseOne"
                    aria-labelledby="headingOne">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/teachers') }}"> Pdf Notes </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/videos') }}"> Youtube Lectures </a> </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
