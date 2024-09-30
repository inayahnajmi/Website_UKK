<nav class="navbar navbar-expand-lg navbar-dark bg-custom">
    <div class="container">
        <a class="navbar-brand" href="#">Enchanté Cosmetics</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ ($title == 'Contacts') ? 'active': ''}}" href="{{route('contacts.create')}}"> </a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Masuk sebagai Admin</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Daftar</a>
            </li> -->
        </ul>
        </div>
    </div>
</nav>