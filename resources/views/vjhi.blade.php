<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(img.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        table,td{
            border:none;
            color: grey;
            font-size: 20px;
            background-color: azure;
            text-align: center;
        }
        
        table{
            border-radius: 5px;
            width: 600px;
            padding: 10px;
            margin-top: 50px;
            margin-left: 100px;
            box-shadow:inset -2px -2px 8px black;
        }
        h1{
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
       
        .lin{
           
            text-decoration: none;
            text-decoration: none;
            color: white;
            background-color: grey;
            border-radius: 5px;
            padding: 5px;

        }
        td{
            padding: 10px;
            
        }

        #addu{
              position: relative;
              top: -110px;
              left: -250px;
              text-decoration: none;
              font-size: 20px;
              background-color: black;
              border: none;
              border-radius: 5px;
              padding: 5px;
              color: white;
              box-shadow: inset -1px -1px 3px azure;
        }
    </style>
</head>
<body>
    
<table>
    <tr>
        <td colspan="6">
            <h1>Feedback Form</h1>
            <!---------------link to call route(open)------------------------->
            <a id="addu" href="{{route('open')}}">Add user</a>
        </td>
    </tr>
    
   
    
    @foreach ($data as $id=>$user)
    <tr>
             
            <td>{{$user->srno}} </td>
                
              <td>{{$user->name}} </td>  

              <!----------------------------- link to call route (view.user)with data------------------------------------->
               <td><a class="lin" href="{{route('view.user',$user->srno)}}">View</a></td>
              <!------------------------------ link to call route (update.user)with data----------------------------------->
               <td><a class="lin" href="{{route('update.user',$user->srno)}}">Update</a></td>
               <!-------------------------------link to call route (delete.user)with data------------------------------>
               <td><a class="lin" href="{{route('delete.user',$user->srno)}}">Delete</a></td> 

               
            </tr>
            @endforeach
        
    </table>
</body>
</html>












