@extends('lvmaster')

@section('css')

@endsection

@section('content')
<section style="overflow: hidden;" id="landing-section" class="landing-section">
    <div class="bg-riga-landing absolute w-full h-full bg-center -z-10 bg-cover"></div>

    <h1 class="text-dark-ritters ritters-header">Uzziniet jūsu nekustamā īpašuma faktisko vērtību</h1>

    <div style="display:flex;" class="row">
        <div class="col s10 property-form-section bg-transparent">
            <div class="modal-content center">
                <form method="post" action="{{url('apply-form')}}">

                    <div class="row">

                        <div class="input-field col s6 l3">
                            <i style="float:left;" class="fas fa-location-arrow"></i>

                            <select required="" aria-required="true" name="town">
                                <option value="Riga" selected> Rīga</option>
                                <option value="Jurmala">Jūrmala</option>
                                <option value="Saulkrasti">Saulkrasti</option>
                                <option value="Rigas Rajons">Rīgas rajons</option>
                                <option value="Salaspils">Salaspils</option>
                            </select>
                        </div>

                        <div class="input-field col s6 l3">
                            <i style="float:left;" class="fas fa-city"></i>

                            <select required="" aria-required="true" name="district">
                                <option value="" disabled selected> Izvēlieties rajonu</option>
                                <option disabled>Rīga</option>

                                <option value="Āgenskalns"> Āgenskalns</option>
                                <option value="Bukulti"> Bukulti</option>
                                <option value="Vecāķi"> Vecāķi</option>
                                <option value="Vecrīga"> Vecrīga</option>
                                <option value="Dārzciems"> Dārzciems</option>
                                <option value="Zolitūde"> Zolitūde</option>
                                <option value="Iļģuciems"> Iļģuciems</option>
                                <option value="Imanta"> Imanta</option>
                                <option value="Ķīpsala"> Ķīpsala</option>
                                <option value="Mežaparks"> Mežaparks</option>
                                <option value="Mežciems"> Mežciems</option>
                                <option value="Piņķi"> Piņķi</option>
                                <option value="Pļavnieki"> Pļavnieki</option>
                                <option value="Purvciems "> Purvciems </option>
                                <option value="Rumbula"> Rumbula</option>
                                <option value="Sarkandaugava"> Sarkandaugava</option>
                                <option value="Teika"> Teika</option>
                                <option value="Centrs"> Centrs</option>
                                <option value="Šampēteris"> Šampēteris</option>
                                <option value="Šķirotava"> Šķirotava</option>

                                <option disabled>Jūrmala</option>

                                <option value="Bulduri"> Bulduri</option>
                                <option value="Dzintari"> Dzintari</option>
                                <option value="Dubulti"> Dubulti</option>
                                <option value="Kauguri"> Kauguri </option>
                                <option value="Lielupe"> Lielupe</option>
                                <option value="Melluži"> Melluži</option>
                                <option value="Pumpuri"> Pumpuri</option>
                                <option value="Jaundubulti"> Jaundubulti</option>

                                <option disabled>Rīgas rajons</option>

                                <option value="Baltezers"> Baltezers</option>
                                <option value="Dzidriņas"> Dzidriņas</option>
                                <option value="Mārupe"> Mārupe </option>
                                <option value="Plakanciems"> Plakanciems</option>
                                <option value="Pulkarne"> Pulkarne</option>
                                <option value="Saulrieši"> Saulrieši</option>
                                <option value="Stūnīši"> Stūnīši</option>
                                <option value="Carnikava"> Carnikava</option>
                                <option value="Cekule"> Cekule</option>
                                <option value="Egļuciems"> Egļuciems</option>

                                <option disabled>Salaspils</option>

                                <option value="Brīvlauki"> Brīvlauki</option>

                    
                            </select>
                        </div>

                        <div class="input-field col s6 l3">
                            <i style="float:left;" class="fas fa-home"></i>

                            <select required="" aria-required="true" name="building_type">
                                <option value="" disabled selected> Izvēlieties sēriju</option>
                                <option value="Pirmskara ēka">Pirmskara ēka</option> 
                                <option value="119. sērija">119. sērija</option> 
                                <option value="103. sērija">103. sērija</option> 
                                <option value="Čehu projekts">Čehu projekts</option> 
                                <option value="Renovēta ēka">Renovēta ēka</option> 
                                <option value="Specprojekts">Specprojekts</option> 
                                <option value="Lietuviešu projekts">Lietuviešu projekts</option> 
                                <option value="Hruščova laika projekts">Hruščova laika projekts</option>
                                <option value="Jaunais projekts">Jaunais projekts</option> 
                                <option value="Mazģimeņu projekts">Mazģimeņu projekts</option> 
                                <option value="602. sērija">602. sērija</option> 
                                <option value="467. sērija">467. sērija</option> 
                                <option value="104. sērija">104. sērija</option> 
                                <option value="Staļina laika">Staļina laika</option>
                            </select>
                        </div>

                        <div style="margin-top:30px;" class="input-field col s6 l3">
                            <i class="material-icons prefix">aspect_ratio</i>
                            <input name="area" type="text" id="area" required>
                            <label for="area">Platība (m2)</label>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">person</i>
                            <input name="full_name" type="text" id="name" required>
                            <label for="name">Vārds</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_phone</i>
                            <input name="phone" type="tel" id="pass" required>
                            <label for="pass">Telefons</label>
                        </div>

                    </div>





                    <p class="text-center">
                        <label>
                            <input type="checkbox" required="" aria-required="true"/>
                            <span>Es piekrītu vienošanās noteikumiem </span>
                        </label>
                    </p>
                    <button name="action" type="submit" class="btn btn-large waves-effect brown lighten-2 pulse btn-confirm">UZZINĀT</button>
                    @csrf
                    <input type="hidden" name="lang" value="lv">
                </form>
            </div>
        </div>
