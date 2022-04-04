<x-site-layout>
    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img data-src="{{ asset('images/laravel-logo.png') }}"
                                    class="img-responsive lazyload"
                                    alt="Логотип Laravel"
                                >
                            </div>
                            <div class="swiper-slide">
                                <img data-src="{{ asset('images/yii2-logo.jpg') }}"
                                    class="img-responsive lazyload"
                                    alt="Логотип Yii2"
                                >
                            </div>
                            <div class="swiper-slide">
                                <img data-src="{{ asset('images/symfony-logo.png') }}"
                                    class="img-responsive lazyload"
                                    alt="Логотип Symfony"
                                >
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="portfolio-info">
                        <h3>Краткая информация</h3>
                        <ul>
                            <li><strong>Фамилия</strong>: Асташенков</li>
                            <li><strong>Имя</strong>: Алексей</li>
                            <li><strong>Профессия</strong>: инженер-программист</li>
                            <li><strong>Stack</strong>: HTML, CSS, JS, PHP, Laravel, Yii2, Symfony</li>
                            <li><strong>Дата рождения</strong>: 31 октября, 1984</li>
                            <li><strong>Сайт</strong>: <a href="{{ route('home') }}">{{ config('app.name') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="portfolio-info portfolio-description">
                <h2>Laravel, Yii2 и Symphony — это PHP-фреймворки для веб-разработчиков.</h2>
                <p>
                    Laravel is a web application framework with expressive, elegant syntax.
                    We’ve already laid the foundation — freeing you to create without sweating the small things.
                </p>
                <p>
                    Yii2 — is a fast, secure, and efficient PHP framework. Flexible yet pragmatic.
                    Works right out of the box. Has reasonable defaults.
                </p>
                <p>
                    Symphony — The standard foundation on which the best PHP applications are built.
                    Choose any of the 50 stand-alone components available for your own applications.
                </p>
            </div>
        </div>
        <div class="clearfix"><br></div>
        <div class="container">
            <div class="portfolio-info">
                <div class="row gy-4">
                    <b>
                        Познакомьтесь с Ларавелем
                    </b>
                    <p>
                        Laravel — это фреймворк для веб-приложений с выразительным элегантным синтаксисом. Веб-фреймворк
                        обеспечивает структуру и отправную точку для создания вашего приложения, позволяя вам сосредоточиться на
                        создании чего-то удивительного, пока мы работаем над деталями.
                    </p>
                    <p>
                        Laravel стремится предоставить удивительный опыт разработчика, предоставляя мощные функции, такие как
                        тщательное внедрение зависимостей, выразительный уровень абстракции базы данных, очереди и
                        запланированные задания, модульное и интеграционное тестирование и многое другое.
                    </p>
                    <p>
                        Независимо от того, являетесь ли вы новичком в PHP или веб-фреймворках или имеете многолетний опыт,
                        Laravel — это фреймворк, который может расти вместе с вами. Мы поможем вам сделать первые шаги в
                        качестве веб-разработчика или поддержим вас, когда вы поднимете свой опыт на новый уровень. Нам не
                        терпится увидеть, что вы построите.
                    </p>
                    <p>
                        Почему Ларавель?
                    </p>
                    <p>
                        Существует множество инструментов и сред, доступных вам при создании веб-приложения. Однако мы считаем,
                        что Laravel — лучший выбор для создания современных полнофункциональных веб-приложений.
                    </p>
                    <p>
                        Прогрессивная структура
                    </p>
                    <p>
                        Нам нравится называть Laravel «прогрессивным» фреймворком. Под этим мы подразумеваем, что Laravel растет
                        вместе с вами. Если вы только делаете первые шаги в веб-разработке, обширная библиотека документации,
                        руководств и видеоуроков Laravel поможет вам освоить основы, не перегружаясь.
                    </p>
                    <p>
                        Если вы старший разработчик, Laravel предоставит вам надежные инструменты для внедрения зависимостей,
                        модульного тестирования, очередей, событий в реальном времени и многого другого. Laravel точно настроен
                        для создания профессиональных веб-приложений и готов к работе с корпоративными нагрузками.
                    </p>
                    <p>
                        Масштабируемая структура
                    </p>
                    <p>
                        Laravel невероятно масштабируем. Благодаря удобному для масштабирования характеру PHP и встроенной
                        поддержке Laravel для быстрых распределенных систем кэширования, таких как Redis, горизонтальное
                        масштабирование с Laravel очень просто. Фактически, приложения Laravel легко масштабируются для
                        обработки сотен миллионов запросов в месяц.
                    </p>
                    <p>
                        Нужно экстремальное масштабирование? Такие платформы, как Laravel Vapor, позволяют запускать приложение
                        Laravel практически в неограниченном масштабе на новейшей бессерверной технологии AWS.
                    </p>
                    <p>
                        Рамки сообщества
                    </p>
                    <p>
                        Laravel сочетает в себе лучшие пакеты в экосистеме PHP, чтобы предложить самую надежную и удобную для
                        разработчиков среду. Кроме того, в разработку фреймворка внесли свой вклад тысячи талантливых
                        разработчиков со всего мира. Кто знает, может быть, вы даже станете участником Laravel.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
</x-site-layout>
