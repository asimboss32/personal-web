@extends('master')

@section('content')
<section id="hero" class="hero section dark-background">

    <img src="{{asset('assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h2>Nuralom</h2>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer">Photographer</span><span class="typed-cursor typed-cursor--blink"></span></p>
      <div class="social-links">
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </section><!-- /Hero Section -->
    
@endsection