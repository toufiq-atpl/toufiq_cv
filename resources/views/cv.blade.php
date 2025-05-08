<!DOCTYPE html>
<html class="no-js ss-preload" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>ToufiqAhmed</title>
    
    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">



    <!-- favicons
    ================================================== -->
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"> --}}
    {{-- <link rel="manifest" href="site.webmanifest"> --}}

</head>

<body id="top">


    <!-- # preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- # page wrap
    ================================================== -->
    <div class="s-pagewrap">

        <div class="circles">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>


        <!-- ## site header 
        ================================================== -->
        <header class="s-header">

            <div class="header-mobile">
                <span class="mobile-home-link"><a href="index.html">Toufiq.</a></span>
                <a class="mobile-menu-toggle" href="#0"><span>Menu</span></a>
            </div>

            <div class="row wide main-nav-wrap">
                <nav class="column lg-12 main-nav">
                    <ul>
                        <li><a href="#top" class="home-link">Toufiq.</a></li>
                        <li class="current"><a href="#intro" class="smoothscroll">Intro</a></li>
                        <li><a href="#about" class="smoothscroll">About</a></li>
                        {{-- <li><a href="#works" class="smoothscroll">Works</a></li> --}}
                        <li><a href="#contact" class="smoothscroll">Say Hello</a></li>
                    </ul>
                </nav>
            </div>

        </header> <!-- end s-header -->


        <!-- ## main content
        ==================================================- -->
        <main class="s-content">


            <!-- ### intro
            ================================================== -->
            <section id="intro" class="s-intro target-section">

                <div class="row intro-content wide">

                    <div class="column">
                        <div class="text-pretitle with-line">
                            Hello World
                        </div>

                        <h1 class="text-huge-title">
                            I am ToufiqAhmed, <br>
                            <p class="h3">Fullstack Web Application developer <br></p>
                            {{-- <span class="h6">Laravel</span> <span class="h6">React</span>  --}}
                        </h1>
                    </div>

                    <ul class="intro-social">
                        <li><a href="http://linkedin.com/in/toufiq-ahmed-akki" target='_blank'>LinkedIn</a></li>
                        <li><a href="https://x.com/toufiqahmedakki" target="_blank">Twitter</a></li>
                        <li><a href="https://www.instagram.com/toufiqahmed.akki/" target="_blank">Instagram</a></li>
                    </ul>

                </div> <!-- end intro content -->

                <a href="#about" class="intro-scrolldown smoothscroll">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M11 21.883l-6.235-7.527-.765.644 7.521 9 7.479-9-.764-.645-6.236 7.529v-21.884h-1v21.883z"/></svg>
                </a>

            </section> <!-- end s-intro -->


            <!-- ### about
            ================================================== -->
            <section id="about" class="s-about target-section">


                <div class="row about-info wide" data-animate-block>

                    <div class="column lg-6 md-12 about-info__pic-block">
                        <img src="{{ asset('images/about-photo.jpg') }}" 
                             srcset="{{ asset('images/about-photo.jpg') }}" alt="" class="about-info__pic" data-animate-el>
                    </div>

                    <div class="column lg-6 md-12">
                        <div class="about-info__text" >

                            <h2 class="text-pretitle with-line" data-animate-el>
                                About
                            </h2>
                            <p class="attention-getter" data-animate-el>
                                A passionate full-stack developer with a strong background in building scalable web applications and crafting seamless user experiences. <br>
                                With a deep love for both backend logic and frontend design, I enjoy turning complex problems into clean, efficient solutions. <br>
                                Over the years, I've worked across various industries, helping businesses bring their ideas to life through code. <br>
                                I'm always excited to learn new technologies, collaborate with creative teams, and take on challenging projects that push my skills further. <br>
                            </p>
                            <a href="{{ url('download_cv') }}" class="btn btn--medium u-fullwidth" data-animate-el>Download CV</a>

                        </div>
                    </div>
                </div> <!-- about-info -->


                <div class="row about-expertise" data-animate-block>
                    <div class="column lg-12">

                        <h2 class="text-pretitle" data-animate-el>Expertise</h2>

                        <ul class="skills-list h1" data-animate-el>
                            <li>Laravel</li>
                            <li>ReactJs</li>
                            <li>Databases</li>
                            <li>Tailwind</li>
                            <li>API</li>
                            <li>Design</li>
                        </ul>

                    </div>
                </div> <!-- end about-expertise -->


                <div class="row about-timelines" data-animate-block>

                    <div class="column lg-12 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Experience
                        </h2>

                        <div class="timeline" data-animate-el>

                            @foreach ($experience as $exp)
                                <div class="timeline__block">
                                    <div class="timeline__bullet"></div>
                                    <div class="timeline__header">
                                        <h4 class="timeline__title">{{ $exp->company_name }}, {{ $exp->location }}</h3>
                                        <h5 class="timeline__meta">{{ $exp->job_title }}</h5>
                                        <p class="timeline__timeframe">{{ \Carbon\Carbon::parse($exp->start_date)->format('M Y') }} - {{ isset($exp->end_date) ? \Carbon\Carbon::parse($exp->end_date)->format('M Y') : 'Present' }}</p>
                                    </div>
                                    <div class="timeline__desc">
                                        <p>
                                            {{ $exp->description }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach

    
                        </div> <!-- end timeline -->

                    </div> <!-- end column -->

                    <div class="column lg-12 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Education
                        </h2>

                        <div class="timeline" data-animate-el>


                            @foreach($education as $ed)
                                <div class="timeline__block">
                                    <div class="timeline__bullet"></div>
                                    <div class="timeline__header">
                                        <h4 class="timeline__title">{{ $ed->degree }}, {{ $ed->field_of_study }} </h3>
                                        <h5 class="timeline__meta" >{{ $ed->institution }}</h5>
                                        <h6 class="timeline__meta" style="font-size:0.7em !important">{{ $ed->university }}, {{ $ed->location }} </h6>
                                        <p class="timeline__timeframe">{{ \Carbon\Carbon::parse($ed->end_date)->format('M Y') }}</p>
                                    </div>
                                    {{-- <div class="timeline__desc">
                                        <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                                    </div> --}}
                                </div>
                            @endforeach
    
                        </div> <!-- end timeline -->
                        
                    </div> <!-- end column -->


                </div> <!-- end about-timelines -->

            </section> <!-- end s-about -->


            <!-- ### works
            ================================================== -->
            {{-- @include('components.recent_work') --}}
            <!-- end s-works -->


            <!-- ### contact
            ================================================== -->
            <section id="contact" class="s-contact target-section">

                <div class="row contact-top">
                    <div class="column lg-12">
                        <h2 class="text-pretitle">
                            Get In Touch
                        </h2>

                        <p class="h1">
                            I love to hear from you.
                            Whether you have a question or just 
                            want to chat about design, tech & art — shoot me a message.
                        </p>
                    </div>
                </div> <!-- end contact-top -->

                <div class="row contact-bottom">
                    <div class="column lg-4 md-12 contact-block">
                        <a href="mailto:toufiqahmedakki@gmail.com" class="mailtoui btn btn--medium u-fullwidth contact-btn">Say Hello.</a>
                    </div>
                </div>
                <div class="row contact-bottom">
                    <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Reach me at</h3>
                        <p class="contact-links">
                            <a href="mailto:toufiqahmedakki@gmail.com" class="mailtoui">toufiqahmedakki@gmail.com</a> <br>
                            <a href="Ph:+91 8123239788">+91 8123239788</a>
                        </p>
                    </div>
                    <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Social</h3>
                        <ul class="contact-social">
                            <li><a href="http://linkedin.com/in/toufiq-ahmed-akki" target="_blank">LinkedIn</a></li>
                            <li><a href="https://x.com/toufiqahmedakki" target="_blank" target="_blank">Twitter</a></li>
                            <li><a href="https://www.instagram.com/toufiqahmed.akki/" target="_blank" target="_blank">Instagram</a></li>
                            {{-- <li><a href="#0">Github</a></li> --}}
                        </ul>
                    </div>

                </div> <!-- end contact-bottom -->

            </section> <!-- end contact -->

        </main> <!-- end s-content -->


        <!-- ## footer
        ================================================== -->
        <footer class="s-footer">

            <div class="row">
                <div class="column ss-copyright">
                    <span>© Copyright Toufiq 2025</span> 
                    <!-- <span>Design by <a href="https://www.styleshout.com/">StyleShout</a> Distribution By <a href="https://themewagon.com">Themewagon</a></span> -->
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd"><path d="M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z"/></svg>
                    </a>
                </div>
            </div>

        </footer> <!-- end s-footer -->

    </div> <!-- end -s-pagewrap -->


    <!-- Java Script
    ================================================== -->
    
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>