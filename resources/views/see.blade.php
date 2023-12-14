<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table,td{
            border:none;
            color: white;
            font-size: 25px;
            background-color: darkgray;
            
        }
        body{
            background-color:azure;
        }
        table{
             width: 1000px;
             height: 600px;
            margin: 50px;
            margin-left: 250px;
            box-shadow: 7px 7px 5px gray;
            border-radius: 5px;
            padding: 10px;
        }
        a{
            
           text-decoration: none;
           color: white;
           background-color: black;
           padding: 5px;
           padding-left: 300px;
           padding-right: 300px;
           border: none;
           border-radius: 10px;
           box-shadow: inset -2px -2px 5px gray;
           margin-left: 150px;
          
           
        }
        .sam{
           background-color: cadetblue;
           padding: 2px;
           border-radius: 5px;
        }
        th{
            font-size: 40px;
        }

       
    </style>
<body>
    <table>
        <th colspan="2">Personal Data</th>
        @foreach($data as $id=>$user )
        <tr>
            <td>Name:-</td>
            <td class="sam">{{$user->name}}</td>
        </tr>
        <tr>
            <td>Email:-</td>
            <td class="sam">{{$user->email}}</td>
        </tr>
        <tr>
            <td>Feedback:-</td>
            <td class="sam">{{$user->feed}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="2"  ><a  href="{{route('view')}}">back</a></td>
        </tr>
    </table>
</body>
</html>