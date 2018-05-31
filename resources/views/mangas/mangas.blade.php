@extends('layouts/master')

@section('title', 'Mangas')

@section('script')
  <!-- FlexSlider -->
  <script src="{{ URL::asset('js/imagezoom.js') }}"></script>
  <script defer src="{{ URL::asset('js/jquery.flexslider.js') }}"></script>
  <link rel="stylesheet" href="{{ URL::asset('css/flexslider.css') }}" type="text/css" media="screen" />

  <script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
        });
    });
  </script>
  <!-- //FlexSlider-->
@stop

@section('body')
  <div class="head-bread">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Mangas</li>
      </ol>
    </div>
  </div>
  <div class="products-gallery">
    <div class="container">
      <div class="col-md-9 grid-gallery">
        <?php foreach ($mangas as $manga) { ?>
          <div class="col-md-4 grid-stn simpleCart_shelfItem">
            <!-- normal -->
            <div class="ih-item square effect3 bottom_to_top">
              <div class="bottom-2-top">
                <div class="img"><img src="images/grid4.jpg" alt="/" class="img-responsive gri-wid"></div>
                <div class="info">
                  <div class="pull-center styl-hdn">
                    <h3><?php echo $manga->manga_title;?></h3>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <!-- end normal -->
            <div class="quick-view">
              <a href="/manga/<?php echo $manga->manga_id ?>">Quick view</a>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="col-md-3 grid-details">
        <div class="grid-addon">
          <section  class="sky-form">
            <div class="product_right">
              <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
                  <!--<div class="tab1">
                      <ul class="place">
                          <li class="sort">Shoes</li>
                          <li class="by"><img src="images/do.png" alt=""></li>
                          <div class="clearfix"> </div>
                      </ul>
                      <div class="single-bottom">
                          <a href="#"><p>Running</p></a>
                          <a href="#"><p>Foot ball</p></a>
                          <a href="#"><p>Daily</p></a>
                          <a href="#"><p>Sneakers</p></a>
                      </div>
                  </div>-->
              <div class="tab1">
                <ul class="place">
                  <li class="sort">Type</li>
                  <li class="by"><img src="images/do.png" alt=""></li>
                  <div class="clearfix"> </div>
                </ul>
                <div class="single-bottom">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Adventure</a></li>
                  <li><a href="#">Horror</a></li>
                  <li><a href="#">Fantasy</a></li>
                  <li><a href="#">Romance</a></li>
                  <li><a href="#">Sports</a></li>
                </div>
              </div>
                  <!--<div class="tab2">
                      <ul class="place">
                          <li class="sort">Clothing</li>
                          <li class="by"><img src="images/do.png" alt=""></li>
                          <div class="clearfix"> </div>
                      </ul>
                      <div class="single-bottom">
                          <a href="#"><p>Tracks</p></a>
                          <a href="#"><p>Tees</p></a>
                          <a href="#"><p>Hair bands</p></a>
                          <a href="#"><p>Wrist bands</p></a>
                      </div>
                  </div>
                  <div class="tab3">
                      <ul class="place">
                          <li class="sort">Gear</li>
                          <li class="by"><img src="images/do.png" alt=""></li>
                          <div class="clearfix"> </div>
                      </ul>
                      <div class="single-bottom">
                          <a href="#"><p>Running app</p></a>
                          <a href="#"><p>Training club</p></a>
                          <a href="#"><p>Nike Fuel+Band se</p></a>
                      </div>
                  </div>-->
                  <!--script-->
              <script>
                  $(document).ready(function(){
                      $(".tab1 .single-bottom").hide();
                      $(".tab2 .single-bottom").hide();
                      $(".tab3 .single-bottom").hide();
                      $(".tab4 .single-bottom").hide();
                      $(".tab5 .single-bottom").hide();

                      $(".tab1 ul").click(function(){
                          $(".tab1 .single-bottom").slideToggle(300);
                          $(".tab2 .single-bottom").hide();
                          $(".tab3 .single-bottom").hide();
                          $(".tab4 .single-bottom").hide();
                          $(".tab5 .single-bottom").hide();
                      })
                      $(".tab2 ul").click(function(){
                          $(".tab2 .single-bottom").slideToggle(300);
                          $(".tab1 .single-bottom").hide();
                          $(".tab3 .single-bottom").hide();
                          $(".tab4 .single-bottom").hide();
                          $(".tab5 .single-bottom").hide();
                      })
                      $(".tab3 ul").click(function(){
                          $(".tab3 .single-bottom").slideToggle(300);
                          $(".tab4 .single-bottom").hide();
                          $(".tab5 .single-bottom").hide();
                          $(".tab2 .single-bottom").hide();
                          $(".tab1 .single-bottom").hide();
                      })
                      $(".tab4 ul").click(function(){
                          $(".tab4 .single-bottom").slideToggle(300);
                          $(".tab5 .single-bottom").hide();
                          $(".tab3 .single-bottom").hide();
                          $(".tab2 .single-bottom").hide();
                          $(".tab1 .single-bottom").hide();
                      })
                      $(".tab5 ul").click(function(){
                          $(".tab5 .single-bottom").slideToggle(300);
                          $(".tab4 .single-bottom").hide();
                          $(".tab3 .single-bottom").hide();
                          $(".tab2 .single-bottom").hide();
                          $(".tab1 .single-bottom").hide();
                      })
                  });
              </script>
              <!-- script -->
              </section>
              <section  class="sky-form">
                <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
                <div class="row row1 scroll-pane">
                  <div class="col col-4">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
                  </div>
                  <div class="col col-4">
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
                  </div>
                </div>
              </section>
              <!---->
              <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
              <script type='text/javascript'>//<![CDATA[
                $(window).load(function(){
                    $( "#slider-range" ).slider({
                            range: true,
                            min: 0,
                            max: 400000,
                            values: [ 2500, 350000 ],
                            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                            }
                    });
                    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
                  });//]]>
                </script>
                <section  class="sky-form">
                  <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
                  <div class="row row1 scroll-pane">
                    <div class="col col-4">
                      <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Air Max (30)</label>
                    </div>
                    <div class="col col-4">
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Armagadon   (30)</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Helium (30)</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kyron     (30)</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Napolean  (30)</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Foot Rock   (30)</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Radiated  (30)</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Spiked  (30)</label>
                    </div>
                  </div>
                </section>
                <section  class="sky-form">
                  <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
                  <div class="row row1 scroll-pane">
                    <div class="col col-4">
                      <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
                    </div>
                    <div class="col col-4">
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tornado</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kissan</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Oakley</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Manga</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wega</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kings</label>
                      <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
                    </div>
                  </div>
                </section>
              </div>
            </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>

    </div>

  </div>
@stop
