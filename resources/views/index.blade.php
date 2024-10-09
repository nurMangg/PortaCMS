<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $Site->name ?? 'Portofolio'}}</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{ url('storage/'.$Media->id.'/' .$Media->file_name) }}" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('home/css/style.css')}}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/0faa490725.js" crossorigin="anonymous"></script>
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="{{ url('storage/'.$Media->id.'/' .$Media->file_name) }}" alt="{{ $profile->name }}" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="{{ $profile->name }}">{{ $profile->name }}</h1>

          <p class="title">{{ $profile->spesific_skill }}</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:{{ $profile->email }}" class="contact-link">{{ $profile->email }}</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:{{ $profile->phone }}" class="contact-link">{{ $profile->phone }}</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="{{ $profile->birth_date }}">{{ $profile->birth_date }}</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>{{ $profile->address }}</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">
          @if ($profile->facebook_url != null)
              <li class="social-item">
                  <a href="{{ $profile->facebook_url }}" class="social-link" target="_blank" rel="noopener noreferrer">
                      <ion-icon name="logo-facebook"></ion-icon>
                  </a>
              </li>
          @endif

          @if ($profile->twitter_url != null)
              <li class="social-item">
                  <a href="{{ $profile->twitter_url }}" class="social-link" target="_blank" rel="noopener noreferrer">
                      <ion-icon name="logo-twitter"></ion-icon>
                  </a>
              </li>
          @endif

          @if ($profile->instagram_url != null)
              <li class="social-item">
                  <a href="{{ $profile->instagram_url }}" class="social-link" target="_blank" rel="noopener noreferrer">
                      <ion-icon name="logo-instagram"></ion-icon>
                  </a>
              </li>
          @endif

          @if ($profile->linkedin_url != null)
              <li class="social-item">
                  <a href="{{ $profile->linkedin_url }}" class="social-link" target="_blank" rel="noopener noreferrer">
                      <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
              </li>
          @endif

          @if ($profile->github_url != null)
              <li class="social-item">
                  <a href="{{ $profile->github_url }}" class="social-link" target="_blank" rel="noopener noreferrer">
                      <ion-icon name="logo-github"></ion-icon>
                  </a>
              </li>
          @endif

          @if ($profile->youtube_url != null)
              <li class="social-item">
                  <a href="{{ $profile->youtube_url }}" class="social-link" target="_blank" rel="noopener noreferrer">
                      <ion-icon name="logo-youtube"></ion-icon>
                  </a>
              </li>
          @endif

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          @if ($Blog->count() > 0)
            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Blog</button>
            </li>
          @endif


          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Download</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          {{ $profile->description }}
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">
            @foreach ($WhatIMDo as $item)
            <li class="service-item">

              <div class="service-icon-box">
                 <i class="{{ $item->icon }}" style="color: #FFD43B; font-size: 50px"></i>
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">{{ $item->title }}</h4>

                <p class="service-item-text">
                  {{ $item->description }}
                </p>
              </div>

            </li>
            @endforeach

          </ul>

        </section>


        <!--
          - testimonials
        -->
        @if ($Testimonial->count() > 0)
        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">
            @foreach ($Testimonial as $item)
              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>

                  <figure class="testimonials-avatar-box">
                    <img src="{{ asset('home/images/avatar-1.png')}}" alt="Daniel lewis" width="60" data-testimonials-avatar>
                  </figure>

                  <h4 class="h4 testimonials-item-title" data-testimonials-title>{{ $item->name }}</h4>

                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      {{ $item->description }}
                    </p>
                  </div>

                </div>
              </li>
            @endforeach
          </ul>
        </section>
        @endif
        


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        @if ($Client->count() > 0)
        <section class="clients">

          <h3 class="h3 clients-title">Clients</h3>

          <ul class="clients-list has-scrollbar">
            @foreach ($Client as $item)
              <li class="clients-item">
                <a href="#">
                  <img src="{{ url('storage/'.$item->logo)}}" width="209px" height="131px" alt="client logo">
                </a>
              </li>
            @endforeach

          </ul>

        </section>
        @endif
        

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            @foreach ($Education as $item)
              <li class="timeline-item">

                <h4 class="h4 timeline-item-title">{{ $item->institution }}</h4>

                <span>
                  {{ $item->start_date }} — 
                  @if ($item->end_date == null)
                      Present
                  @else
                      {{ $item->end_date }}
                  @endif
              </span>
              

                <p class="timeline-text">
                  {{ $item->description }}
                </p>

              </li>
            @endforeach

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            @foreach ($Experience as $item)

              <li class="timeline-item">

                <h4 class="h4 timeline-item-title">{{ $item->position }} - {{ $item->company }}</h4>

                <span>
                  {{ $item->start_date }} — 
                  @if ($item->end_date == null)
                      Present
                  @else
                      {{ $item->end_date }}
                  @endif
                </span>

                <p class="timeline-text">
                  {{ $item->description }}
                </p>

              </li>

            @endforeach
          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            @foreach ($Skills as $item)
              <li class="skills-item">

                <div class="title-wrapper">
                  <h5 class="h5">{{ $item->name }}</h5>
                  <data value="{{ $item->percent }}">{{ $item->percent }}%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: {{ $item->percent }}%;"></div>
                </div>

              </li>
            @endforeach
            
          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>
            @foreach ($PartOf as $item)
              <li class="filter-item">
                <button data-filter-btn>{{ $item->part_of }}</button>
              </li>
            @endforeach

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>
              @foreach ($PartOf as $item)
                <li class="filter-item">
                  <button data-filter-btn>{{ $item->part_of }}</button>
                </li>
              @endforeach

            </ul>

          </div>

          <ul class="project-list">
            @foreach ($Porto as $item)
              <li class="project-item  active" data-filter-item data-category="{{ Str::lower($item->part_of)}}">
                <a href="#">

                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img src="{{ url('storage/'.$item->file_upload )}}" alt="{{ $item->title }}" loading="lazy">
                  </figure>

                  <h3 class="project-title">{{ $item->title }}</h3>

                  <p class="project-category">{{ $item->part_of }}</p>

                </a>
              </li>
            @endforeach

          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->
      @if ($Blog->count() > 0)
      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">
            @if ($Blog->count() > 0)
              @foreach ($Blog as $item)
                <li class="blog-post-item">
                  <a href="@if($item->link) {{ $item->link }} @else # @endif" target="@if($item->link) _blank @else _self @endif">
    
                    <figure class="blog-banner-box">
                      <img src="{{ asset('home/images/blog-1.jpg')}}" alt="Design conferences in 2022" loading="lazy">
                    </figure>
    
                    <div class="blog-content">
    
                      <div class="blog-meta">
                        <p class="blog-category">Design</p>
    
                        <span class="dot"></span>
    
                        <time datetime="2022-02-23">Fab 23, 2022</time>
                      </div>
    
                      <h3 class="h3 blog-item-title">Design conferences in 2022</h3>
    
                      <p class="blog-text">
                        Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                      </p>
    
                    </div>
    
                  </a>
                </li>
              @endforeach
            @else
              <p>No Post Found</p>
            @endif
          
          </ul>

        </section>

      </article>
      @endif
      





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe
              src="{{ $Contact->link_maps }}"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="email" name="receive_email" class="form-input" placeholder="Email address" required data-form-input hidden value="{{ $Contact->receive_email }}">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

      {{-- 
        #DOWNLOAD 
      --}}
      <article class="download" data-page="download">

        <header>
          <h2 class="h2 article-title">Download</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">
            @foreach ($Download as $item)
            <li class="blog-post-item">
              <a href="{{ url('storage/'.$item->upload)}}" target="_blank" download>

                <figure class="blog-banner-box">
                  <img src="{{ url('storage/'.$item->cover_image)}}" alt="{{ $item->title }}" loading="lazy">

                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Portfolio</p>

                    <span class="dot"></span>

                    <time datetime="{{ $item->updated_at }}">{{ $item->updated_at }}</time>
                  </div>

                  <h3 class="h3 blog-item-title">{{ $item->title }}</h3>

                  <p class="blog-text">
                    {{ $item->short_description }}
                  </p>

                </div>

              </a>
            </li>
            @endforeach
            

          

          

          </ul>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="{{ asset('home/js/script.js') }}"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>