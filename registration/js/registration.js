var popupStart = document.getElementById('popupStart');
var startForm = document.getElementById('loginForm');
var body = document.body;

// Перевірка, чи вже було викликано anima
if (!localStorage.getItem('wasAnima')) {
    anima();
    localStorage.setItem('wasAnima', 'hi there');
}

function anima() {
    popupStart.style.opacity = "1";
    document.querySelector('.popup_login').style.pointerEvents = "none";
    popupStart.classList.add('startStart');
    body.classList.remove('popupOpen');
    body.classList.add('lock');

    setTimeout(function () {
        popupStart.classList.remove('startStart');
        popupStart.style.opacity = "0";
        document.querySelector('.popup_login').style.pointerEvents = "all";
        body.classList.add('popupOpen');
        body.classList.remove('lock');
    }, 13000);
}