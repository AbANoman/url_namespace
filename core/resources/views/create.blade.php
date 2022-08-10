@extends('layouts.main')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Short links, big results</h1>
          <h2>A URL shortener built by Abdullah Al Noman to complete NameSpace IT task requirements.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{ url('/#services') }}" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

  <!-- ======= Cta Section ======= -->
    <section id="services" class="cta">
      <div data-aos="zoom-in">

      <div class="row justify-content-center">
            <div class="col-md-10">

                @if(session()->has('url'))
                    <div class="alert alert-success">
                        Here you go- <a id="hash-link" target="_blank" href="{{ session()->get('url') }}">{{ session()->get('url') }}</a>
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ url('/links') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="url" class="col-md-2 col-form-label text-md-right">{{ __('Long URL') }}</label>

                        <div class="col-md-8">
                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" placeholder="Shorten Your Link..." autocomplete="off" autofocus>

                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label for="url" class="col-md-2 col-form-label text-md-right">{{ __('Customize Link') }}</label>

                        <div class="col-md-8">
                            <input id="hash" type="text" class="form-control @error('hash') is-invalid @enderror" name="hash" value="{{ old('hash') }}" placeholder="Put customize hash (Optional)" autocomplete="off" autofocus>

                            @error('hash')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-md-8 offset-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_private" id="is-private" {{ old('is_private') ? 'checked' : '' }}>

                                <label class="form-check-label" for="is-private">
                                    {{ __('Is Private') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row hidden" id="allowed-email">
                        <label for="url" class="col-md-2 col-form-label text-md-right">{{ __('Allowed Emails') }}</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control @error('allowed_email') is-invalid @enderror" name="allowed_email" placeholder="If private, Input your mail." autocomplete="off">

                            @error('allowed_email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0 mt-2">
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="cta-btn">
                                {{ __('Shorten URL') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </section><!-- End Cta Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About NameSpace</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            Having a clear and focused strategy is critically important to the success of your project, and without a welldefined strategy, yours may stall or even fail.  A successful strategic plan does the following:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Provides Direction and Action Plans</li>
              <li><i class="ri-check-double-line"></i> Prioritizes and Aligns Activities</li>
              <li><i class="ri-check-double-line"></i> Enhances Communication and Commitment</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            We understand our customers needs. Our customers needs are at the center of our business. By communicating with our customers we learn a great deal from them. This way we get a valuable picture of what's important to them and provide them with that product or service to help their business become successful.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Pricing for brands and businesses of all sizes. Connect to your audience with branded links, QR Codes, and a Link-in-bio that will get their attention.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>৳</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 50 Short links/month</li>
                <li><i class="bx bx-check"></i> Namespace-branded Link-in-bio</li>
                <li><i class="bx bx-check"></i> Custom back-halves</li>
                <li class="na"><i class="bx bx-x"></i> <span>Namespace-branded QR Codes</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Link history and reporting</span></li>
              </ul>
              <a href="{{ url('/generate-shorten-link') }}" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>STARTER</h3>
              <h4><sup>৳</sup>480<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 200 bit.ly links/month</li>
                <li><i class="bx bx-check"></i> Namespace-branded Link-in-bio</li>
                <li><i class="bx bx-check"></i> Custom back-halves</li>
                <li><i class="bx bx-check"></i> Namespace-branded QR Codes</li>
                <li class="na"><i class="bx bx-x"></i> <span>Link history and reporting</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>PREMIUM</h3>
              <h4><sup>৳</sup>2600<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> 1,500 branded links/month</li>
                <li><i class="bx bx-check"></i> Namespace-branded Link-in-bio</li>
                <li><i class="bx bx-check"></i> Custom back-halves</li>
                <li><i class="bx bx-check"></i> Namespace-branded QR Codes</li>
                <li><i class="bx bx-check"></i> Link history and reporting</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What is a URL Shortener?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                A URL shortener, also known as a link shortener, seems like a simple tool, but it is a service that can have a dramatic impact on your marketing efforts.
                <br>
                Link shorteners work by transforming any long URL into a shorter, more readable link. When a user clicks the shortened version, they're automatically forwarded to the destination URL.
                <br>
                Think of a short URL as a more descriptive and memorable nickname for your long webpage address. You can, for example, use a short URL like bit.ly/CelebrateBitly so people will have a good idea about where your link will lead before they click it.
                <br>
                If you're contributing content to the online world, you need a URL shortener.

                Make your URLs stand out with our easy to use free link shortener above.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Benefits of a Short URL<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                How many people can even remember a long web address, especially if it has tons of characters and symbols? A short URL can make your link more memorable. Not only does it allow people to easily recall and share your link with others, it can also dramatically improve traffic to your content.
                <br>
                On a more practical side, a short URL is also easier to incorporate into your collateral - whether you're looking to engage with your customers offline or online.
                <br>
                Bitly is the best URL shortener for everyone, from influencers to small brands to large enterprises, who are looking for a simple way to create, track and manage their links.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What is a Custom URL Shortener?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                A custom URL shortener, sometimes referred to as a branded URL shortener, lets you brand your links.
                <br>
                For example, instead of bit.ly/2m75BWD, you could use a custom short URL like yourbrnd.co/2m75BWD.
                <br>
                There are several benefits of branding your short links. Branded links build trust between your audience and your business, drive more clicks, give your audience a preview of where they are being taken and increase brand awareness.
                <br>
                A link shortening service that includes custom short URLs is vital to improving audience engagement with your communications. A short URL is good, but a custom URL works every time.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  @endsection



  