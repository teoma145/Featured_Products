<header class="d-flex justify-content-between align-items-center">
    <img src="{{ asset('storage' . '\/images/logo.jpg') }}" alt="logo-bdoctors">
    <ul>
        @foreach ($links as $link)
            <li> {{$link}} </li>
        @endforeach
    </ul>

    <ul class="me-4">
        <li class="fs-6"><i class="fa-brands fa-facebook-f" style="color:	#FFFFFF;"></i></li>
        <li class="fs-6"><i class="fa-brands fa-instagram" style="color: #FFFFFF;"></i></li>
        <li class="fs-6"><i class="fa-brands fa-x-twitter" style="color: #FFFFFF;"></i></li>
    </ul>
</header>
