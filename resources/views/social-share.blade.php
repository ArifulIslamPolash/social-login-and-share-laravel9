<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Share</title>
</head>
<body>
    <h3>Social Share Link</h3>
    <ul>
        @foreach ($socialShare as $key => $value)
           <li>

               <a href="{{ $value }}" target="_blank">{{ ucfirst($key) }}</a>
           </li>

        @endforeach
    </ul>

</body>
</html>
