@extends('master')

@section('css')

@endsection

@section('content')
<section style="overflow: hidden;" id="landing-section" class="landing-section">
    <div class="bg-riga-landing absolute w-full h-full bg-center -z-10 bg-cover"></div>

    <h1 class="text-dark-ritters ritters-header">Узнай,
        сколько на самом деле стоит твоя
        недвижимость</h1>

    <div style="display:flex;" class="row">
        <div class="col s10 property-form-section bg-transparent">
            <div class="modal-content center">
                <form method="post" action="{{url('apply-form')}}">

                    <div class="row">

                        <div class="input-field col s6 l3">
                            <i style="float:left;" class="fas fa-location-arrow"></i>

                            <select name="town">
                                <option value="Riga" selected> Рига</option>
                                <option value="Jurmala">Юрмала</option>
                                <option value="Saulkrasti">Саулкрасты</option>
                                <option value="Rigas Rajons">Рижский Район</option>
                                <option value="Salaspils">Саласпилс</option>
                            </select>
                        </div>

                        <div class="input-field col s6 l3">
                            <i style="float:left;" class="fas fa-city"></i>

                            <select name="district">
                                <option value="N/A" disabled selected> Выберите район</option>
                                <option disabled>Рига</option>

                                <option value="Агенскалнс"> Агенскалнс</option>
                                <option value="Букулти"> Букулти</option>
                                <option value="Вецаки"> Вецаки</option>
                                <option value="Вецрига"> Вецрига</option>
                                <option value="Дарзциемс"> Дарзциемс</option>
                                <option value="Золитуде"> Золитуде</option>
                                <option value="Ильгуциемс"> Ильгуциемс</option>
                                <option value="Иманта"> Иманта</option>
                                <option value="Кипсала"> Кипсала</option>
                                <option value="Межапарк"> Межапарк</option>
                                <option value="Межциемс"> Межциемс</option>
                                <option value="Пиньки"> Пиньки</option>
                                <option value="Плявниеки"> Плявниеки</option>
                                <option value="Пурвциемс"> Пурвциемс</option>
                                <option value="Румбула"> Румбула</option>
                                <option value="Саркандаугава"> Саркандаугава</option>
                                <option value="Тейка"> Тейка</option>
                                <option value="Центр"> Центр</option>
                                <option value="Шампетерис"> Шампетерис</option>
                                <option value="Шкиротава"> Шкиротава</option>

                                <option disabled>Юрмала</option>

                                <option value="Булдури"> Булдури</option>
                                <option value="Дзинтари"> Дзинтари</option>
                                <option value="Дубулты"> Дубулты</option>
                                <option value="Каугури"> Каугури</option>
                                <option value="Лиелупе"> Лиелупе</option>
                                <option value="Меллужи"> Меллужи</option>
                                <option value="Пумпури"> Пумпури</option>
                                <option value="Яундубулты"> Яундубулты</option>

                                <option disabled>Рижский район</option>

                                <option value="Балтэзерс"> Балтэзерс</option>
                                <option value="Дзидриняс"> Дзидриняс</option>
                                <option value="Марупе"> Марупе</option>
                                <option value="Плаканциемс"> Плаканциемс</option>
                                <option value="Пулкарне"> Пулкарне</option>
                                <option value="Сауриеши"> Сауриеши</option>
                                <option value="Стуниши"> Стуниши</option>
                                <option value="Царникава"> Царникава</option>
                                <option value="Цекуле"> Цекуле</option>
                                <option value="Эглюциемс"> Эглюциемс</option>

                                <option disabled>Саласпилс</option>

                                <option value="Бривлауки"> Бривлауки</option>

                    
                            </select>
                        </div>

                        <div class="input-field col s6 l3">
                            <i style="float:left;" class="fas fa-home"></i>

                            <select name="building_type">
                                <option value="UnknownBuildingType" disabled selected> Выберите серию</option>
                                <option value="Довоенный дом">Довоенный дом</option> 
                                <option value="119 серия">119 серия</option> 
                                <option value="103 серия">103 серия</option> 
                                <option value="Чешский проект">Чешский проект</option> 
                                <option value="Pеновированный">Pеновированный</option> 
                                <option value="Cпецпроект">Cпецпроект</option> 
                                <option value="Литовский проект">Литовский проект</option> 
                                <option value="Хрущевка">Хрущевка</option>
                                <option value="Новострой">Новострой</option> 
                                <option value="Малосемейная">Малосемейная</option> 
                                <option value="602 серия">602 серия</option> 
                                <option value="467 серия">467 серия</option> 
                                <option value="104 серия">104 серия</option> 
                                <option value="Сталинка">Сталинка</option>
                            </select>
                        </div>

                        <div style="margin-top:30px;" class="input-field col s6 l3">
                            <i class="material-icons prefix">aspect_ratio</i>
                            <input name="area" type="text" id="area">
                            <label for="area">Площадь (m²)</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">person</i>
                            <input name="full_name" type="text" id="name">
                            <label for="name">Имя</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_phone</i>
                            <input name="phone" type="tel" id="pass">
                            <label for="pass">Телефон</label>
                        </div>

                    </div>





                    <p class="text-center">
                        <label>
                            <input type="checkbox" />
                            <span>Я принимаю правила соглашения </span>
                        </label>
                    </p>
                    <button type="submit" class="btn btn-large waves-effect brown lighten-2 pulse btn-confirm">Узнать</button>
                    @csrf
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
    {{-- <p class="text-center" style="opacity:0.5; font-size:9pt;">Мы не несём ответственности, мы лишаем девственности. <a
            class="text-cta" href="#">Почитайте как срать.</a></p> --}}
</section>
<section style="overflow: hidden;position:relative;background-color: #dfd7d4c2;" class="section-cta">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="transition">
            <h2 style="margin-bottom:0;" class="text-center text-dark-ritters text-shadow ritters-header">Помогаем <span
                    class="text-cta"> определить рыночную цену</span></h2>
            <p style="font-size: 16pt;" class="text-center">и <span class="text-cta"> продать</span> вашу квартиру по
                <span class="text-cta">максимальной цене</span>.</p>
        </div>
        <div style="margin-top:50px;margin-bottom:15vh;" class="element-center">
            <a href="#landing-section" class="btn btn-large waves-effect brown lighten-2 pulse btn-confirm">Получить консультацию бесплатно</a>
        </div>
    </div>
</section>
@endsection

@section('js')

@endsection