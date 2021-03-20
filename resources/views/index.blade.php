@extends('master')

@section('css')

@endsection

@section('content')
<section id="landing-section" class="landing-section">
    <div class="bg-riga-landing absolute w-full h-full bg-center -z-10 bg-cover"></div>

    <h1 class="text-dark-ritters ritters-header">Узнай,
        сколько на самом деле стоит твоя
        недвижимость</h1>

    <div style="display:flex;" class="row">
        <div class="col s10 property-form-section bg-transparent">
            <div class="modal-content center">
                <form action="#">

                    <div class="row">

                        <div class="input-field col s6 l3">
                            <i style="float:left;" class="fas fa-location-arrow"></i>

                            <select>
                                <option value="5" selected> Рига</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>

                        <div class="input-field col s6 l3">
                            <i style="float:left;" class="fas fa-city"></i>

                            <select>
                                <option value="" disabled selected> Выберите район</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>

                        <div class="input-field col s6 l3">
                            <i style="float:left;" class="fas fa-home"></i>

                            <select>
                                <option value="" disabled selected> Выберите серию</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>

                        <div style="margin-top:30px;" class="input-field col s6 l3">
                            <i class="material-icons prefix">aspect_ratio</i>
                            <input type="text" id="area">
                            <label for="area">Площадь (m²)</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">person</i>
                            <input type="text" id="name">
                            <label for="name">Имя</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_phone</i>
                            <input type="password" id="pass">
                            <label for="pass">Телефон</label>
                        </div>

                    </div>





                    <p class="text-center">
                        <label>
                            <input type="checkbox" />
                            <span>Я принимаю правила соглашения </span>
                        </label>
                    </p>
                    <button class="btn btn-large waves-effect brown lighten-2 pulse btn-confirm">Узнать</button>
                </form>
            </div>
        </div>
</section>
<section class="about-us container">
    <div class="panorama-overlay"></div>
    <h2 class="text-center text-dark-ritters text-shadow ritters-header">Кто мы?</h2>
    <p style="font-size: 16pt;" class="text-center">SIA <span class="text-cta font-weight-bold">RITTERS</span>, с 1993
        года на рынке недвижимости Латвии.</p>
    <h2 style="margin:-0.5rem auto 3.5rem auto;" class="text-center text-dark-ritters text-shadow ritters-header">Цифры
        <span class="text-cta">говорят за нас</span></h2>
    <div class="row advantages">
        <div class="col s12 l4">
            <div class="advantages-content bg-transparent shadow hoverable">
                <i class="fas fa-store-alt text-cta fa-5x element-center"></i>
                <h4>28 Лет на рынке недвижимости</h4>
                {{-- <p class="text-light-ritters">Это заебись. Срал Вонял пердел много лет в офисе продавал дома и земли</p> --}}
            </div>
        </div>
        <div class="col s12 l4">
            <div class="advantages-content bg-transparent shadow hoverable">
                <i class="far fa-thumbs-up text-cta fa-5x element-center"></i>
                <h4>Более 3300 сделок<br />с недвижимостью</h4>

            </div>
        </div>
        <div class="col s12 l4">
            <div class="advantages-content bg-transparent shadow hoverable">
                <i class="fas fa-handshake text-cta fa-5x element-center"></i>
                <h4>1792 объектов найдено для наших клиентов</h4>

            </div>
        </div>

    </div>
    <p class="text-center" style="opacity:0.5; font-size:9pt;">Мы не несём ответственности, мы лишаем девственности. <a
            class="text-cta" href="#">Почитайте как срать.</a></p>
</section>
<section class="section-cta bg-light-ritters">
    <div class="container">
        <div class="transition">
            <h2 style="margin-bottom:0;" class="text-center text-dark-ritters text-shadow ritters-header">Помогаем <span
                    class="text-cta"> определить цену</span></h2>
            <p style="font-size: 16pt;" class="text-center">и <span class="text-cta"> продать</span> ваше имущество по
                <span class="text-cta">максимальной цене</span>.</p>
        </div>
        <div style="margin-top:50px;margin-bottom:15vh;" class="element-center">
            <a href="#landing-section" class="btn btn-large waves-effect brown lighten-2 pulse btn-confirm">УЗНАТЬ
                СТОЙМОСТЬ</a>
        </div>
    </div>
    <div class="contact-container row">
        <div class="col s6 contacts">
            <h4 style="margin: 0;">Контакты</h4>
            <ul style="font-weight:600;">
                <li class="text-cta">+371 22129222</li>
                <li>Gertrudes iela 23a</li>
                <li>Riga</li>
                <li>LV-1038</li>
            </ul>
        </div>
        <div style="padding:0;" class="col s6">
            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')

@endsection