<x-layout>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
                </div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
          <div class="heading-section">
              <span class="subheading">Since 1905</span>
            <h2 class="mb-4">Desire meets a new Taste</h2>

            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
            <p class="year">
                <strong class="number" data-number="115">0</strong>
                <span>Years of Experience In Business</span>
            </p>
          </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url(images/kind-1.jpg);"></div>
                        <h3>Brandy</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url(images/kind-2.jpg);"></div>
                        <h3>Ginebra</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url(images/kind-3.jpg);"></div>
                        <h3>Ron</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url(images/kind-4.jpg);"></div>
                        <h3>Tequila</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url(images/kind-5.jpg);"></div>
                        <h3>Vodka</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 ">
                    <div class="sort w-100 text-center ftco-animate">
                        <div class="img" style="background-image: url(images/kind-6.jpg);"></div>
                        <h3>Whisky</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <span class="subheading">Our Delightful offerings</span>
                <h2>Tastefully Yours</h2>
            </div>
        </div>

        <div class="row">

            @if (empty($productos[0]) || empty($productos[1]) || empty($productos[2]))


                    <div class="col-md-4" style="margin: auto">
                        <a href="/productos" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
                    </div>


            @else


                <div class="card" style="width: 18rem; background:bisque; margin:auto">

                    @if (empty($productos[0]->archivos->first()))
                        <img src="..." class="card-img-top" alt="...">
                    @else
                        <img src="data:image/jpeg;base64,{{ base64_encode(\Storage::get($productos[0]->archivos->first()->nombre_hash)) }}" alt="">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $productos[0]->nombre }}</h5>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $productos[0]->contenido }}</li>
                        <li class="list-group-item">{{ $productos[0]->categoria->nombre_categoria }}</li>
                        <li class="list-group-item">${{ $productos[0]->precio }}</li>
                    </ul>

                    <div class="card-body">

                        <a href="productos/{{ $productos[0]->id }}">Ver Detalle</a> <br>

                    </div>
                </div>

                <div class="card" style="width: 18rem; background:bisque; margin:auto">

                    @if (empty($productos[1]->archivos->first()))
                        <img src="..." class="card-img-top" alt="...">
                    @else
                        <img src="data:image/jpeg;base64,{{ base64_encode(\Storage::get($productos[1]->archivos->first()->nombre_hash)) }}" alt="">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $productos[1]->nombre }}</h5>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $productos[1]->contenido }}</li>
                        <li class="list-group-item">{{ $productos[1]->categoria->nombre_categoria }}</li>
                        <li class="list-group-item">${{ $productos[1]->precio }}</li>
                    </ul>

                    <div class="card-body">

                        <a href="productos/{{ $productos[1]->id }}">Ver Detalle</a> <br>

                    </div>
                </div>

                <div class="card" style="width: 18rem; background:bisque; margin:auto">

                    @if (empty($productos[2]->archivos->first()))
                        <img src="..." class="card-img-top" alt="...">
                    @else
                        <img src="data:image/jpeg;base64,{{ base64_encode(\Storage::get($productos[2]->archivos->first()->nombre_hash)) }}" alt="">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $productos[2]->nombre }}</h5>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $productos[2]->contenido }}</li>
                        <li class="list-group-item">{{ $productos[2]->categoria->nombre_categoria }}</li>
                        <li class="list-group-item">${{ $productos[2]->precio }}</li>
                    </ul>

                    <div class="card-body">

                        <a href="productos/{{ $productos[2]->id }}">Ver Detalle</a> <br>

                    </div>
                </div>


        </div>
        <br> <br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="/productos" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
            </div>
        </div>
        @endif
    </div>

<br> <br>

</x-layout>
