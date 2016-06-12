var hw=document.getElementById('btn_insert');
hw.addEventListener('click',function(){
location.replace("http://localhost/FireBird/insertPage.php");
});

var hw2=document.getElementById('btn_delete');
hw2.addEventListener('click',function () {
    location.replace("http://localhost/FireBird/deletePage.php");
})

var hw3=document.getElementById('btn_ranking');
hw3.addEventListener('click',function(){
    location.replace("http://localhost/FireBird/ranking.php");
})