window.onload = function () {
    let score = 0;
    let step = 0;
    function showQuestion() { //функция, которая генерирует вопросы
        //подготавливает классы для заполнения
        let div = document.createElement('div');
        div.classList.add('Test');
        div.innerHTML = `<div class="question"></div><center><div class="answer"></div></center>`;
        document.querySelector('.overlay').appendChild(div);
        //заносит содержание вопроса и вариантов ответа
        document.querySelector('.question').innerHTML = questions[step]['q'];
        let answer = '';
        let number_answer = 0;
        for (let key in questions[step]['answers']) {
            answer += `<div data-v='${number_answer}' class="answer-variant">${questions[step]['answers'][number_answer]}</div>`;
            number_answer++;
        }
        document.querySelector('.answer').innerHTML = answer;
    }


    function  show_description(ans) { //функция для генерирования описания к результату ответа на вопрос
        document.querySelector('.Test').remove();
        let div = document.createElement('div');
        if (ans) {
            div.classList.add('answer_description_t');
            div.innerHTML = 'Верно!<br>' + questions[step]['description'];
        } else {
            div.classList.add('answer_description_f');
            div.innerHTML = 'Ошибочка!<br>' + questions[step]['description'];
        }
        document.querySelector('.overlay').appendChild(div);

        let nextanswer_button = document.createElement('button');
        if (step + 1 === questions.length) {
            nextanswer_button.innerHTML = 'Окончить тест';
        } else nextanswer_button.innerHTML = 'Следующий вопрос';
        nextanswer_button.classList.add('nextanswer_button');
        document.querySelector('.overlay').appendChild(nextanswer_button);
    }

    document.onclick = function (event) { //обработка нажатий
        event.stopPropagation();
        if (event.target.classList.contains('knopka')) { //для создания теста
            document.querySelector('.knopka').remove();
            showQuestion();
        }
        else if (event.target.classList.contains('answer-variant') && step < questions.length) { //для остановки
            if (event.target.dataset.v == questions[step]['true_answer']) {
                score++;
                show_description(true);
            } else show_description(false);

        }
        else if (event.target.classList.contains('reload-button')) { //для перезапуска
            location.reload();
        } else if (event.target.classList.contains('nextanswer_button')) { //для перехода к следующему вопросу после описания ответа
            step++;
            try {
                document.querySelector('.answer_description_t').remove();
            } catch (e) {
                document.querySelector('.answer_description_f').remove();
            }
            document.querySelector('.overlay').innerHTML = '';
            if (step === questions.length) {
                showResult();
            }
            else {
                showQuestion();
            }
        }
    }
    function find_status() { //возвращает фразу, которая характеризует знания
        let status = 0;
        for (let i in answers) {
            if (Object.keys(answers[i])[0] <= score)
                status = Object.values(answers[i])[0];
        }
        return status
    }
    function showResult() { //показывает результаты
        let div = document.createElement('div');
        div.classList.add('result');
        div.innerHTML = find_status() + '<br>Твои баллы: ' + score + ' из ' + questions.length;
        document.querySelector('.overlay').appendChild(div);

        let reloadButton = document.createElement('button');
        reloadButton.innerHTML = 'Конец';
        reloadButton.classList.add('reload-button');
        document.querySelector('.overlay').appendChild(reloadButton);
    }
}

