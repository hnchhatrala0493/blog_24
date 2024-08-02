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
        <h2>Edit Post</h2>
        <form action="{{route('post.update',['post'=>$post->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" value="{{$post->title}}" id="title" placeholder="Enter title" name="title">
            </div>
            <div class="form-group">
                <label for="pwd">Description:</label>
                <textarea class="form-control" name="description">{{$post->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{route('post.index')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>

</body>

</html>