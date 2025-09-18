<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>

<body>
    <div style="border: 3px solid black; padding: 10px;">
        <h2>Create a New Post</h2>
        <form action="/create-Post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="post title">
            <textarea name="body" placeholder="body content..."></textarea>
            <button type="submit">Save Post</button>
        </form>
    </div>
</body>

</html>
