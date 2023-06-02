let count = 1
document.getElementById("radio1").chec = true;

setInterval( function(){

}, 5000)

function nextImage(){
    count++;
    if(count>4){
     count = 1;
    }

    document.getElementById("radio"+count).checcked = true;
}