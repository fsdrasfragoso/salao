<html lang="pt-br">

<head>
    <title>upload</title>
    
</head>      
<body>
    <form action="{{URL::to('/store')}}" enctype="multipart/form-data" method="post">
    <input type="file" name="image" valeu="">
    <input type="hidden" name="_token" value="{{csrf_token()}}">    
        <br/>
    <button type="submit" name="button">Upload</button>    
    
    </form> 

    
</body>
</html>    