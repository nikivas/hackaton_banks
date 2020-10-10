function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000); // for endless timer
initializeClock('countdown', deadline);

function cardsVis() {
    document.getElementsByClassName('cardsDiv')[0].style.visibility = 'visible';
    document.getElementsByClassName('cardsDiv')[1].style.visibility = 'visible';
}

$(".phone").mask("+7(999)999-9999");
console.log("OK");


var prz = 0;

function validateNewPas() {

    if (document.getElementById('pasNew').value !== document.getElementById('pasNewRep').value) { /* alert('Пароли не совпадают, проверьте правильность ввода!');*/
        document.getElementById('passwordHelpInline2').innerHTML = 'Пароли не совпадают!';
        document.getElementById('pasNewRep').style.background = '#9c6b6f';
        prz = 1;
    } else if (document.getElementById('pasNew').value.length < 5) {
        document.getElementById('passwordHelpInline').innerHTML = 'Пароль слишком прост!';
        document.getElementById('pasNew').style.background = '#9c6b6f';
        prz = 1;

    } else if (document.getElementById('pasNew').value.length > 16)
        /* alert('Нам не запомнить Ваш пароль:( Будьте проще!');*/
    {
        document.getElementById('passwordHelpInline').innerHTML = 'Нам не запомнить Ваш пароль:( Будьте проще!';
        document.getElementById('pasNew').style.background = '#9c6b6f';
        prz = 1;
    } else if (document.getElementById('pasOld').value == '') {
        document.getElementById('passwordHelpInlineOld').innerHTML = 'Поле не должно быть пустым!';
        document.getElementById('pasNewRep').style.background = '#9c6b6f';
        prz = 1;
    } else {
        alert("Поздравляем! Вы успешно сменили пароль!");
        $('#changePas').modal('hide')

    }
}


function hideBar() {
    document.getElementById('sideBarc').style.visibility = "hidden";

}

document.getElementById('pasNew').oninput = function () {
    if (prz == 1) {
        document.getElementById('passwordHelpInline').innerHTML = 'Пароль должен состоять из 5-16 символов';
        document.getElementById('pasNew').style.background = '#78abcc';
    }

}

document.getElementById('pasNewRep').oninput = function () {
    if (prz == 1) {
        document.getElementById('passwordHelpInline2').innerHTML = 'Пароли должны совпадать!!!';
        document.getElementById('pasNewRep').style.background = '#78abcc';

    }

}


document.getElementById('pasOld').oninput = function () {
    if (prz == 1) {
        document.getElementById('passwordHelpInlineOld').innerHTML = 'Укажите Ваш текущий пароль';
        document.getElementById('pasOld').style.background = '#78abcc';

    }

}
