
@section('content')
<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="welcome.blade.php"><img src="{{asset("img/logo.png")}}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="home.blade.php">Home</a></li>
                    <li><a href="about.blade.php">A-propos</a></li>
                    <li class="menu-has-children"><a href="">Departements</a>
                        <ul>
                            <li><a href="blogs.blade.php">Blog Home</a></li>
                            <li><a href="blog.blade.php">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.blade.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
@endsection
