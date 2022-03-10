<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container" id="main-container">
        @yield('content')
    </div>
</body>
</html>

<script>
function removeAllOpt(opt , index){
    for(let i=0; i<opt.length; i++){
        if(i!=index)
            opt[i].style.display="none";
    }
}

function showOpt(index){
    let opt = document.querySelectorAll('.sub-menu-options');
    console.log(opt.length);
    removeAllOpt(opt,index);

    if(opt[index].style.display=="flex")
        opt[index].style.display="none";
    else
        opt[index].style.display="flex";
}

function confirmBox(index){
    let box = document.querySelectorAll('.confirm-delete');
    box[index].style.display="block";
}

function leaveDelete(){
    let box = document.querySelectorAll('.confirm-delete');
    let opt = document.querySelectorAll('.sub-menu-options');
    for(let i=0; i<box.length; i++)
        box[i].style.display="none";

    removeAllOpt(opt , -1);
}
</script>
