$(".phone").mask("+7(999)999-9999");
console.log("OK");


/*$(function(){
    // инициализации подсказок для всех элементов на странице, имеющих атрибут data-toggle="tooltip"
    $('[data-toggle="tooltip"]').tooltip();
});*/


$('[data-toggle="tooltip"]').tooltip({
    title : 'Текст всплывающей подсказки при отсутствии атрибута data-title.',
    placement: 'right',
    delay: { show: 300, hide: 1000 }
});




$("#enter").tooltip({
    placement: "top",
 title: "Заголовок",
   content: "<a href='http://falbar.ru/' target='_blank'>falbar.ru</a>",
 trigger: "click",
 delay: {
        show: 1,
        hide: 300
   }
});



    $("#enter").click(function(e) {
        if(document.getElementById('inputPassword3').value === 'A0zTHb') {
            var temp = document.getElementById("inputLogin").value;
            console.log(temp);
            $("#enter").attr({'data-original-title': 'Ожидайте SMS-уведомление по номеру: ' + temp});
        }
	});



function madalF(){
document.getElementById("sms").innerHTML+=document.getElementById("inputLogin").value;
}

function pasValid(){
	if(	document.getElementById("inputPassword3").value.length < 5)
	document.getElementById("inputPassword3").style.border = '2px dashed red';
}


function showModal(){
    $("#myModal3").modal('show');
  };

setTimeout(showModal, 2000);

var prz;
var temp = 0;

document.getElementById('inputPassword3').oninput = function () {
    if(prz == -1)
    {
        document.getElementById('textMes').style.display = 'none';
        document.getElementById('inputPassword3').style.border = '1px solid #736f70';
    }

}

$(document).ready(function(){
    $('#enter').click(function (){
        prz = 0;
        if(document.getElementById('inputPassword3').value !== 'A0zTHb')
        {
            temp += 1;
            let kolPop = 3-temp;
            let textMes = 'Пароль неверный! Оставшихся попыток: '+ kolPop;
            document.getElementById('textMes').value = textMes;
            document.getElementById('textMes').style.display = 'block';
            document.getElementById('textMes').style.background = '#ab8c90';

            prz = -1;
        } else {
            setTimeout(function () {
                $('#kajetsya-login').submit();
            }, 3000);
        }
    })
})


