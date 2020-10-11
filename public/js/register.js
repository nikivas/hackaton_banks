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
    var temp = document.getElementById("inputLogin").value;
    console.log(temp);
 	$("#enter").attr({'data-original-title': 'Ожидайте SMS-уведомление по номеру: '+temp});
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



