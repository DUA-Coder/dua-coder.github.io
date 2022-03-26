@extends("layouts.templates.ukr.template")
@section('title',"Бібліотека")

@section('content')
    <section class="library__title">
        <div class="container">
            <h1>Бібліотека</h1>

            <div class="row">
                <div class="col-12 col-md-6 text-center empolyee">
                    <img src="/img/library/1.jfif" class="img-fluid" alt="">
                    <h2 class="library__employee-title">Сніжко Т.В.</h2>
                    <p class="library__employee-subtitle">Бібліотекар</p>
                    <p class="library__employee-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatibus reprehenderit, quis ea enim quasi et, sequi maxime a ullam sapiente dolores ab voluptate molestiae ut! Explicabo modi exercitationem iusto?</p>

                </div>

                <div class="col-12 col-md-6 text-center empolyee">
                    <img src="/img/employee/vera.jpg" class="img-fluid" alt="">
                    <h2 class="library__employee-title">Марiнiчева Вiра Василiвна</h2>
                    <p class="library__employee-subtitle">Провiдний бiблiотекар</p>
                    <p class="library__employee-desc">Стаж роботи 37 рокlв.Маю середньо-спеціальну освіту.Працюю в коледжи 21 рiк.</p>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="library_cites text-center">
        <div class="container">
            <div class="library__citate">
                <p class="library__citate-title">"Бібліотека – це той храм, де завжди народжується і зберігається духовність. Пам’ятаймо, що у давнину бібліотеку називали «дім життя», «притулок мудрості», «аптека для душі». "</p>
                <p class="library__citate-author text-end">В. Сухомлинський</p>
            </div>

            <div class="library__citate">
                <p class="library__citate-title">"Велика частина людського знання в усіх галузях існує лише на папері, в книга– цієї паперової пам’яті людства. Тому лише збори книг, бібліотека є єдиною надією і не знищується пам’ятлюдського роду."</p>
                <p class="library__citate-author text-end">А. Шопенгауер</p>
            </div>  
        </div>
             
    </section>

    

    <section class="library__buttons">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"        aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1IFdEts8il-n6-4OPXZ-fGjWxeZTcoZFw?usp=sharing" target="_blank">
                            <div class="title-subject">Українська мова</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1sssasnazqywApX_KMP1dgfc9GnYoLh-i?usp=sharing" target="_blank">
                            <div class="title-subject">Українська література</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/19YK99PN_YWqow7DqjCyWVJ6LE5VAyVwW?usp=sharing" target="_blank">
                            <div class="title-subject">Зарубіжна література</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1QBx9gFrKRzLbY7TB9XG-kAY1Kl0mgQJL?usp=sharing" target="_blank">
                            <div class="title-subject">Математика</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1CHjDyBKlqm-DtSgFRcg2Q861w3XIhSN0?usp=sharing" target="_blank">
                            <div class="title-subject">Іноземна мова</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1RiwesVYjDCE5egsTWwp13aLHU8kGumst?usp=sharing" target="_blank">
                            <div class="title-subject">Всесвітня історія</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1bXw5cNHp8RWSK3lLBIKOD9hRyCla7ST-?usp=sharing" target="_blank">
                            <div class="title-subject">Історія України</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject big">
                        <a href="https://drive.google.com/drive/folders/1ZYbnfvTek-qpAmyL1_ycy6Up7_-IRmHf?usp=sharing" target="_blank">
                            <div class="title-subject ">Громадянська освіта: Людина і світ</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject big">
                        <a href="https://drive.google.com/drive/folders/1_OAsuL9L65Dj9vw1NtnWokkT1O55VFAr?usp=sharing" target="_blank">
                            <div class="title-subject ">Громадянська освіта: Правознавство</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject big">
                        <a href="https://drive.google.com/drive/folders/12czqHprgv1unAmVyOg0TY9iKOXSxu_zd?usp=sharing" target="_blank">
                            <div class="title-subject ">Громадянська освіта: Економіка</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1RPuTVZfAb8Ntv326s4w7j6c8fckW0Ibr?usp=sharing" target="_blank">
                            <div class="title-subject ">Хімія</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1l4hcJyD__p6Xd-_atgujEszpz8b8S7u4?usp=sharing" target="_blank">
                            <div class="title-subject ">Фізика і астрономія</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/19Mp1b_UKUZdZsZfS5P25Hus2QhNH1mNA?usp=sharing" target="_blank">
                            <div class="title-subject ">Біологія і екологія</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1AsTGDs6lIvJ_Kwx2XZvdbB4EtwsAo_9U?usp=sharing" target="_blank">
                            <div class="title-subject ">Географія</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1_51xJo71Wg7FBez3rRKKGJDkynlI1ES1?usp=sharing" target="_blank">
                            <div class="title-subject ">Захист України</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1DXqbtUH2kpvWGtyi4GMTaEkSPNmX3SSZ?usp=sharing" target="_blank">
                            <div class="title-subject ">Фізична культура</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1QX7jmK-WIx9KnVV53xfUyKrli-06-tFO?usp=sharing" target="_blank">
                            <div class="title-subject ">Інформатика</div>
                        </a>
                    </div>

                    <div class="col-12 col-md-4 subject">
                        <a href="https://drive.google.com/drive/folders/1ajILf74ZGzbaXxtp3rwzGi7BolWDiSnj?usp=sharing" target="_blank">
                            <div class="title-subject ">Технології</div>
                        </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <div class="button-big">
                            Дисципліни повної загальної середньої освіти
                        </div>
                    </a>
                </div>
                <div class="col-12">
                    <a href="№">
                        <div class="button-big">
                            Дисципліни, що формують загальні компетентності
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <a href="№">
                    <div class="button-big">
                        Дисципліни, що формують професійні компетентності
                    </div>
                </a>
            </div>
        </div>
    </section>
    
@endsection