
@extends('admin.layouts.adminlayout')
@section('content')
<section id="iframe">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Video IFrame
  </h2>

  <!-- Description -->
  <p>
  </p>

  <!--Section: Live preview-->
  <section class="p-1">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6">

        <h4 class="pb-4">YouTube IFrame</h4>

        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6">

        <h4 class="pb-4">Vimeo IFrame</h4>

        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207" allowfullscreen></iframe>
        </div>

      </div>
      <!-- Grid column -->
      
         <!-- Grid column -->
      <div class="col-md-6">

        <h4 class="pb-4">Applied English Grammar</h4>

        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DpHblI81z7U" allowfullscreen></iframe>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
  </section>
  @endsection
  <!--Section: Live preview-->
  

