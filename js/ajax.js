const forms = document.querySelectorAll('form');

const message = {
    loading: 'img/form/spinner.svg'
};

forms.forEach(item => {
    postData(item);
});

const fields = {
    name:'Имя заказчика:  ',
    phone:'Телефон заказчика:  ',
    color:'Подходящий цвет:  ',
    mount:'Монтаж:  ',
    unmount:'Демонтаж старого окна:  ',
    windowTrim:'Внутренняя отделка окна:  ',
    month:'Установка в течении месяца:  ',
}

function postData(form) {
    form.addEventListener('submit', (e) => {

        e.preventDefault();

        const token = '5515560924:AAGPqmW-9XHWkD7P_5s5RY-mZAiI8RFDmOU'

        const chat_id = '-728403851'

        const parse_mode = 'html'

        const url = `https://api.telegram.org/bot${token}/sendMessage`



        const statusMessage = document.createElement('img');
        statusMessage.src = message.loading;
        statusMessage.style.cssText = `
               display: block;
               margin: 0 auto;
        `;
        form.append(statusMessage);

        const request = new XMLHttpRequest();
        request.open('POST', url,true);

        request.setRequestHeader('Content-type', 'application/json');
        const formData = new FormData(form);

        const array = [];
        formData.forEach(function (value, key) {
            array.push(`<b>${fields[key]}</b><b><i>${value === '1'? 'Да': value ==='0'?'Нет': value}</i></b>\n\n`);
        });

        const text = form.dataset.valueName?`<b>${form.dataset.valueName}</b>\n\n\n`+array.join(''):array.join('')

        const json = JSON.stringify({
            chat_id,
            parse_mode,
            text
        });

        console.log(json)

        request.send(json);
        console.log(request)

        request.addEventListener('load', () => {
            if (request.status === 200) {
                console.log(request.response);
                swal("Спасибо!", "Скоро мы с вами свяжемся", "success");
                form.reset();
                setTimeout(() => {
                    statusMessage.remove();
                }, 2000);
            } else {
                swal("Ой!", "Что-то пошло не так...", "error");
            }
        });
    });
}

function showThanks(message) {

    const thanksModal = document.createElement('div');
    thanksModal.classList.add('inputForm');
    thanksModal.innerHTML = `
    <div class="input">
    <div class="formText">${message}</div>
    </div>
`;

    document.querySelector('.form').append(thanksModal);
}


