<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>{{$datat[1]->titre}}</h2>
        <p>{{$datat[1]->text}}</p>
      </div>

      <div class="row skills-content">
      @foreach ($datas as $value)
        <div class="col-lg-6" data-aos="fade-up">

          <div class="progress">
            <span class="skill">{{$value->nom}} <i class="val">{{$value->pourcentage}}</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$value->pourcentage}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          
          

        </div>
    @endforeach
      </div>

    </div>
  </section><!-- End Skills Section -->