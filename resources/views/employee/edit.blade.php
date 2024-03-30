<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/manage-employees/{{$user->id}}">
    {{csrf_field()}}
    <input type="hidden" name="_method"  value="PATCH"/>
    <fieldset>
        <legend>Edit  Employee Account</legend>
    <p><label for="inp01">Name:</label>
    <input type="text" name="name" value="{{$user->name}}" id="inp01"/></p>

    <p><label for="inp02">Email:</label>
    <input type="text" name="email" value="{{$user->email}}" id="inp02"/></p>
    
    <p><label for="inp02">Password:</label>
    <input type="text" name="password"  id="inp02"/></p>

    <label for="inp03">Role:</label>
    <select name="role" id="inp03">
            <option value="user">User</option>
            <option value="admin">Admin</option>
       
    </select>

    <input type="submit" value="update" name="submit"/>
    </fieldset>
   </form>
   <ul>
    @foreach($errors->all() as $error)
         <li>{{$error}}</li>
    @endforeach
    </ul>
</body>
</html>