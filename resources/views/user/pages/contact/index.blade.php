@extends('user.master-user')

@section('main')
<section class="contact section-padding">
    <div class="container">
         <div class="row">

              <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                <h1 class="mb-4">Hey there, Let's <strong>talk</strong> about <strong>creative</strong> projects</h1>

                <p>or email us at <a href="mailto:techimperials@gmail.com">techimperials@gmail.com</a></p>
                <p>Please follow our <a href="#footer"><strong>social media</strong></a> on the bottom corner.</p>
              </div>

              <div class="col-lg-8 mx-auto col-md-10 col-12">
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif

                <form action="{{route('contact.store')}}" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                  @csrf

                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Name">

                      @error('nama')
                      <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                    </div>

                    <div class="col-lg-6 col-12">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">

                      @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                    </div>

                    <div class="col-lg-12 col-12">
                      <textarea class="form-control @error('pesan') is-invalid @enderror" rows="6" name="pesan" placeholder="Message"></textarea>

                      @error('pesan')
                        <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                    </div>

                    <div class="col-lg-5 mx-auto col-7">
                      <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                    </div>
                  </div>

                </form>
              </div>

         </div>
    </div>
</section>
@endsection
