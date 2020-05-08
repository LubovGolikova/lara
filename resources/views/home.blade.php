@extends('layouts.app')

@section('content')
<section class="box-welcome">
    <div class="welcome">
          <div class="text"><span>Украсьте</span> <span>свою жизнь</span> <span>цветами!!!</span></div>
           <img src="{{asset('assets/images/box-1.png')}}" alt=""/>
    </div>
</section>
<section class="box-new-flowers">
        <div class=" row mt-3">
            <div class="col-md-6 order-2">
                <div class="container-news">
                    <div class="row justify-content-between mr-4 mb-4">
                       <p>Новинки</p>
                       <div class="figure">
                            <img src="{{asset('assets/images/fig1.png')}}" alt=""/>
                            <img src="{{asset('assets/images/fig2.png')}}" alt=""/>
                            <img src="{{asset('assets/images/fig3.png')}}" alt=""/>
                            <img src="{{asset('assets/images/fig4.png')}}" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="flowers px-5">
                    <div class="slider">
                        @foreach($sliderFlowers as $flower)
                        <div>
                            <div class="border-circle">
                            <a href="/flower/{{$flower->id}}"><img src="{{$flower->getThumb()}}" class="img-fluid "></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
             <div class="col-md-6 order-1">
                <div class="about">
                    <h3> О нас </h3>
                  <p> Рада приветствовать всех кто заглянул на наш сайт! Это небольшой магазин лилейников. Лилейник-это
                  цветок, который цветет один день, но когда куст разростается этого недостаткам вы не заметите,
                  ведь он весь будет покрыт бутонами и вы будете в течение долгого времени созерцать прекрасное цветение!
                  Здесь вы найдете лилейник на любой вкус! У нас представлены как зарегестрированные сорта
                  так и сеянцы, которые были выведены гибридизаторами-любителями, но не были зарегестрированы,
                   такие лилейники стоят намного дешевле, однако это никак не умоляет их красоты!
                  Покупая здесь лилейники вы получите хороший посадочный материал! Сортность и качество гарантирую!
                   Желаю вам приятных покупок!</p>
                </div>
             </div>
        </div>
</section>
<section class="box-news">
            <div class="container-news">
                <div class="row justify-content-between mr-4 mb-1">
                   <p>Уход</p>
                   <div class="figure">
                        <img src="{{asset('assets/images/fig5.png')}}" alt=""/>
                   </div>
                </div>
            </div>
            <div class="container-care">
                <div class="gardening">
                     <img src="{{asset('assets/images/garden1.jpg')}}" alt=""/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                    blanditiis delectus, deleniti deserunt dolores error explicabo facilis ipsa iusto
                     labore laborum minima perferendis perspiciatis, quae quas quibusdam quos sed, similique?</p>
                </div>
                <div class="gardening">
                     <img src="{{asset('assets/images/garden2.jpg')}}" alt=""/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                     blanditiis delectus, deleniti deserunt dolores error explicabo facilis
                     ipsa iusto labore laborum minima perferendis perspiciatis, quae quas quibusdam
                      quos sed, similique?</p>
                 </div>
            </div>
 </section>
@endsection
