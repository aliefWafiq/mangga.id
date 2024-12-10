<?php
$name = $_GET['user'];
$username = "SELECT * FROM user WHERE name='$name'";
$hasil = $proses->list($username);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>
   <link rel="stylesheet" href="../../src/output.css?<?= time() ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>



   <div class="md:p-4 sm:ml-64">
      <!-- main content -->
      <div class="container">

         <!-- banner -->
         <div class="flex justify-center">
            <div class="relative w-full glide-01">
               <div class="overflow-hidden" data-glide-el="track">
                  <ul class="relative w-full overflow-hidden whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                     <li class="flex bg-gray-300 h-auto">
                        <div class="content flex flex-row md:ml-36 ml-10 py-5">
                           <div class="flex lg:w-48 lg:h-72 w-28 h-48 py-5">
                              <img src="../img/20th cen.jpeg" alt="" class="rounded-xl w-full h-full">
                           </div>
                           <div class="judul md:mx-3 mx-2 py-5">
                              <p class="text-lg font-semibold">20th Century Boys</p>
                              <div class="md:w-[30rem] w-52 absolute">
                                 <p class="py-2 md:py-5 hidden md:block text-sm">20th Century Boys atau Anak Lelaki Abad 20 (20世紀少年, Nijusseiki Shōnen) adalah judul sebuah manga fiksi ilmiah karya Urasawa Naoki yang terkenal dengan karya lainnya seperti Monster, Pluto. Manga ini diterbitkan sejak tahun 1999 oleh Shōgakukan. Tahun 2001, manga ini meraih Penghargaan Manga Kodansha dalam kategori Umum. Di Indonesia, 20th Century Boys diterbitkan Level Comics mulai tahun 2005. Ceritanya sendiri cukup kompleks dan berat, khas Urasawa Naoki.</p>
                                 <p class="py-2 md:hidden block text-sm">20th Century Boys adalah judul sebuah manga fiksi ilmiah karya Urasawa Naoki. Manga ini diterbitkan sejak tahun 1999 oleh Shōgakukan. Tahun 2001</p>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="flex bg-gray-200 h-auto">
                        <div class="content flex flex-row md:ml-36 ml-10 py-5">
                           <div class="flex lg:w-48 lg:h-72 w-28 h-48 py-5">
                              <img src="../img/Kiga.jpeg" alt="" class="rounded-xl w-full h-full">
                           </div>
                           <div class="judul md:mx-3 mx-2 py-5">
                              <p class="text-lg font-semibold">Chainsaw Man</p>
                              <div class="md:w-[30rem] w-52 absolute">
                                 <p class="py-2 md:py-5 hidden md:block text-sm">sosok Denji yang telah mati ini bangkit dengan kekuatan iblis, yang membuatnya mampu untuk mengubah bagian tubuhnya menjadi gergaji mesin. Karena kemampuan baru Denji inilah, menimbulkan risiko bagi masyarakat, pemburu setan elit Biro Keamanan Publik, hingga Makima. Denji mencurahkan segalanya dan bertarung dengan sekuat tenaga untuk mewujudkan mimpinya yang naif.</p>
                                 <p class="py-2 md:hidden block text-sm">Chainsaw Man adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Tatsuki Fujimoto.</p>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="flex bg-gray-300 h-auto">
                        <div class="content flex flex-row md:ml-36 ml-10 py-5">
                           <div class="flex lg:w-48 lg:h-72 w-28 h-48 py-5">
                              <img src="../img/law.jpeg" alt="" class="rounded-xl w-full h-full">
                           </div>
                           <div class="judul md:mx-3 mx-2 py-5">
                              <p class="text-lg font-semibold">One Piece</p>
                              <div class="md:w-[30rem] w-52 absolute">
                                 <p class="py-2 md:py-5 hidden md:block text-sm">Gol D. Roger merupakan Raja Bajak Laut menghadapi eksekusi mati yang divonis oleh Pemerintah Dunia. Sebelum nyawanya dihabisi, Roger mengucapkan kata-kata terakhir.Ia mengizinkan semua bajak laut di seluruh dunia untuk memburu harta karunnya yang tersembunyi di Grand Line, bernama One Piece. Siapa pun bajak laut yang berhasil menemukan harta karunnya bisa memilikinya.</p>
                                 <p class="py-2 md:hidden block text-sm">One Piece adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Eiichiro Oda.</p>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>

               <!-- Controls -->
               <div class="absolute flex items-center justify-between w-full h-0 px-4 top-1/2" data-glide-el="controls">
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>prev slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                     </svg>
                  </button>
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>next slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                     </svg>
                  </button>
               </div>
            </div>
         </div>
         <!-- banner end -->

         <!-- profile -->
         <div class="flex bg-slate-200 p-5 rounded-3xl mt-5 mx-3 md:mx-0">
            <?php foreach ($hasil as $x) { ?>
               <div>
                  <div class="md:w-28 md:h-28 w-24 h-24 rounded-full bg-black">
                     <img src="../img/<?php echo $x['foto']; ?>" alt="" class=" w-full h-full overflow-hidden rounded-full">
                  </div>
               </div>
               <div class="md:py-5 py-2 px-5 w-full">
                  <p class="md:text-2xl text-xl"><?php echo $x['name'] ?></p>
                  <p class="md:text-lg text-base">Level 100</p>
                  <div class="bg-yellow-100 h-2 w-full rounded-xl">
                     <div class="bg-yellow-300 h-2 w-1/2 rounded-xl"></div>
                  </div>
               </div>
            <?php } ?>
         </div>
         <!-- profile end -->

         <!-- daily update -->
         <div class="mt-10">
            <p class="text-2xl text-center mb-7 font-semibold">Daily Update</p>
            <div class="flex flex-row flex-wrap md:mx-10 mx-3">
               <?php foreach ($hasilManga as $s) { 
                 $waktu = date('d', strtotime($s['waktu']));

                 if($waktu == date('d')){
                  ?>
                  <div class="md:mx-2 mt-2 ">
                     <a href="home/manga.php?manga=<?php echo $s['nama'] ?>&user=<?php echo $name ?>">
                        <div class="bg-slate-100 border-solid border-2 border-gray-200 lg:w-48 lg:h-72 ml-2 w-28 h-48 rounded-xl">
                           <div class="lg:w-full lg:h-40 w-full h-20 bg-black rounded-t-xl">
                              <img src="../img/cover-manga/<?php echo $s['cover']; ?>" alt="" class="w-full rounded-t-xl object-cover h-full" />
                              <p class="font-semibold text-center md:text-xl text-lg md:mt-2 mb-5 nama-manga"><?php if(strlen($s['nama']) >= 19){
                                                                                                               echo $judul = substr($s['nama'], 0, 16).'...'; }else{
                                                                                                               echo $s['nama']; }?>
                              </p>
                              <div class="bg-gray-200 text-center md:mx-3 md:mt-10">
                                 <p class="text-base md:py-1">Chapter <?php echo $s['chapter'] ?></p>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               <?php } } ?>
            </div>
         </div>
         <!-- daily end -->

         <!-- recomendation -->
         <div class="mt-20">
            <p class="text-2xl text-center mb-5 font-semibold">You may like</p>
            <a href="" class="mx-2 text-base font-semibold text-blue-600">See more</a>
            <div class="relative flex w-full justify-start glide-02">
               <!-- Slides -->
               <div class="overflow-hidden" data-glide-el="track">
                  <ul class=" overflow-hidden whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                     <?php foreach($hasilManga as $x){ ?>
                     <li class="flex flex-row flex-wrap justify-center">
                        <div class="bg-slate-100 border-solid border-2 border-gray-200 lg:w-48 lg:h-72 ml-2 w-28 h-48 rounded-xl">
                           <div class=" lg:h-40 w-full h-20 bg-black rounded-t-xl">
                              <img src="../img/cover-manga/<?php echo $x['cover']; ?>" alt="" class="w-full rounded-t-xl object-cover h-full" />
                              <p class="font-semibold text-center md:text-xl text-lg md:mt-2 mb-5"><?php  if(strlen($x['nama']) >= 19){
                                                                                                               echo $judul = substr($x['nama'], 0, 16).'...'; }else{
                                                                                                               echo $x['nama']; }?></p>
                              <div class="bg-gray-200 text-center md:mx-3 md:mt-10">
                                 <p class="text-base md:py-1"><?php echo $x['chapter'] ?></p>
                              </div>
                           </div>
                        </div>
                     </li>
                     <?php }?>
                     <?php foreach($hasilManga as $x){ ?>
                     <li class="flex flex-row flex-wrap justify-center">
                        <div class="bg-slate-100 border-solid border-2 border-gray-200 lg:w-48 lg:h-72 ml-2 w-28 h-48 rounded-xl">
                           <div class=" lg:h-40 w-full h-20 bg-black rounded-t-xl">
                              <img src="../img/cover-manga/<?php echo $x['cover']; ?>" alt="" class="w-full rounded-t-xl object-cover h-full" />
                              <p class="font-semibold text-center md:text-xl text-lg md:mt-2 mb-5"><?php  if(strlen($x['nama']) >= 19){
                                                                                                               echo $judul = substr($x['nama'], 0, 16).'...'; }else{
                                                                                                               echo $x['nama']; }?></p>
                              <div class="bg-gray-200 text-center md:mx-3 md:mt-10">
                                 <p class="text-base md:py-1"><?php echo $x['chapter'] ?></p>
                              </div>
                           </div>
                        </div>
                     </li>
                     <?php }?>
                  </ul>
               </div>

               <!-- Controls -->
               <div class="absolute flex items-center justify-between w-full h-0 px-4 top-1/2" data-glide-el="controls">
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>prev slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                     </svg>
                  </button>
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>next slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                     </svg>
                  </button>
               </div>
            </div>
         </div>
         <!-- recom end -->
         <div class="mt-40">a</div>
</body>
<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
<script>
   var glide01 = new Glide(".glide-01", {
      type: "slider",
      focusAt: "center",
      perView: 1,
      autoplay: 4000,
      animationDuration: 3000,
      gap: 0,
      classes: {
         activeNav: "[&>*]:bg-slate-700",
      },
   });

   var glide02 = new Glide(".glide-02", {
      type: "slider",
      perView: 5,
      animationDuration: 1000,
      gap: 0,
      classes: {
         activeNav: "[&>*]:bg-slate-700",
      },
   });

   glide01.mount();
   glide02.mount();
</script>

</html>