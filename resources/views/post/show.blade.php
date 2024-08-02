<!DOCTYPE html>
<html lang="en">

<head>
    <title>Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">
    <script src="{{url('jquery.min.js')}}"></script>
    <script src="{{url('bootstrap.min.js')}}"></script>
</head>

<body>
    <div class="container">
        <h2>Show Post</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Title:</th>
                    <td>{{$post->title}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$post->description}}</td>
                </tr>
            </thead>
        </table>
    </div>

</body>

</html>