var button = document.getElementById('com');
var list = document.getElementsByClassName('list');
var arr = [].slice.call( list );
var del = document.getElementsByClassName('del');
var delBut = [].slice.call( del );
console.log(delBut);
button.addEventListener('click',function(){

    arr.forEach(function(value){
        if(value.style.display == 'block'){
            value.style.display = 'none';

            button.innerHTML = "Show comments";
        }else {
            value.style.display = 'block';

            button.innerHTML = "Hide comments";
        }
    });
});
