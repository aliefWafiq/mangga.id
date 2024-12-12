<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../src/output.css" />
  <style>
    ::-webkit-scrollbar {
      width: 0px;
    }
  </style>
</head>

<body class="bg-slate-100 h-screen">
  <!-- <header
    class="lg:opacity-80 drop-shadow-sm fixed before:absolute top-0 left-0 w-full flex items-center z-30 bg-primary">
    <div class="container-fluid py-3 lg:py-5 w-full">
      <div class="flex w-full">
        <div class="lg:px-5 px-2">
          <h1 class="font-bold text-xl">Mangga.id</h1>
        </div>
        <div class="w-full flex justify-end my-1 mx-3">
          <button id="hamburger" name="hamburger" type="button" class="block absolute lg:hidden">
            <div class="bungkus space-y-2">
              <span class="menu transition duration-300 ease-in-out origin-top-left"></span>
              <span class="menu transition duration-300 ease-in-out"></span>
              <span class="menu transition duration-300 ease-in-out origin-bottom-left"></span>
            </div>
          </button>
        </div>
        <div class="flex items-center">
          <nav id="nav-menu"
            class="lg:block hidden lg:opacity-80 absolute py-10 lg:py-0 lg:static opacity-100 lg:max-w-full top-full right-0 h-screen lg:h-auto max-w-[250px] w-1/2 bg-white md:bg-primary">
            <ul class="lg:flex block">
              <li class="lg:mx-5 mx-2 group">
                <a href="#home" class="text-secondary flex py-2 mx-8 lg:mx-2 text-lg font-semibold">Home</a>
              </li>
              <li class="lg:mx-5 mx-2 group">
                <a href="#about" class="text-secondary flex py-2 mx-8 lg:mx-2 text-lg font-semibold">About</a>
              </li>
              <li class="lg:mx-5 mx-2 group">
                <a href="#content" class="text-secondary flex py-2 mx-8 lg:mx-2 text-lg font-semibold">Collection</a>
              </li>
              <li class="lg:mx-5 mx-2 group">
                <a href="login.php" class="text-secondary flex py-2 mx-8 lg:mx-2 text-lg font-semibold">Masuk</a>
              </li>
              <li class="lg:mx-5 mx-2 group">
                <a href="regis.php" class="text-secondary flex py-2 mx-8 lg:mx-2 text-lg font-semibold">Daftar</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header> -->

  <section id="home" class="h-screen overflow-hidden bg-no-repeat bg-cover"
    style="background-image: url(../img/asset\ landing\ page/wano.jpg);">
    <div
      class="container h-full bg-black rounded-md bg-clip-padding p-5 backdrop-filter backdrop-blur-md bg-opacity-10">
      <div class="flex flex-col w-full h-full">
        <div class="w-full h-[75%] pb-5 px-5 flex justify-center">
          <div class="w-1/4 h-full mx-2 rounded-3xl overflow-hidden">
            <img src="../img/asset landing page/kagurabachi.jpg" alt="" class="w-full h-full object-cover">
          </div>
          <div class="rounded-3xl overflow-hidden w-full h-full">
            <video autoplay muted loop class="w-full h-full object-cover">
              <source src="../img/asset landing page/The Ghost..mp4" type="video/mp4">
            </video>
          </div>
          <div
            class="bg-black rounded-3xl overflow-hidden bg-clip-padding flex flex-col backdrop-filter backdrop-blur-md bg-opacity-60 w-1/3 h-full mx-3 text-secondary">
            <div class="flex w-full h-[15%]">
              <h1 class="text-3xl font-bold w-full h-full flex items-center justify-center">Mangga.id</h1>
              <div
                class="bg-gray-100 bg-clip-padding backdrop-filter backdrop-blur-md rounded-tl-[50px] bg-opacity-10 w-2/4 h-full">
              </div>
            </div>
            <div
              class="bg-gray-100 rounded-tl-[50px] bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 w-full h-[85%] flex flex-col justify-center px-5">
              <div>
                <p class="text-lg">Manggaku.id adalah sebuah website dimana kita bisa membaca berbagai macam komik mulai
                  dari manga hingga manhwa dengan berbagai genre yang dijamin seru</p>
              </div>
              <div class="flex flex-wrap mt-4">
                <p class="mx-1 my-1 bg-[#E88D67] px-2 rounded-full font-semibold">#Action</p>
                <p class="mx-1 my-1 bg-[#E88D67] px-2 rounded-full font-semibold">#Comedy</p>
                <p class="mx-1 my-1 bg-[#E88D67] px-2 rounded-full font-semibold">#Adventure</p>
                <p class="mx-1 my-1 bg-[#E88D67] px-2 rounded-full font-semibold">#Romance</p>
                <p class="mx-1 my-1 bg-[#E88D67] px-2 rounded-full font-semibold">#Fantasy</p>
                <p class="mx-1 my-1 bg-[#E88D67] px-2 rounded-full font-semibold">#History</p>
                <p class="mx-1 my-1 bg-[#E88D67] px-2 rounded-full font-semibold">#Gore</p>
              </div>
            </div>
          </div>
        </div>
        <div class="h-[25%] w-full flex justify-center px-5">
          <div
            class="bg-black rounded-3xl overflow-hidden bg-clip-padding flex flex-col backdrop-filter backdrop-blur-md bg-opacity-60 w-2/3 h-full mx-3 p-5">
            <p class="text-4xl font-bold text-secondary">Gas baca!!</p>
            <div class="flex gap-5 items-center h-full">
              <a href="regis.php"
                class="bg-[#E88D67] w-1/2 py-2 text-secondary text-center rounded-full text-lg font-semibold">Daftar</a>
              <a href="login.php"
                class="bg-secondary text-[#E88D67] w-1/2 py-2 text-center rounded-full text-lg font-semibold">Masuk</a>
            </div>
          </div>
          <!-- <div class="w-full h-full mx-3 overflow-hidden flex rounded-3xl">
            <img src="../img/asset landing page/aii.jpg" alt="" class="w-full h-full object-cover">
          </div> -->
          <div
            class="bg-black text-secondary rounded-3xl overflow-hidden bg-clip-padding flex flex-col backdrop-filter backdrop-blur-md bg-opacity-60 w-2/3 h-full mx-3 p-5">
            <p class="text-xl font-bold mb-3">Chapter update</p>
            <div>
              <p>Kaoru hana wa rin to saku Chapter234</p>
              <p>Kaoru hana wa rin to saku Chapter234</p>
              <p>Kaoru hana wa rin to saku Chapter234</p>
              <p>Kaoru hana wa rin to saku Chapter234</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- introduction -->
  <!-- <section id="about" class="bg-slate-600 h-screen  w-full lg:pt-36">
    <div class="h-full w-full flex">
      <div class="lg:ml-36 mx-5 lg:mx-0 flex flex-col justify-center lg:w-1/2 lg:justify-start">
        <div class=" text-white lg:mt-20 mt-10">
          <h1 class="text-5xl font-bold mb-3">Yuk kenalan sama Mangga.id</h1>
        </div>
        <div class="">
          <p class="bg-red text-sm my-3 text-white">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia adipisci rerum sequi ratione, itaque,
            laborum sint modi reiciendis omnis minus perspiciatis? Doloremque eaque eveniet cumque nobis est
            consequuntur, voluptate mollitia commodi debitis voluptas totam, culpa, quis quod. Dignissimos, soluta, odio
            similique repellendus rerum repudiandae consequatur veritatis voluptatem ea, non dolorem.
          </p>
        </div>
      </div>
      <div class="w-1/2 p-16 hidden lg:flex bg-red-00">
        <img src="../img/20th cen.jpeg" alt="" class="w-1/2 mx-3">
        <img src="../img/Kiga.jpeg" alt="" class="w-1/2">
      </div>
    </div>
  </section> -->
  <!-- end -->

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
              <li class="flex flex-wrap justify-center">
                <div class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                  <div class="transisi-card">
                    <div class="lg:my-5 my-2 lg:mx-5 mx-2">
                      <p class="font-bold text-lg lg:text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                  <div class="transisi-card">
                    <div class="lg:my-5 my-2 lg:mx-5 mx-2">
                      <p class="font-bold text-lg lg:text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                  <div class="transisi-card">
                    <div class="lg:my-5 my-2 lg:mx-5 mx-2">
                      <p class="font-bold text-lg lg:text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div
                  class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 hidden rounded-2xl mx-2 overflow-hidden group md:block">
                  <div class="transisi-card">
                    <div class="my-5 mx-5">
                      <p class="font-bold text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div
                  class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 hidden rounded-2xl mx-2 overflow-hidden group md:block">
                  <div class="transisi-card">
                    <div class="my-5 mx-5">
                      <p class="font-bold text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
              </li>
              <li class="flex flex-wrap justify-center">
                <div class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                  <div class="transisi-card">
                    <div class="lg:my-5 my-2 lg:mx-5 mx-2">
                      <p class="font-bold text-lg lg:text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                  <div class="transisi-card">
                    <div class="lg:my-5 my-2 lg:mx-5 mx-2">
                      <p class="font-bold text-lg lg:text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                  <div class="transisi-card">
                    <div class="lg:my-5 my-2 lg:mx-5 mx-2">
                      <p class="font-bold text-lg lg:text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div
                  class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 hidden rounded-2xl mx-2 overflow-hidden group md:block">
                  <div class="transisi-card">
                    <div class="my-5 mx-5">
                      <p class="font-bold text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div
                  class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 hidden rounded-2xl mx-2 overflow-hidden group md:block">
                  <div class="transisi-card">
                    <div class="my-5 mx-5">
                      <p class="font-bold text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
              </li>
              <li class="flex flex-wrap justify-center">
                <div class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                  <div class="transisi-card">
                    <div class="lg:my-5 my-2 lg:mx-5 mx-2">
                      <p class="font-bold text-lg lg:text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                  <div class="transisi-card">
                    <div class="lg:my-5 my-2 lg:mx-5 mx-2">
                      <p class="font-bold text-lg lg:text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                  <div class="transisi-card">
                    <div class="lg:my-5 my-2 lg:mx-5 mx-2">
                      <p class="font-bold text-lg lg:text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div
                  class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 hidden rounded-2xl mx-2 overflow-hidden group md:block">
                  <div class="transisi-card">
                    <div class="my-5 mx-5">
                      <p class="font-bold text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
                <div
                  class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 hidden rounded-2xl mx-2 overflow-hidden group md:block">
                  <div class="transisi-card">
                    <div class="my-5 mx-5">
                      <p class="font-bold text-xl">One piece</p>
                      <p class="font-semibold text-lg">Oda</p>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium quasi vel fugit dolore ex
                        sunt pariatur atque totam inventore odio.</p>
                    </div>
                  </div>
                  <div class="h-full w-full">
                    <img src="../img/law.jpeg" alt="" class="h-full w-full" />
                  </div>
                </div>
              </li>
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