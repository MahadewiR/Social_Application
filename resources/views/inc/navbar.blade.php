<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('posts.index') }}">
            <img src="{{ asset('umuuu.jpeg') }}" alt="Logo" width="30" height="30"
                class="d-inline-block align-text-top">
            Social Media
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.profile') }}">
                        <i class="fas fa-user"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.create') }}">
                        <i class="fas fa-plus"></i> + Post something
                    </a>
                </li>
                <li class="nav-item">
                    <form class="d-flex" role="search" method="POST" action="{{ route('search.hashtag') }}">
                        @csrf
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="cari">
                        <button class="btn btn-success" type="submit">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </form>
                </li>
                <li class="nav-item">
                    <form class="d-flex" role="logout" method="POST" action="{{ route('login') }}">
                        @csrf
                        <button class="btn btn-warning" type="submit" onclick="confirmLogout(event)">
                            <i class="fas fa-sign-out-alt"></i> Log out
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    function confirmLogout(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Anda akan keluar dari akun anda',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Keluar',
            cancelButtonText: 'Kembali'

        }).then((result) => {
            if (result.value) {
                document.location.href = "{{ route('logout') }}";
            }
        });
    }
</script>
