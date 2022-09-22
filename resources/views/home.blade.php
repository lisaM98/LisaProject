
   @include('share.header');
   
   
   <section class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <h1><strong class="cur">Best</strong><br>Fresh Oranges</h1>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                            <div class="button_section"><a class="main_bt" href="{{url('/')}}#fruits">Buy Now</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full text_align_center">
                        <img class="slide_img" src="images/orange.png" alt="#" /> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" src="images/Suntala-Orange.jpg" alt="#" />
                </div>
                <div class="col-md-6">
                    <div class="heading margin_top_30">
                        <h2>About our shop</h2>
                    </div>
                    <div class="full margin_top_20">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="full margin_top_30">
                        <a class="main_bt" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- section -->
    @if(Session::get('user_type'))
    <div id="fruits" class="section dark_bg layout_padding left_white">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                    <div class="heading full text_align_center">
                        <h2 class="white_font full text_align_center">Our all sellers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($data as $seller)
               <div class="col-md-4 margin_top_30">
                    <div class="full fr">
                        <a href="{{url('/single_seller_list/'.$seller->email)}}"><img class="img-responsive" src="images/f1.png" alt="#" /></a>
                    </div>
                    <div class="full text_align_center">
                        <h3 class="white_font">{{$seller->name}}<br><strong class="theme_blue">Fresh Fruit</strong></h3>
                    </div>   
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
                    <div class="full main_heading_1">
                        <h2>Fresh Oranges</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doloreprehenderin </p>
                    </div>   
                    <div class="full margin_top_30">
                        <a class="main_bt" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 margin_top_30 padding_right_0">
                    <div class="full">
                        <img src="images/green_fr.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- end section -->
<!-- section -->
    <div id="blog" class="section dark_bg layout_padding right_white">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                    <div class="heading full text_align_center">
                        <h2 class="white_font full text_align_center">Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-md-4 margin_top_30">
                    <div class="full" style="overflow: hidden;">
                    <div class="full bl">
                        <img class="img-responsive" src="images/blog1.png" alt="#" />
                    </div>
                    <div class="full blog_blue text_align_center">
                        <h5 class="white_font">Post by David Mark 27/07/2019</h3>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniadolor..</p>
                    </div> 
                     </div>  
                </div>
                <div class="col-md-4 margin_top_30">
                    <div class="full" style="overflow: hidden;">
                    <div class="full bl">
                        <img class="img-responsive" src="images/blog2.png" alt="#" />
                    </div> 
                    <div class="full blog_blue text_align_center">
                        <h5 class="white_font">Post by David Mark 27/07/2019</h3>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniadolor..</p>
                    </div>
                     </div>
                </div>
                <div class="col-md-4 margin_top_30">
                    <div class="full" style="overflow: hidden;">
                    <div class="full bl">
                        <img class="img-responsive" src="images/blog3.png" alt="#" />
                    </div> 
                    <div class="full blog_blue text_align_center">
                        <h5 class="white_font">Post by David Mark 27/07/2019</h3>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniadolor..</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div id="contact" class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-6 padding_left_0">
                    <div class="full">
                        <img class="" src="images/images.jpeg" alt="#" style="width: 100%;"/>
                    </div>
                </div>

               <div class="col-md-6">
                <div class="heading">
                        <h2>Request a <strong class="theme_blue">Call Back</strong></h2>
                    </div>
                    <div class="full margin_top_20">
                        <form>
                        <div class="row">
                            <div class="col-sm-12">
                               <input class="form-control" placeholder="Your Name" type="text" required="">
                            </div>
                            <div class="col-sm-12">
                               <input class="form-control" placeholder="Email" type="Email" required="">
                            </div>
                            <div class="col-sm-12">
                                <input class="form-control" placeholder="Phone" type="text" required="">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control textarea" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <button class="main_bt">Send</button>
                    </form>
                    </div>   
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- end section -->
@include('share.footer');