<?php
require '../config/call.php';

$manga = "SELECT * FROM manga";
$listManga = $proses->list($manga);
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../src/output.css?<?= time() ?>" />
  <style>
    ::-webkit-scrollbar {
      width: 0px;
    }
  </style>
</head>

<body class="bg-slate-100 h-screen">
  <section id="home" class="h-screen overflow-hidden bg-no-repeat bg-cover"
    style="background-image: url(../img/asset\ landing\ page/wano.jpg);">
    <div
      class="container-fluid h-full bg-black rounded-md bg-clip-padding p-2 md:p-5 backdrop-filter backdrop-blur-md bg-opacity-10 ">
      <div class="flex flex-col w-full h-full">
        <div class="w-full md:h-[75%] h-4/5 pb-5 p-2 md:px-5 flex flex-col md:flex-row items-center justify-center">
          <div class="w-1/4 h-full mx-2 rounded-3xl overflow-hidden hidden md:block">
            <img src="../img/asset landing page/kagurabachi.jpg" alt="" class="w-full h-full object-cover">
          </div>
          <div class="rounded-3xl overflow-hidden w-full h-1/2 md:h-full">
            <video autoplay muted loop class="w-full h-full object-cover">
              <source src="../img/asset landing page/The Ghost..mp4" type="video/mp4">
            </video>
          </div>
          <div
            class="bg-black rounded-3xl overflow-hidden mt-3 flex flex-col glassmorphism bg-opacity-60 w-full md:w-1/3 h-1/2 md:h-full mx-3 text-secondary shadow-[0px_1px_25px_4px_rgba(232,_141,_103,_0.71)]">
            <div class="flex w-full h-[15%]">
              <h1 class="text-3xl font-bold w-full h-full flex items-center justify-center">Mangga.id</h1>
              <div
                class="bg-gray-100 glassmorphism rounded-tl-[50px] bg-opacity-10 w-2/4 h-full hidden md:block">
              </div>
            </div>
            <div
              class="bg-gray-100 rounded-tl-[50px] mt-2 md:mt-0 glassmorphism bg-opacity-10 w-full h-[85%] flex flex-col justify-center px-5">
              <div>
                <p class="text-lg">Mangga.id adalah sebuah website dimana kita bisa membaca berbagai macam komik mulai
                  dari manga hingga manhwa dengan berbagai genre yang dijamin seru</p>
              </div>
              <div class="md:flex flex-wrap mt-4 hidden">
                <p class="mx-1 my-1 bg-third px-2 rounded-full font-semibold">#Action</p>
                <p class="mx-1 my-1 bg-third px-2 rounded-full font-semibold">#Comedy</p>
                <p class="mx-1 my-1 bg-third px-2 rounded-full font-semibold">#Adventure</p>
                <p class="mx-1 my-1 bg-third px-2 rounded-full font-semibold">#Romance</p>
                <p class="mx-1 my-1 bg-third px-2 rounded-full font-semibold">#Fantasy</p>
                <p class="mx-1 my-1 bg-third px-2 rounded-full font-semibold">#History</p>
                <p class="mx-1 my-1 bg-third px-2 rounded-full font-semibold">#Gore</p>
              </div>
            </div>
          </div>
        </div>
        <div class="md:h-[25%] h-1/2 w-full flex justify-center md:px-5 ">
          <div
            class="bg-black rounded-3xl overflow-hidden glassmorphism bg-opacity-60 w-2/3 md:h-full h-fit mx-3 p-3 md:p-5 flex flex-col md:flex-row">
            <div class="w-1/2 h-full  hidden md:flex justify-center flex-col text-secondary">
              <p class="md:text-4xl font-bold text-3xl">Gas baca!!</p>
              <p class="font-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, nesciunt.</p>
            </div>
            <div class="items-center h-full w-full md:w-1/2 flex flex-col justify-center">
              <a href="regis.php"
                class="bg-third w-full py-2 text-secondary text-center rounded-full text-lg font-semibold my-3 hover:bg-secondary hover:text-third">Daftar</a>
              <a href="login.php"
                class="bg-secondary text-third w-full py-2 text-center rounded-full text-lg font-semibold hover:bg-third hover:text-secondary">Masuk</a>
            </div>
          </div>
          <div
            class="bg-black text-secondary rounded-3xl overflow-hidden flex flex-col glassmorphism bg-opacity-60 w-2/3 h-full mx-3 md:p-5 p-2">
            <img src="../img/asset landing page/aii.jpg" alt="" class="w-full h-full object-cover rounded-3xl">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="h-screen w-full bg-secondary">
    <div class="w-full h-full flex">
      <div class="w-1/2 h-full flex justify-center items-center">
        <div class="w-3/4 h-3/4 flex justify-center items-center relative">
          <div class="rounded-xl shadow-2xl overflow-hidden w-56 h-80 absolute z-10">
            <img src="../img/asset landing page/DANDADAN.jpg" alt="" class="object-cover">
          </div>
          <div class="rounded-xl shadow-2xl overflow-hidden w-56 h-80 top-3 left-4 absolute">
            <img src="../img/asset landing page/cover-kaoru.jpg" alt="" class="object-cover">
          </div>
          <div class="rounded-xl shadow-2xl overflow-hidden w-56 h-80 absolute bottom-4 right-5">
            <img src="../img/asset landing page/cover mushoku.jpg" alt="" class="object-cover">
          </div>
        </div>
      </div>
      <div class="w-1/2 h-full flex justify-center items-center">
        <div class="w-3/4">
          <h1 class="text-4xl my-3 font-semibold">Lorem, ipsum dolor.</h1>
          <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsa veritatis optio quo sunt vero praesentium incidunt iusto accusantium libero?</p>
        </div>
      </div>
    </div>
  </section>

  <!-- main content -->
  <section id="content" class="lg:pt-36 pt-20 pb-36 w-full">
    <div class="lg:mx-5">
      <h1 class="font-bold text-xl text-center lg:mb-5 mb-2">
        Our Manga Collection
      </h1>
      <div class="flex justify-center">
        <div class="relative w-full glide-01">
          <!-- Slides -->
          <div class="overflow-hidden" data-glide-el="track">
            <ul
              class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
              <?php 
              $chunks = array_chunk($listManga, 5);
              foreach ($chunks as $chunk) { ?>
                <li class="flex flex-wrap justify-center">
                  <?php foreach($chunk as $x){ ?>
                  <div class="lg:w-64 lg:h-96 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                    <div class="transisi-card">
                      <div class="h-full px-5 flex flex-col justify-center">
                        <p class="font-bold text-lg lg:text-xl mb-3"><?php if (strlen($x['nama']) >= 19) {
                                                                  echo $judul = substr($x['nama'], 0, 25) . '...';
                                                                } else {
                                                                  echo $x['nama'];
                                                                } ?></p>
                        <p class="font-semibold text-lg"><?php  ?></p>
                        <p><?php if (strlen($x['sipnosis']) >= 19) {
                              echo $judul = substr($x['sipnosis'], 0, 200) . '...';
                            } else {
                              echo $x['sipnosis'];
                            } ?></p>
                      </div>
                    </div>
                    <div class="h-full w-full">
                      <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="h-full w-full" />
                    </div>
                  </div>
                  <?php } ?>
                </li>
                <?php } ?>
            </ul>
          </div>
          <!-- Controls -->
          <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2"
            data-glide-el="controls">
            <button
              class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20"
              data-glide-dir="<" aria-label="prev slide">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5">
                <title>prev slide</title>
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
              </svg>
            </button>
            <button
              class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20"
              data-glide-dir=">" aria-label="next slide">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5">
                <title>next slide</title>
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end -->
</body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>
<script src="../index.js"></script>
<script>
  var glide01 = new Glide(".glide-01", {
    type: "slider",
    focusAt: "center",
    perView: 1,
    autoplay: 3000,
    animationDuration: 3000,
    gap: 0,
    classes: {
      activeNav: "[&>*]:bg-slate-700",
    },
  });

  var glide02 = new Glide(".glide-02", {
    type: "slider",
    focusAt: "center",
    perView: 1,
    autoplay: 3000,
    animationDuration: 3000,
    gap: 0,
    classes: {
      activeNav: "[&>*]:bg-slate-700",
    },
  });

  var glide03 = new Glide(".glide-03", {
    type: "slider",
    focusAt: "center",
    perView: 1,
    autoplay: 3000,
    animationDuration: 3000,
    gap: 0,
    classes: {
      activeNav: "[&>*]:bg-slate-700",
    },
  });

  glide01.mount();
  glide02.mount();
  glide03.mount();
</script>