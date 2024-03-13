<header class="d-flex justify-content-between align-items-center">
    <div>Boolstore</div>
    <ul>
        @foreach ($links as $link)
            <li> {{$link}} </li>
        @endforeach
    </ul>

    <ul>
        <li>FB</li>
        <li>IG</li>
        <li>X</li>
    </ul>
</header>