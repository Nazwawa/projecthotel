<html>
<head></head>
<body>
<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <p  class="margin_0">Kami menyediakan beberapa fasilitas untuk Anda </p>
             </div>
          </div>
       </div>
       <div class="row">
       @foreach ($facilities as $faciliti)
          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img src="/image/{{ $facility->image }}" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>{{ $facility ->nama_fasilitas }}</h3>
                   <p>{{ $facility->keterangan }}</p>
                </div>
             </div>
          </div>
       @endforeach
       </div>
    </div>
 </div>
 <!-- end blog -->

 
 <!--  footer -->
 <footer>
    <div class="footer">
       <div class="container">
          <div class="row">
             <div class=" col-md-4">
                <h3>Contact US</h3>
                <ul class="conta">
                   <li><i class="fa fa-map-marker" aria-hidden="true"></i> Bandung</li>
                   <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                   <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> hotelhebat@gmail.com</a></li>
                </ul>
             </div>
             <div class="col-md-4">
                <h3>Menu Link</h3>
                <ul class="link_menu">
                   <li><a href="{{ route('user.dashboard') }}">Home</a></li>
                   <li><a href="{{ route('uKamar.index') }}"> Kamar</a></li>
                   <li class="active"><a href="#">Fasilitas</a></li>
                   <li><a href="{{ route('bookings.index') }}">Booking</a></li>
                </ul>
             </div>
             <div class="col-md-4">
                <ul class="social_icon">
                   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                   <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </footer>
</body>
</html>