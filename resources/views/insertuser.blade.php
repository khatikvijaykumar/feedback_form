<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<style>
        body{
           background-image: url(upda.jpg);
           background-size: cover;
        }
        
        form{
            background-color: white;
            text-align: center;
            width: 400px;
            height: 600px;
            border: none;
            margin-top: 50px;
            margin-left: 500px;
            border-radius:15px;
            box-shadow: inset -2px -2px 5px grey;
        }
        label{
            font-size: 25px;
            color: grey;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        input{
            margin-left: 30px;
            width: 250px;
            height: 40px;
            border: 2px  dotted grey;
            border-radius: 10px;

        }
        #feed{
            margin-top: 50px;
            margin-right: 260px;
         
        }
        textarea{
            border-radius: 10px ;

            border: 2px  dotted grey;
        }
        button{
            width: 350px;
            height: 35px;
            border: none;
            font-size: 15px;
            border-radius: 5px;
            margin-top: 10px;
            background-color: black;
            color: white;
            box-shadow: 2px 2px 5px grey;
        }
        a{
            
            color: white;
             font-size: 25px;
            text-decoration: none;
            border-radius: 5px;
            background-color: grey;
            padding: 10px;
           position: relative;
           top: 80px;
           left: 120px;
           box-shadow: 2px 2px 5px grey;
        }
        h1{  position: relative;
             top: 15px;
             font-size: 40px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: grey;
        }

    </style>
<body>
    <form action="{{route('insert.user')}}" method="post">
      @csrf
      <h1>New User</h1>
      <label for="name">Name:-</label>
      <input type="text" placeholder="enter username" name="username"><br><br>
      <label for="name">Email:-</label>
      <input type="text" placeholder="enter useremail" name="email"><br><br>
      <label id="feed" for="name">Feedback:-</label><br>
      <textarea name="feedback"  cols="45" rows="10" placeholder="give some feedback"></textarea><br><br>
      <button>Add</button>
      <a href="{{route('view')}}">Back</a>

    </form>
</body>
</html>