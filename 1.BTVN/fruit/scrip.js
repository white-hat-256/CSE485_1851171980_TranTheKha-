var JFruit=document.getElementById('txtFruit');
var JShowFruit=document.getElementById('btnShowFruit');
var Jimage=document.getElementsByTagName('img');

JShowFruit.addEventListener("click",displayFruit);

 function displayFruit(){
     if(JFruit.value == ''){
         alert('nhap gia tri di');
     }
     else{
        var fruitList = ['banana', 'orange', 'cherry', 'coconut', 'mango', 'peach'];
        for(var i=0;i<fruitList.length;i++){
            if(JFruit.value == fruitList[i]){
                Jimage[0].src='images/'+ JFruit.value +'.jpg';
                break;
            }
            else {
                if (i == fruitList.length - 1){
                    alert("không tìm thấy!");
                }   
        }
     }
 }
}