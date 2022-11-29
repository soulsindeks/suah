<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/c58bfaf51a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Lorem</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            {{-- sidebar --}}
            @include('components.sidebar')
            
            <div class="titik col-md-7">
                <div class="row">
                    <div class="col-md-11 about-profile d-flex align-items-start justify-content-between mt-5 ">
                        <div class="foto-profile ">
                            <img src="img/01.jpg" alt="" class="foto-img">
                            <div class="nama-lengkap ms-5 ps-3">
                                <div class="nama">
                                    Haikal Fahrizi
                                </div>
                                <div class="waktu d-flex align-items-center">
                                    <span>Aug 23</span>
                                    <span class="p-1">·</span>
                                    <span>min 3 read</span>
                                </div>
                            </div>
                        </div>
                        <div class="social-profile mt-2">
                            <span class="icon fs-5 p-1"><i class='bx bxl-twitter'></i></span>
                            <span class="icon fs-5 p-1"><i class='bx bxl-facebook-circle' ></i></span>
                            <span class="icon fs-5 p-1"><i class='bx bxl-linkedin-square' ></i></span>
                            <span class="icon fs-5 p-1 pe-4"><i class='bx bx-link'></i></span>
                            <span class="icon fs-5 pe-4"><i class='bx bx-bookmark'></i></span>
                            <span class="icon fs-5"><i class='fs-5 bx bx-dots-horizontal-rounded'></i></span>
                        </div>
                    </div>
                    <article class="col-md-11 d-flex align-items-start justify-content-center">
                        <section>
                            <h1 class="fs-3 mt-4 fw-bold">Lorem ipsum dolor sit, amet consectetur adipisicing. </h1>
                            <figure class="mt-3">
                                <picture>
                                    <img class="img-fluid" src="img/geneiryodan.jpg" alt="">
                                </picture>
                                <figcaption class="fig mt-2">
                                    My Documents
                                </figcaption>
                            </figure>
                            <div class="isi mt-4">
                                <h2 class="fw-bold fs-4 mt-2">Lorem ipsum dolor sit.</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, animi repudiandae excepturi nemo alias aut?</p>
                                <h2 class="fw-bold fs-4 mt-2">Lorem ipsum dolor sit.</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad amet cum accusantium ullam laborum inventore error? Dicta quasi neque, error iusto officia totam hic, laudantium libero explicabo odit id nam.</p>
                                <h2 class="fw-bold fs-4 mt-2">Lorem ipsum dolor sit.</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores doloribus veniam perspiciatis, soluta nisi obcaecati aut? Molestias quasi hic unde nostrum tempore dolor. Nemo vero ex laudantium odio, temporibus quidem nisi, voluptas eum aliquid eveniet obcaecati ratione maxime totam veniam.</p>
                            </div>
                        </section>
                    </article>
                    
                </div>
            </div>

            <div class="isi-rightside col-md-3 ">
                <!-- Topics -->
                <div class="rightside-line">
                    <div class="row">
                        <div class="col-md-12 mt-4 ms-5">
                            {{-- search --}}
                            @include('components.search')
                            {{-- Profile --}}
                            <div class="sidenews-profile mt-5">
                                <img src="img/01.jpg" alt="" class="news-foto">
                                <h2 class="fs-5 mt-3"><span>Haikal Fahrizi</span></h2>
                                <span style="color: rgb(134, 128, 128);">44 Followers</span>
                                <p class="desc-side mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, esse!</p>

                                <div class="tombol d-flex">
                                    <button class="sidenews-button1 me-2    ">Follow</button>
                                    <button class="sidenews-button2"><i class='fs-5 bx bx-envelope'></i></button>
                                </div>
                                
                            </div>
                            {{-- Side News --}}
                            <div class="side-news mt-4 pt-3">
                                <h2 class="fs-6">More from Medium</h2>
                                <div class="news-about mt-3">
                                    <div class="side-profile d-flex">
                                        <img src="img/01.jpg" alt="" class="profile-img">
                                        <span class="side-text ps-2">Haikal Fahrizi</span>
                                    </div>
                                    <div class="side-titles mt-2">
                                        <div class="titles-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur.</div>
                                    </div>
                                </div>
                                <div class="news-about mt-3">
                                    <div class="side-profile d-flex">
                                        <img src="img/01.jpg" alt="" class="profile-img">
                                        <span class="side-text ps-2">Haikal Fahrizi</span>
                                    </div>
                                    <div class="side-titles mt-2">
                                        <div class="titles-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur.</div>
                                    </div>
                                </div>
                                <div class="news-about mt-3">
                                    <div class="side-profile d-flex">
                                        <img src="img/01.jpg" alt="" class="profile-img">
                                        <span class="side-text ps-2">Haikal Fahrizi</span>
                                    </div>
                                    <div class="side-titles mt-2">
                                        <div class="titles-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur.</div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
