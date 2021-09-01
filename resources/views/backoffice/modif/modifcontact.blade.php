@extends('template/back')
@section('content')
<h1 class="text-center" style="margin: 150px"> BACK OFFICE | Contact</h1>




    @foreach ( $datap as $value)
    <section id="contact" class="contact">
        <div class="container">
    
    
          <div class="row" data-aos="fade-in">
    
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>{{$value->location}}</h4>
                  <p>{{$value->locationR}}</p>
                </div>
    
                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>{{$value->email}}</h4>
                  <p>{{$value->emailR}}</p>
                </div>
    
                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>{{$value->call}}</h4>
                  <p>{{$value->callR}}</p>
                </div>
    
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
               </div>
    
            </div>
    
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">{{$value->yname}}</label>
                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">{{$value->yemail}}</label>
                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">{{$value->subject}}</label>
                  <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <label for="name">{{$value->message}}</label>
                  <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">{{$value->smessage}}</button></div>
              </form>
            </div>
    
          </div>
    
        </div>
      </section>

      <div style="margin-left: 40%; margin-top:100px; margin-bottom:100px;">
        <a class="text-center" href="{{route('show4',$value->id)}}" style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;">SHOW</a>
    </div>
        
    
    @endforeach



    <div style="margin-left: 40%; margin-top:100px;">
        <a href="/back.html" class="text-center" style="width:250px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:auto">Retours vers Back office</a>
        </div>
    











@endsection