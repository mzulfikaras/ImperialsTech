@extends('user.master-user')

@section('main')
         <!-- HERO -->
         <section class="hero hero-bg d-flex justify-content-center align-items-center">
            <div class="container">
                 <div class="row">

                     <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                           <div class="hero-text">

                                <h1 class="text-white" data-aos="fade-up">We are ready make digital experience on your bussiness</h1>

                                <a href="{{route('user.contact')}}" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Let us discuss together!</a>

                                <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-1"></i> +62 899 440 7084</strong>
                           </div>
                     </div>

                     <div class="col-lg-6 col-12">
                       <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                         <img src="{{asset('assets/user/images/working-girl.png')}}" class="img-fluid" alt="working girl">
                       </div>
                     </div>

                 </div>
            </div>
  </section>


  <!-- ABOUT -->
  <section class="about section-padding pb-0" id="about">
       <div class="container">
            <div class="row">

                 <div class="col-lg-7 mx-auto col-md-10 col-12">
                      <div class="about-info">

                           <h2 class="mb-4" data-aos="fade-up">The best <strong>Digital Agency</strong> in Jakarta, Indonesia</h2>

                           <p class="mb-0" data-aos="fade-up">Imperials Tech is a Digital Agency which is engaged in <strong>Website Development</strong>, <strong>Digital Marketing</strong> and <strong>Social Media Management</strong>.
                           <br><br>You can grow your business, online store, company, or branding with us. We are ready to help you to keep growing even better.</p>
                      </div>

                      <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                       <img src="{{asset('assets/user/images/office.png')}}" class="img-fluid" alt="office">
                     </div>
                 </div>

            </div>
       </div>
  </section>


  <!-- PROJECT -->
  <section class="project section-padding" id="project">
       <div class="container-fluid">
            <div class="row">

                 <div class="col-lg-12 col-12">

                     <h2 class="mb-5 text-center" data-aos="fade-up">
                         Please take a look through our
                         <strong>featured Digital Trends</strong>
                     </h2>

                      <div class="owl-carousel owl-theme" id="project-slide">
                        @if (!empty($produk))
                            @foreach ($produk as $p)
                             <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                 <img src="{{Storage::url($p->images)}}" class="img-fluid" alt="project image">

                                 <div class="project-info">
                                      <small>{{$p->nama_produk}}</small>

                                      <h3>
                                        <span>{{$p->deskripsi}}</span>
                                      </h3>
                                 </div>
                            </div>
                            @endforeach
                        @endif
                      </div>
                 </div>

            </div>
       </div>
  </section>


  <!-- TESTIMONIAL -->
<section class="testimonial section-padding" id="testimonial">
    <div class="container">

        <div class="row">

            @if (!empty($testi))
                @foreach ($testi as $t)
                 <div class="col-lg-6 col-md-5 col-12">
                     <div class="contact-image" data-aos="fade-up">

                       <img src="{{asset('assets/user/images/female-avatar.png')}}" class="img-fluid" alt="website">
                     </div>
                 </div>


                 {{-- <div class="owl-carousel owl-theme" id="testimonial-slide"> --}}
                    <div class="col-lg-6 col-md-7 col-12">
                      <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                      <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                      <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">{{$t->deskripsi}}</h2>

                      <p data-aos="fade-up" data-aos-delay="400">
                        <strong>{{$t->client}}</strong>
                        @if (!empty($t->jabatan))

                        <span class="mx-1">/</span>

                        <small>{{$t->jabatan}}</small>
                        @endif
                      </p>
                    </div>
                 {{-- </div> --}}
                @endforeach
            @endif
        </div>
    </div>
</section>
@endsection
