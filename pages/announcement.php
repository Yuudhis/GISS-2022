<?php

require_once "../templates/navbarforpage.php";

?>
<head>
    <title>GISS 2022</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" />
</head>
<body>
<div class="container mx-auto px-4 py-14 sm:px-6 xl:px-12">
  <div class="flex flex-col items-center justify-center space-y-6 text-center">
    <h1 class="text-5xl font-bold tracking-normal sm:text-5xl lg:text-6xl">Announcement</h1>
    <p class="max-w-screen-sm text-lg text-gray-600 sm:text-2xl">check out our lastest news here! <br>
make sure you dont miss all the information you need</p>
  </div>

<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    <!--Card 1-->
    <a href="/announcement/opening.php">
    <div class="rounded overflow-hidden shadow-lg transition-shadow ease-in-out duration-300 shadow-none hover:shadow-xl">
      <img class="w-full" src="/assets/meeting.jpg" alt="Meeting">
      <div class="px-6 py-4">
        <div class="font-bold text-2xl mb-2">Gama Inovasi Startup Summit 2022: Kesempatan Emas Dapatkan Akselerasi Bisnis</div>
        <p class="text-gray-700 text-base">
        Gama Inovasi Startup Summit (GISS) 2022 merupakan program dan kegiatan akselerasi untuk mengembangkan inovasi produk, baik digital maupun non-digital dengan tujuan untuk meningkatkan nilai startup.
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gradient-to-r from-purple-500 to-cyan-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">June 21st, 2022</span>
        <!-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">News</span> -->
        <!-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span> -->
      </div>
    </div>
    </a>
    <!--Card 2-->
    <!-- <div class="rounded overflow-hidden shadow-lg">
      <img class="w-full" src="/river.jpg" alt="River">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">River</div>
        <p class="text-gray-700 text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#summer</span>
      </div>
    </div> -->

    <!--Card 3-->
    <!-- <div class="rounded overflow-hidden shadow-lg">
      <img class="w-full" src="/forest.jpg" alt="Forest">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Forest</div>
        <p class="text-gray-700 text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
      </div>
    </div> -->
  </div>
</div>
</div>
<script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>

<?php

require_once "../templates/footerforpage.php";

?>