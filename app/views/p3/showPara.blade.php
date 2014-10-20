<!-- start: render output for p3 forms -->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
@if (isset($genresults))
    @if (is_array($genresults))
        @foreach($genresults as $returndata)
            @if (is_array($returndata))
                @if(array_key_exists('username', $returndata))
                    <h4>{{ $returndata['username'] }}</h4>
                    <ul>
                        @if(array_key_exists('birthdate',$returndata))
                            <li>{{ $returndata['birthdate' ]}}</li>
                        @endif
                        @if(array_key_exists('profile',$returndata))
                            <li>{{ $returndata['profile'] }}</li>
                        @endif
                    </ul>
                @endif
            @else
                <p>{{ $returndata }}</p>
            @endif
        @endforeach
    @else
        <p>{{ $genresults }}</p>
    @endif
@endif

</body>
</html>