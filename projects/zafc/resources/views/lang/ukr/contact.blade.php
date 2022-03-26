@extends("layouts.templates.ukr.template")
@section('title',"Контакти")

@section('content')
    <section class="contacts__title text-center">
        <div class="container">
            <h1>Контакти</h1>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <ul class="text-start fa-ul">
                        <li>
                            <div class="contact__phone">
                                <span class="fa-li"><i class="fas fa-phone-alt footer__phone-btn"></i></span>
                                <span>Приймальня комісія:</span>
                            </div>
                            
                            <a href="tel:+380617205526" class="text-start">(061)212-21-52</a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <ul class="text-start fa-ul">
                        <li>
                            <div class="contact__phone">
                                <span class="fa-li"><i class="fas fa-phone-alt footer__phone-btn"></i></span>
                                <span>Приймальня директора:</span>
                            </div>
                            
                            <a href="tel:+380617205526" class="text-start">(061)720-55-26</a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <ul class="text-start fa-ul">
                        <li>
                            <div class="contact__phone">
                                <span class="fa-li"><i class="fas fa-envelope"></i></span>
                                <span>Ел.пошта коледжу:</span>
                            </div>
                            
                            <a href="tel:+380617205526" class="text-start">zac@zac.org.ua</a>
                        </li>
                    </ul>  
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <ul class="text-start fa-ul">
                        <li>
                            <div class="contact__phone">
                                <span class="fa-li"><i class="fas fa-envelope"></i></span>
                                <span>Ел.пошта бухгалетрії</span>
                            </div>
                            
                            <a href="tel:+380617205526" class="text-start">buh@zac.org.ua</a>
                        </li>
                    </ul>   
                </div>
            </div>
            <div class="text-start iframe">
                <h2 class="text-center">Задай своє запитання</h2>
                @include("layouts.templates.ukr.contacts")
            </div>
            
        </div>
    </section>
    
    
@endsection