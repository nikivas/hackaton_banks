function funct1()
{
	var s = document.getElementById("customRange1").value;

	document.getElementById("rangeV").value = s;
} 

$('[data-toggle="tooltip"]').tooltip({
    title : 'Текст всплывающей подсказки при отсутствии атрибута data-title.',
    placement: 'right',
    delay: { show: 300, hide: 500 }
});

/*function checkingVoice(){
	
		$('#voiceCol').collapse()


	}*/

$('#voice').change(function(){
    if(this.checked==true){
          $("#voiceCol").collapse('show');
          document.getElementById("higher").max=document.getElementById("rangeV").value;
	      document.getElementById("lower").max=document.getElementById("rangeV").value;
     }
  else{
        $("#voiceCol").collapse('hide');
  }
});

$('#video').change(function(){
    if(this.checked==true){
          $("#videoCol").collapse('show');
     }
  else{
        $("#videoCol").collapse('hide');
  }
});

function lowerF()
{
	console.log("lower работает");
	var s = document.getElementById("lower").value;
	document.getElementById("lowerNum").value = s;
} 

function higherF()
{
	var s = document.getElementById("higher").value;
	document.getElementById("higherNum").value = s;
} 

function lowerSl()
{
	var s = document.getElementById("lowerNum").value;
	document.getElementById("lower").value = s;
} 

function higherSl()
{
	var s = document.getElementById("higherNum").value;
	document.getElementById("higher").value = s;
} 