</section>
<section class="about-us container">
    <div class="panorama-overlay"></div>
    <h2 class="text-center text-dark-ritters text-shadow ritters-header">Kas mēs esam?</h2>
    <p style="font-size: 16pt;" class="text-center">SIA <span class="text-cta font-weight-bold">RITTERS</span>, Latvijas nekustamā īpašuma tirgū kopš 1993. gada.</p>
    <h2 style="margin:-0.5rem auto 3.5rem auto;" class="text-center text-dark-ritters text-shadow ritters-header">Mēs <span class="text-cta">skaitļos:</span></h2>
    <div class="row advantages">
        <div class="col s12 l4">
            <div class="advantages-content bg-transparent shadow hoverable">
                <i class="fas fa-store-alt text-cta fa-5x element-center"></i>
                <h4>28 gadi nekustamā īpašuma tirgū</h4>
                {{-- <p class="text-light-ritters">Это заебись. Срал Вонял пердел много лет в офисе продавал дома и земли</p> --}}
            </div>
        </div>
        <div class="col s12 l4">
            <div class="advantages-content bg-transparent shadow hoverable">
                <i class="far fa-thumbs-up text-cta fa-5x element-center"></i>
                <h4>Vairāk nekā 3300<br />nekustamā īpašuma darījumi</h4>

            </div>
        </div>
        <div class="col s12 l4">
            <div class="advantages-content bg-transparent shadow hoverable">
                <i class="fas fa-handshake text-cta fa-5x element-center"></i>
                <h4>Mūsu klientiem atrasti 1792 īpašumi</h4>

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
            <h2 style="margin-bottom:0;" class="text-center text-dark-ritters text-shadow ritters-header">Palīdzam <span
                    class="text-cta"> noteikt tirgus cenu</span></h2>
            <p style="font-size: 16pt;" class="text-center">un <span class="text-cta"> pārdot</span> jūsu dzīvokli par <span class="text-cta">maksimālo cenu</span>.</p>
        </div>
        <div style="margin-top:50px;margin-bottom:15vh;" class="element-center">
            <a href="#landing-section" class="btn btn-large waves-effect brown lighten-2 pulse btn-confirm">SAŅEMT KONSULTĀCIJU BEZMAKSAS</a>
        </div>
    </div>
</section>
@endsection

@section('js')

@endsection