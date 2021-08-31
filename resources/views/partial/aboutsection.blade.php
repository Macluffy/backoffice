<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>{{$datat[0]->titre}} </h2>
        <p>{{$datat[0]->text}}</p>
      </div>

      
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{asset('img/profile-img.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$dataa[0]->soustitre}} &amp; Web Developer.</h3>
          <p class="font-italic">
            {{$dataa[0]->petittext}}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$dataa[0]->birthday}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$dataa[0]->website}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$dataa[0]->phone}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$dataa[0]->city}}</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$dataa[0]->age}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$dataa[0]->degree}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$dataa[0]->PHEmailone}}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$dataa[0]->Freelance}}</li>
              </ul>
            </div>
          </div>
          <p>
            {{$dataa[0]->text}}
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->