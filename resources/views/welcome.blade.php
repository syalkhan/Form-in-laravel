<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <!-- display errors variable if having error in the validation. -->
    <!-- @if($errors->any()){ 
    {{$errors}}
    }
    @endif -->
    <form action="" method="post">
        @csrf
       Name <input type="text" name="name"><br>

       <!-- displaying error message by using error direcive.  -->
       @error('name')
       {{$message}}
       @enderror <br>
       Password <input type="password" name="password"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>