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
                                <option value="" disabled selected> Выберите район</option>
                                <option disabled>Рига</option>

                                <option value="2"> Агенскалнс</option>
                                <option value="52"> Букулти</option>
                                <option value="33"> Вецаки</option>
                                <option value="4"> Вецрига</option>
                                <option value="19"> Дарзциемс</option>
                                <option value="6"> Золитуде</option>
                                <option value="7"> Ильгуциемс</option>
                                <option value="8"> Иманта</option>
                                <option value="57"> Кипсала</option>
                                <option value="31"> Межапарк</option>
                                <option value="18"> Межциемс</option>
                                <option value="60"> Пиньки</option>
                                <option value="9"> Плявниеки</option>
                                <option value="10"> Пурвциемс</option>
                                <option value="11"> Румбула</option>
                                <option value="12"> Саркандаугава</option>
                                <option value="13"> Тейка</option>
                                <option value="1"> Центр</option>
                                <option value="20"> Шампетерис</option>
                                <option value="55"> Шкиротава</option>

                                <option disabled>Юрмала</option>

                                <option value="3"> Булдури</option>
                                <option value="38"> Дзинтари</option>
                                <option value="40"> Дубулты</option>
                                <option value="45"> Каугури</option>
                                <option value="68"> Лиелупе</option>
                                <option value="77"> Меллужи</option>
                                <option value="59"> Пумпури</option>
                                <option value="44"> Яундубулты</option>

                                <option disabled>Рижский район</option>

                                <option value="79"> Балтэзерс</option>
                                <option value="64"> Дзидриняс</option>
                                <option value="36"> Марупе</option>
                                <option value="41"> Плаканциемс</option>
                                <option value="51"> Пулкарне</option>
                                <option value="63"> Сауриеши</option>
                                <option value="67"> Стуниши</option>
                                <option value="62"> Царникава</option>
                                <option value="43"> Цекуле</option>
                                <option value="54"> Эглюциемс</option>

                                <option disabled>Саласпилс</option>

                                <option value="80"> Бривлауки</option>

                    
                            </select>
                        </div>

                        <div class="input-field col s6 l3">
                            <i style="float:left;" class="fas fa-home"></i>

                            <select name="building_type">
                                <option value="" disabled selected> Выберите серию</option>
                                <option value="1">Довоенный дом</option> 
                                <option value="2">119 серия</option> 
                                <option value="3">103 серия</option> 
                                <option value="4">Чешский проект</option> 
                                <option value="5">Pеновированный</option> 
                                <option value="6">Cпецпроект</option> 
                                <option value="7">Литовский проект</option> 
                                <option value="8">Хрущевка</option>
                                <option value="9">Новострой</option> 
                                <option value="10">Малосемейная</option> 
                                <option value="11">602 серия</option> 
                                <option value="12">467 серия</option> 
                                <option value="13">104 серия</option> 
                                <option value="14">Сталинка</option>
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