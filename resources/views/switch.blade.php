<html>
<body>
    @switch($value)
        @case('A')
            <p>Memuaskan</p>
            @break
        @case('B')
            <p>Bagus</p>
            @break
        @case('C')
            <p>Cukup</p>
            @break
        @default
            <h1>Tidak Lulus</h1>
    @endswitch
</body>
</html>