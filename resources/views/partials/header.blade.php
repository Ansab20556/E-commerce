<div class="header_section">
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <a class="logo" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"></a>
            <div class="search_section">
                <ul>
                    <li><a href="#">Log In</a></li>
                    <li><a href="#"><img src="{{ asset('images/shopping-bag.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('images/search-icon.png') }}"></a></li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{ url('/pages/index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/category') }}">Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/clients') }}">Client</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
