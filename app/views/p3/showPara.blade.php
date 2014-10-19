<!-- start: render output for p3 forms -->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
@if(isset($paras))
    @foreach($paras as $para)
        <p>{{ $para }}</p>
    @endforeach
@endif
@if(isset($users))
    @foreach($users as $user)
        <h4>{{ $user['username'] }}</h4>
        <ul>
            @if(array_key_exists('birthdate',$user))
                <li>{{ $user['birthdate' ]}}</li>
            @endif
            @if(array_key_exists('profile',$user))
                <li>{{ $user['profile'] }}</li>
            @endif
        </ul>
    @endforeach
@endif
</body>
</html>