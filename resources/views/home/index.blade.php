<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Invest KUY</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="" /></div>
    </div>
    <!-- end loader -->
    @include('shared._right-menu');
    <!-- header -->
    @include('shared._header');
    <!-- end header -->
    <!-- start slider section -->
    <div id="top_section" class=" banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @php
                                $index = 1;
                            @endphp
                            @foreach ($items as $item)
                                <div class="carousel-item {{ $index == 1 ? 'active' : '' }}">
                                    <div class="container-fluid">
                                        <div class="carousel-caption relative">
                                            <div class="row d_flex">
                                                <div class="col-md-6">
                                                    <div class="con_img">
                                                        <figure><img class="headline_img" src="{{ $item->get_enclosure()->get_link() }}" alt="{{ $item->get_title() }}" /></figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="bluid">
                                                        <h2>{{ $item->get_title() }}</h2>
                                                        <a class="read_more" href="{{ $item->get_link() }}">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $index = $index + 1;
                                @endphp
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Kutipan</span></a> oleh TradingView</div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
        {
          "symbols": [
            {
              "proName": "FOREXCOM:SPXUSD",
              "title": "S&P 500"
            },
            {
              "proName": "FOREXCOM:NSXUSD",
              "title": "Nasdaq 100"
            },
            {
              "proName": "FX_IDC:EURUSD",
              "title": "EUR/USD"
            },
            {
              "proName": "BITSTAMP:BTCUSD",
              "title": "BTC/USD"
            },
            {
              "proName": "BITSTAMP:ETHUSD",
              "title": "ETH/USD"
            }
          ],
          "colorTheme": "light",
          "isTransparent": false,
          "showSymbolLogo": true,
          "locale": "id"
        }
      </script>
    </div>
    <!-- end wallet -->
    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_border">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="titlepage text_align_left">
                                    <h2>About Us</h2>
                                </div>
                                <div class="about_text">
                                    <p>It is a long established fact that a reader will be distracted bIt is a long established fact that a reader will be distracted by y It is a long established fact that a reader will be distracted by It is a long established fact that a reader will be distracted by </p>
                                    <a class="read_more" href="about.html">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img class="img_responsive" src="images/about2.png" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- graf -->
    <div class="graf">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs md-tabs graf_tab" id="myTabMD" role="tablist">
                        <li>
                            <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#tab1" role="tab" aria-controls="home-md" aria-selected="true">Bitcoin(BTC)</a>
                        </li>
                        <li>
                            <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile-md" aria-selected="false">Bitcoin Cash(BCH)</a>
                        </li>
                        <li>
                            <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab3" role="tab" aria-controls="contact-md" aria-selected="false">Bitcoin Lite(LTC)</a>
                        </li>
                        <li>
                            <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab4" role="tab" aria-controls="contact-md" aria-selected="false">Bitcoin Ethereum(ETH)</a>
                        </li>
                        <li>
                            <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab5" role="tab" aria-controls="contact-md" aria-selected="false">Bitcoin Ripple(XRP)</a>
                        </li>
                    </ul>
                    <div class="tab-content card  graf_content" id="myTabContentMD">
                        <div class="tab-pane fade show active padi" id="tab1" role="tabpanel" aria-labelledby="home-tab-md">
                            <div class="row">
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Daily Change </h4>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour Low </h4>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour High </h4>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Today Open </h4>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4>BTC 09876 <br> 24 hour volume </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="graf_bootom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <figure>
                                                <h3 class="h3tota">Total Growth</h3>
                                                <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                            <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade padi" id="tab2" role="tabpanel" aria-labelledby="profile-tab-md">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Daily Change </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour Low </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour High </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Today Open </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>BTC 09876 <br> 24 hour volume </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="graf_bootom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <figure>
                                                <h3 class="h3tota">Total Growth</h3>
                                                <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                            <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade padi" id="tab3" role="tabpanel" aria-labelledby="contact-tab-md">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Daily Change </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour Low </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour High </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Today Open </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>BTC 09876 <br> 24 hour volume </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="graf_bootom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <figure>
                                                <h3 class="h3tota">Total Growth</h3>
                                                <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                            <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade padi" id="tab4" role="tabpanel" aria-labelledby="contact-tab-md">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Daily Change </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour Low </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour High </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Today Open </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>BTC 09876 <br> 24 hour volume </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="graf_bootom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <figure>
                                                <h3 class="h3tota">Total Growth</h3>
                                                <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                            <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade padi" id="tab5" role="tabpanel" aria-labelledby="contact-tab-md">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Daily Change </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour Low </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour High </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Today Open </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>BTC 09876 <br> 24 hour volume </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="graf_bootom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <figure>
                                                <h3 class="h3tota">Total Growth</h3>
                                                <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                            <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end graf -->
    <!-- footer -->
    @include('shared._footer');
    <!-- end footer -->
      <!-- Javasccript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      <!-- Javascript for update widget DOM -->
    <script>
        window.onload = function() {
            setTimeout(function() {
                updateStyleWidget();
            }, 2000);
        }

        function updateStyleWidget() {
            document.querySelector('.tradingview-widget-container').style.height = '220px';
            document.querySelector('.tradingview-widget-container > iframe').style.height = 'unset';
            {{--iframe selector--}}
            {{--document.querySelector('#widget-ticker-container').style.height = '220px';--}}
            {{--document.querySelector('.tv-ticker-item-change__head').style.height = '100px';--}}
        }
    </script>
   </body>
</html>
