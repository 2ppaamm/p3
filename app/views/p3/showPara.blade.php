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
                    <h4>{{ $returndata['username'] }}</h4>                      <!--display generated user name-->
                    <ul>
                        @if(array_key_exists('birthdate',$returndata))
                            <li>{{ $returndata['birthdate' ]}}</li>             <!--display generated birthdate -->
                        @endif
                        @if(array_key_exists('profile',$returndata))            <!--display generated profile -->
                            <li>{{ $returndata['profile'] }}</li>
                        @endif
                    </ul>
                @endif
            @else
                @if(isset($query['tags']))
                <p>
                    <xmp><p></xmp>                                              <!--if chosen, add the paragraph tags -->
                    {{ $returndata }}
                    <xmp></p></xmp>
                </p>
                @else
                    {{ $returndata }}
                @endif                          <!--display the paragraphs -->
            @endif
        @endforeach
    @else
        <p>{{ $genresults }}</p>                                                <!-- error message -->
    @endif
@endif

</body>
</html>