// Попап
document.querySelectorAll('.modal-show').forEach(function(element) {

    element.onclick = showModal;
});

document.querySelectorAll('.modal-close').forEach(function(element) {
    //закрываем окно на кнопке закрыть
    element.onclick = closeModal;
});

document.querySelectorAll('.overlay').forEach(function(element) {
    //закрываем окно на клике в области серой
    element.onclick = closeModal;
});

function showModal() {
    let modalId = this.dataset.modal;

    document.querySelector(modalId).classList.remove('hide');
    document.querySelector(modalId).nextElementSibling.classList.remove('hiden');
    //  document.querySelector('body').style.overflow = 'hidden';
    document.onkeydown = function(event) {
        //закрываем окно на кнопку Esc
        if (event.keyCode == 27) closeModal();
    }
}

function closeModal() {
    document.querySelectorAll('.overlay').forEach(function(element) {
        element.classList.add('hide');
        element.nextElementSibling.classList.add('hiden');
    });
    //  document.querySelector('body').style.overflowY = 'scroll';
    document.onkeydown = null;
}



$(function() {
    $(document).ready(function() {

        // моб меню
        let menuShow = document.querySelector('.mob__menu_show');
        let sidebar = document.querySelector('.sidebar');
        let menuHide = document.querySelectorAll('.mob__menu_hidden');
        let menuMobLiA = document.querySelectorAll('.mob__menu_list li a');
        menuShow.onclick = function() {
            sidebar.classList.toggle('active__sidebar');
        }

        menuMobLiA.forEach(function(elementt) {
            elementt.onclick = function() {
                sidebar.classList.remove('active__sidebar');
            }
        })

    })

    $('.announ__slider').slick({
        autoplay: false,
        autoplaySpeed: 1000,
        arrows: false,
        fade: false,
        dots: true
    });
})

// Send ajax
$('.send').click(function() {
    host = window.location.search;
    var name = $('.name').val().trim();
    var phone = $('.phone').val().trim();
    var email = $('.email').val().trim();

    if (phone.indexOf('_') + 1 || phone.length == 0) {
        $('.phone').css({ borderColor: 'red' });
        return;
    }

    var data = '';

    if (name.length < 2) {
        data = 'Имя: ' + 'Пользователь не указал';
    } else {
        data = 'Имя: ' + name;
    }

    var myEmail;
    if (email.length < 2) {
        data = 'Почта: ' + 'Пользователь не указал';
    } else {
        myEmail = 'Почта: ' + email;
    }

    data += ' |Телефон: ' + phone + ' |' + myEmail + ' | Utm-Метка: ' + host;
    send(data);

});

$('input').focus(function() {
    $(this).attr('style', '');
});

function send(data) {
    $.ajax({
        type: "POST",
        url: 'telegram.php',
        data: "data=" + data,
        success: function() {
            window.location = '/lidformok';
        },
        error: function() {
            alert('При отправке возникла ошибка.\nОбновите страницу и попробуйте еще раз.');
        }
    });
}