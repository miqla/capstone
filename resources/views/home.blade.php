@extends('layouts.main')

@section('container')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 67px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.jpg" class="d-block w-100" alt="First Slide" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>SCU Gymnasium</h5>
        <p>This is Sichuan University Gymnasium, placed at Wangjiang Campus.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" alt="Second Slide" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>SCU Library</h5>
        <p>Sichuan University library building, placed at Jiangan Campus.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" class="d-block w-100" alt="Third Slide" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>Red Gate</h5>
        <p>Our iconic gate, full of red and become the symbol of our campus.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
  <h1 class="text-center mt-3">About Us</h1>
  <div class="row justify-content-around mt-3">
    <div class="col-lg-6">
      <img src="img/library.jpg" alt="Interior Library" width="500">
    </div>
    <div class="col-lg-6">
      <h3>History</h3>
      <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum eum odio ipsa. Optio sed minima dolores quidem nisi, quasi, distinctio doloremque quos maiores, aut laboriosam corporis at dicta corrupti? Magnam consequuntur quod alias nobis accusamus molestias officia facilis sunt dolor. Quis, magnam assumenda numquam pariatur repellat soluta cum aliquam amet ad enim reiciendis eius, nemo cumque mollitia! Fuga iusto minima inventore aliquam deserunt harum doloremque, pariatur non obcaecati porro tempore hic dolor magnam culpa laudantium neque at voluptates architecto praesentium modi expedita laborum! Nobis qui inventore voluptate sunt suscipit necessitatibus assumenda officiis earum quia <br><br> nihil iure porro cumque ratione laborum, commodi facilis ut maxime aspernatur dignissimos illo! Sunt dicta quam, cum non incidunt, nesciunt quaerat veniam error, tempora architecto voluptatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque alias nobis, vel sed repellat necessitatibus ut excepturi provident, dolor asperiores culpa voluptatibus ab, et expedita nam! Eveniet nobis quaerat dolorem, veritatis pariatur quae praesentium perferendis quia saepe natus blanditiis harum amet voluptatibus fuga non libero cum itaque laborum veniam. Quo! <br><br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita odio nemo sunt tempora! Fuga numquam, nulla magnam suscipit ea alias laboriosam repudiandae, perferendis veritatis assumenda placeat, saepe voluptas tempore impedit doloremque cupiditate excepturi! Maiores molestiae corporis, nisi ratione hic, magnam vitae pariatur soluta veritatis veniam provident labore! Nisi, ea et.</p>
    </div>

    <div class="row mt-4">
      <h1 class="text-center">Gallery</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center" style="text-align: justify;">
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/1600x900/?school" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing. Deserunt beatae sed aspernatur dolore perferendis autem et voluptatem asperiores.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/1600x900/?school" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing. Deserunt beatae sed aspernatur dolore perferendis autem et voluptatem asperiores.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/1600x900/?school" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing. Deserunt beatae sed aspernatur dolore perferendis autem et voluptatem asperiores.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/1600x900/?school" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing. Deserunt beatae sed aspernatur dolore perferendis autem et voluptatem asperiores.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/1600x900/?school" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing. Deserunt beatae sed aspernatur dolore perferendis autem et voluptatem asperiores.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
        <h1 class="text-center">Location</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3435.7712764249814!2d104.0051163146063!3d30.555765601192014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36efc6d2cabb3e93%3A0x223fa394d6361924!2sSichuan%20University%20Jiang&#39;an%20Campus%20%EF%BC%88South%20Gate%201%EF%BC%89!5e0!3m2!1sid!2sid!4v1634459347564!5m2!1sid!2sid" width="600" height="450" style="border:0; margin:20px 0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>

</div>

@include('partials.footer')
  
@endsection