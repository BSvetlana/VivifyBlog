var button = document.getElementById('com');
var list = document.getElementsByClassName('list');
var arr = [].slice.call( list );
var del = document.getElementsByClassName('del');
var delBut = [].slice.call( del );

button.addEventListener('click',function(){

    arr.forEach(function(value){
        if(value.style.display !== 'none') {
            value.style.display = 'none';

            button.innerHTML = "Show comments";
        } else {
            value.style.display = 'block';

            button.innerHTML = "Hide comments";
        }
    });
});
var dng = document.getElementsByClassName('alert');
//console.log(dng[0].style);
function required()
{
    var name =document.forms["myForm"]["name"].value;
    var com =document.forms["myForm"]["content"].value;
    var isFormValid = false;
    if (name==null || name=="")
    {
        dng[0].style.display = 'block';

        isFormValid = false;
    }
    else
    {
        dng[0].style.display = 'none';
        isFormValid =  true;
    }

    if (com==null || com=="")
    {
        dng[1].style.display = 'block';

        isFormValid = false;
    }
    else
    {
        dng[1].style.display = 'none';
        isFormValid = true;
    }

    return isFormValid;
}
