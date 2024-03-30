<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/manage-employees">
  {{csrf_field()}}
  <input type="hidden" name="_method"  value="POST"/>
    <fieldset>
        <legend>Create new Employee Account</legend>
    <p><label for="inp01">Name:</label>
    <input type="text" name="name" value="" id="inp01"/></p>

    <p><label for="inp02">Email:</label>
    <input type="text" name="email" value="" id="inp02"/></p>
    
    <p><label for="inp02">Password:</label>
    <input type="text" name="password" value="" id="inp02"/></p>

    <label for="inp03">Role:</label>
    <select name="role" id="inp03">
            <option value="admin">Admin</option>
            <option value="user">User</option>
       
    </select>

    <input type="submit" value="create" name="submit"/>
    </fieldset>
    <ul>
    @foreach($errors->all() as $error)
         <li>{{$error}}</li>
    @endforeach
    </ul>
   </form>
</body>
</html>