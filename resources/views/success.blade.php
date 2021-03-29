@extends('master')

@section('css')

@endsection

@section('content')
<section style="overflow: hidden;" id="landing-section" class="landing-section">
    <div class="bg-riga-landing absolute w-full h-full bg-center -z-10 bg-cover"></div>


    <div style="display:flex;margin-top:100px;" class="row">
        <div class="col s10 property-form-section bg-transparent">
            <div class="modal-content center text-center">
                <h1 style="margin:50px auto 20px auto;">Спасибо вам</h1>
                <p><i class="fas fa-check-square fa-9x text-cta"></i></p>
                <p style="margin-top:20px;">Вы - самый лучший человек.</p>
                <p>Добра Вам и вашим близким</p>
                <a class="btn bg-light-ritters text-dark-ritters waves-effect" style="font-weight: bold;margin:30px auto;" href="{{url('/')}}">Вернуться в дом, который еще у Вас есть</a>
            </div>
        </div>
</section>

@endsection

@section('js')

@endsection