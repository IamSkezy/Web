const questions = [
    {
        'q' : 'В каком году был основан Нижний Новгород?',
        'answers' : [
            '1147',
            '1221',
            "1152"
        ],
        'description' : 'Нижний Новгород был основан князем Юрием Всеволодовичем в 1221 году.',
        'true_answer' : '1'
    },
    {
        'q' : 'Как в 1238г. Нижний Новгород справился с монголо–татарским нашествием?',
        'answers' : [
            'Потерпели поражение',
             'Силы были на стороне народов Поволжья, и Нижний Новгород вышел победителем',
            "Несмотря на перевес в сторону татаро-монголов, город захватить не удалось"
        ],
        'description' : 'Князь Георгий Всеволодович одним из первых вступил в бой с конницей вторгшихся в пределы русских земель четырнадцати туменов Чингизидов Орды и пал в неравной битве.',
        'true_answer' : '0'
    },    {
        'q' : 'В составе чего находился Нижний Новгород после 1341 года?',
        'answers' : [
            'Владимиро-Суздальского княжества',
            'Нижегородско-Суздальского великого княжества',
            "Московского княжества"
        ],
        'description' : 'Нижний Новгород и Городец передали суздальскому князю Константину Васильевичу.',
        'true_answer' : '1'
    },    {
        'q' : 'Из-за чего в 1392 году нижегородские бояре поддержали присоединение Нижнего Новгорода к Москве?',
        'answers' : [
            'Из-за нежелания служить своему князю',
            'Из-за влияния орды',
            "Они не поддержали присоединение"
        ],
        'description' : 'Они не пожелали служить князю Борису Константиновичу.',
        'true_answer' : '0'
    },    {
        'q' : 'К какому году относят заложение строительства каменных стен Нижегородского Кремля?',
        'answers' : [
            '1404',
            '1508',
            "1616"
        ],
        'description' : 'В 1508 году был заложен каменный кремль взамен деревянного и построен в 1515 году.',
        'true_answer' : '1'
    },    {
        'q' : 'В какие годы в Нижнем Новгороде начала складываться и действовать крупнейшая в стране Макарьевская ярмарка?',
        'answers' : [
             'В 1620-е годы',
            'В 1640-е годы',
            "В 1660-е годы"
        ],
        'description' : 'В 1620-е годы здесь складывается и действует крупнейшая в стране Макарьевская ярмарка',
        'true_answer' : '0'
    },    {
        'q' : 'Когда была восстановлена самостоятельность Нижегородской губернии?',
        'answers' : [
            'В 1714 году',
            'В 1717 году',
            "В 1719 году"
        ],
        'description' : 'в 1714 году Нижегородская провинция стала самостоятельной, но в конце 1717 вновь была отдана в управление казанского губернатора.',
        'true_answer' : '0'
    },    {
        'q' : 'Почему «всероссийское торжище» в 1822 году перенесли на Стрелицу Оки и Волги?',
        'answers' : [
            'Из-за разрастания Макарьевского комплекса',
            'Из-за утраты Макарьевского комплекса при пожаре',
            "По решению купцов"
        ],
        'description' : 'В 1816 году в Макарьеве сгорел комплекс ярмарки. В 1822 году «всероссийское торжище» перенесли на Стрелицу Оки и Волги под Нижний Новгород.',
        'true_answer' : '1'
    },  {
        'q': 'С какого завода 1 марта 1917 началось протестное шествие рабочих?',
        'answers': [
            'С Сормовского',
            'С Мызинского',
            "С Автозаводского"
        ],
        'description': 'Утром этого дня рабочие Сормовского завода собрались на многотысячный митинг',
        'true_answer' : '0'
    }, {
        'q': 'Как назывался Нижний Новгород с 1932 по 1990?',
        'answers': [
            'Он не переименовывался в этот период',
            'Великий Новгород',
            "Горький"
        ],
        'description': 'В октябре 1932 года в истории Нижнего Новгорода произошли изменения — город переименовывается в Горький в честь 40-летия литературной деятельности писателя.',
        'true_answer' : '2'
    }, {
        'q': 'Когда был заложен первый камень Горьковского автозавода?',
        'answers': [
            'В 1927 году',
            'В 1930 году',
            "В 1932 году"
        ],
        'description': 'В 1930 году состоялась закладка первого камня Горьковского автозавода.',
        'true_answer' : '1'
    }, {
        'q': 'Почему Горький закрыли для посещения иностранных граждан?',
        'answers': [
            'Из-за очень сильных национальных настроений коренных жителей',
            'Он был стратегически важным и привлекал внимания иностранных спецслужб',
            "Временно закрыли из-за нахождения в городе главных членов КПСС"
        ],
        'description': 'Оборонные предприятия привлекали внимание иностранных спецслужб. Это послужило причиной закрытия города 4 августа 1959 года для посещения иностранцами.',
        'true_answer' : '1'
    },  {
        'q': 'Сколько станций нижегородского метрополитена было при его открытии?',
        'answers': [
            '5',
            '6',
            "7"
        ],
        'description': 'В пусковой комплекс участка первой очереди вошла линия с 6 станциями: «Московская», «Чкаловская», «Ленинская», «Заречная», «Двигатель Революции» и «Пролетарская».',
        'true_answer' : '1'
    }
];