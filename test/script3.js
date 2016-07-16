var hw4=document.getElementById('btn_test');
hw4.addEventListener('click',function(){
    var msg="this is confirm"+"/n"+"Click btn";
    if(!confirm(msg))return;
    document.getElementById("here").innerHTML= "Hi test document";
    
document.getElementById("time").innerHTML='Year~~~~~';
})

