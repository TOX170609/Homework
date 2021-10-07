<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href=
        <?php
        $date = date_default_timezone_set('Europe/Moscow');
        if(($date > 00) && ($date < 06)){
            $style = 'styles/styles_night.css';
        } else {
            $style = 'styles/styles_day.css';
        }
        echo "$style"
        ?>
    >
    <title>Homework</title>
</head>
<body>
<header class="header">
    <h1>Домашняя работа</h1>
    <div class="flex_menu">
        <div class="top">
            <a href="image.html" target="_blank" style="text-decoration: none" class="two">Таблица</a>
        </div>
        <div class="top">
            <a href=# style="text-decoration: none" class="two">Авторизация</a>
        </div>
    </div>
</header>
<main>
    <div class="grid1">
        <div class="Me" title="Marmaris,2021">
            <a href="https://www.google.com/maps/place/%D0%9C%D0%B0%D1%80%D0%BC%D0%B0%D1%80%D0%B8%D1%81,
    +%D0%9C%D1%83%D0%B3%D0%BB%D0%B0,+%D0%A2%D1%83%D1%80%D1%86%D0%B8%D1%8F/@36.8481181,28.2439359,6927m/data=!3m2!1e3!4b1!4m5!3m4!1s0x14
    bfbdbff1961523:0xdf8e730ed1eeb2be!8m2!3d36.8549692!4d28.2709122?hl=ru"><img src="images/Me.JPG">
            </a>
        </div>
        <div class="Name" align="center">Булдаков Антон</div>
        <div class="Info" align="center">Мне 32 года, женат, работаю на ПАО «ММК» менеджером по развитию первого
            передела в
            группе
            главного металлурга, по образованию инженер-металлург.
            <br> В 2009 году с отличием закончил Индустриальный
            колледж им. Н.И. Макарова по профессии техник-металлург, в 2016 году заочно закончил МГТУ им. Г.И. Носова по
            профессии инженер-металлург. В свободное время работаю помощником депутата по 17 избирательному округу
            Магнитогорского городского собрания депутатов, занимаюсь спортом, бег, велосипед, тренажерный зал.
            <br>Владею английским языком на уровне intermediate, на выходных по возможности участвую в разговорных
            клубах
            (для
            подержания навыков).
        </div>
        <div class="Feedback" align="center">Уроки проходят в хорошем темпе, подобралась хорошая группа, Регина
            терпеливая,
            вежливая и
            умная девушка которая старается подать информацию таким образом что после пояснения практически не остается
            вопросов.
            <br>На данный момент могу сказать, что я очень доволен проходящим обучением. Рад тому моменту что
            обучение пришлось на осень, погода на улице не отвлекает от рабочего процесса, ведь какой бы ты
            целеустремленный
            не был всегда есть отвлекающие факторы, сейчас их меньше. Теперь главное не отстать.
        </div>
    </div>
    <div class="was">Где побывал</div>
    <div class="flex_info">
        <div class="block_element">
            <div class="picture_1">
                <a href="https://www.architime.ru/specarch/suryavarman/angkor_wat.htm#1.jpg">
                    <img src="images/Cambodgia.jpg" alt="" width="100%">
                </a>
            </div>
            <div class="text">
                Ангко́р-Ват прибл. перевод — «столичный храм»; возможный перевод «обитель Вишну») — храмовый комплекс в
                честь бога Вишну, построенный королём Сурьяварманом II в первой половине XII века в области Ангкор,
                провинции Сиемреап на севере Камбоджи, в окрестностях Великого озера, где в XI—XIV веках находился район
                столиц Ангкорской империи и резиденций древних кхмерских царей.
            </div>
        </div>
        <div class="block_element">
            <div class="picture_1">
                <a href="https://2banana.com/o-strane/ekskursii-v-dominikane/gorod-khudozhnikov-dominikana">
                    <img src="images/Dominik.JPG" alt="" width="100%">
                </a>
            </div>
            <div class="text">
                д. Альтос-де-Чавон (исп. Altos de Chavón) — искусственно воссозданная средневековая территория — точная
                копия испанской деревни XV века, называемый городом художников и ремесленников. В городке есть несколько
                каменных улочек, центральная площадь, школа живописи, амфитеатр и церковь святого Станислава, в которой
                венчались многие звёзды. Одними из них были знаменитый Майкл Джексон и Луиза Пресли.
            </div>
        </div>
        <div class="block_element">
            <div class="picture_1">
                <a href="http://recstar.ru/reklamniy-rolik/gde-snimali-reklamu-bounty.html">
                    <img src="images/Saona.jpg" alt="" width="100%">
                </a>
            </div>
            <div class="text">
                Саона — самый крупный остров, относящийся к провинции Доминиканской республики Ла-Романа. Остров открыт
                Христофором Колумбом во время второй экспедиции 14 сентября 1494. На острове множество пещер, ранее
                использовавшихся индейцами тайно. Самая известная — легендарная пещера Котубанама, названная так по
                имени вождя, который в начале XVI века, спасаясь от испанцев, нашёл убежище в этой пещере.
            </div>
        </div>
        <div class="block_element">
            <div class="picture_1">
                <a href="https://www.earthcam.com/world/ireland/dublin/?cam=templebar">
                    <img src="images/Ireland.JPG" alt="" width="100%">
                </a>
            </div>
            <div class="text">
                Темпл-Бар — один из старейших районов Дублина, на территории которого располагается множество пабов и
                магазинов. В Средние века район назывался приходом Св. Андрея. Он опустел в XIV веке и вновь начал
                развиваться в XVII, когда и появилось современное название. В 1991 году правительством была создана
                некоммерческая компания для надзора за этим культурным кварталом Дублина.
            </div>
        </div>
    </div>
    <div class="will">Где мечтаю побывать</div>
    <div class="container">
        <div class="grid">
            <div class="picture_1">
                <a href="https://ru.wikipedia.org/wiki/Хоббитон_(достопримечательность)#:~:text=Хоббитон%20—%20знаменитое%20место%20в,время%20по%20Хоббитону%20проводятся%20экскурсии">
                    <img src="images/hobbiton.jpg" alt="" width="100%">
                </a>
            </div>
            <div class="text">
                Хоббитон — знаменитое место в Новой Зеландии, наиболее знаменитое проходившими на его территории
                съёмками трилогий «Властелин колец» и «Хоббит». Хоббитон расположен на семейной ферме примерно в 8 км к
                западу от Хинуэры и в 10 км к юго-западу от Матаматы, в Вайкато, и в настоящее время является знаменитым
                туристическим местом. Экскурсии по Хоббитону (по территории площадью в 5,5 га), начались в 2002 году и
                проводятся ежедневно до сих пор. Двухчасовая экскурсия и сейчас очень популярна, поэтому чтобы попасть в
                Хоббитон часто нужно бронировать заранее.
            </div>
        </div>
        <div class="grid">
            <div class="picture_1">
                <a href="https://ru.wikipedia.org/wiki/Лос-Анджелес">
                    <img src="images/Los.jpg" alt="" width="100%">
                </a>
            </div>
            <div class="text">
                Лос-А́нджелес— город в США на юге штата Калифорния, находящийся на берегу Тихого океана. Крупнейший по
                численности населения в штате и второй — в стране (на 1 июля 2009 года — 3 831 868 жителей). Город
                является административным центром одноимённого округа, а также центром Большого Лос-Анджелеса —
                агломерации с населением более 17 млн человек. Жителей Лос-Анджелеса называют«Angelenos». Лос-Анджелес
                является одним из крупнейших мировых культурных, научных, экономических, образовательных центров. Также
                город — один из крупнейших мировых центров индустрии развлечений в сфере кино, театра, музыки,
                литературы и телевидения.
            </div>
        </div>
        <div class="grid">
            <div class="picture_1">
                <a href="https://ru.wikipedia.org/wiki/Лондон">
                    <img src="images/London.jpg" alt="" width="100%">
                </a>
            </div>
            <div class="text">
                Ло́ндон — столица и крупнейший город Соединённого Королевства Великобритании и Северной Ирландии.
                Административно образует регион Англии Большой Лондон, разделённый на 33 самоуправляемых территории.
                Образует агломерацию Большой Лондон и более обширный метрополитенский район. Расположен на юго-востоке
                острова Великобритания, на равнине в устье Темзы, вблизи Северного моря. Главный политический,
                экономический и культурный центр Соединённого Королевства. Лондон относится к глобальным городам высшего
                ранга и ведущим мировым финансовым центрам. Экономика его составляет пятую часть экономики страны.
                Исторический центр города сложился в викторианскую эпоху.
            </div>
        </div>
        <div class="grid">
            <div class="picture_1">
                <a href="https://ru.wikipedia.org/wiki/Мельбурн">
                    <img src="images/Melburn.jpg" alt="" width="100%">
                </a>
            </div>
            <div class="text">
                Ме́льбурн — второй по величине город Австралии после Сиднея, столица штата Виктория, расположившаяся
                вокруг залива Порт-Филлип. Численность населения с пригородами составляет около 4 246 345 человек.
                Мельбурн — самый южный город-миллионер в мире. Город считается одним из основных коммерческих,
                промышленных и культурных центров Австралии. Мельбурн также часто называют «спортивной и культурной
                столицей» страны, так как в нём проходят многие спортивные и культурные события в жизни Австралии. Город
                знаменит своим сочетанием викторианской и современной архитектур, многочисленными парками и садами,
                многоликим и многонациональным населением.
            </div>
        </div>
    </div>
</main>
<div class="footer">
    <h2>Created by Antony</h2>
</div>
</body>
</html>