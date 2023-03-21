<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        textarea {
            resize: none;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            background-color: #f5f5f5;
            border: none;
            border-radius: 0;
            border-bottom: 2px solid #ddd;
            box-shadow: none;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="file"]:focus {
            border-bottom: 2px solid #3f51b5;
        }

        input[type="file"]::-webkit-file-upload-button {
            background-color: #3f51b5;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: #3f51b5;
            border: none;
            border-radius: 4px;
            padding: 15px 0;
            font-size: 18px;
        }

        button[type="submit"]:hover {
            background-color: #303f9f;
            color: #fff;
        }
    </style>

</head>

<body>
    <div class="container my-5">
        <form action="upload_music.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="musicname">Name of Music:</label>
                <input type="text" id="musicname" name="musicname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control" rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
                <label for="singer">Singer:</label>
                <input type="text" id="singer" name="singer" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitle:</label>
                <input type="text" id="subtitle" name="subtitle" class="form-control">
            </div>
            <div class="form-group">
                <label for="startsecond">Start Second:</label>
                <input type="number" id="startsecond" name="startsecond" class="form-control" min="0" required>
            </div>
            <div class="form-group">
                <label for="endsecond">End Second:</label>
                <input type="number" id="endsecond" name="endsecond" class="form-control" min="0" required>
            </div>
            <div class="form-group">
                <label for="musicfile">Select music file to upload:</label>
                <input type="file" id="musicfile" name="musicfile" class="form-control-file" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Upload Music</button>
        </form>
    </div>


</body>

</html>
