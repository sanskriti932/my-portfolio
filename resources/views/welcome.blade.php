<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sanskriti Lamichhane</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  @vite('resources/css/app.css')
  <style>
    body {
      padding: 10px;
      /* Add space around the entire content */
    }

    /* Fade-in effect */
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 3s ease, transform 3s ease;
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>

<body class="bg-[#1f2835] text-[#f1faee]">
  <header class="lg:px-16 px-4 flex flex-wrap items-center py-4 shadow-md ">
    <!-- Logo Section -->
    <div class="flex-1 flex justify-between items-center">
    </div>

    <!-- Mobile Menu Button -->
    <label for="menu-toggle" class="cursor-pointer md:hidden block">
      <svg class="fill-current text-[#f1faee]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input type="checkbox" id="menu-toggle" class="hidden" />

    <!-- Navbar Links -->
    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
      <nav>
        <ul class="md:flex items-center justify-between text-base  pt-4 md:pt-0">

          <li><a class="md:p-4 py-3 px-0 block" href="https://www.linkedin.com/in/sanskriti-lamichhane-12a354234/">
              <span style="color:#e5daf0;">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50" fill="currentColor">
                  <path d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 41 C 44 42.668484 42.668484 44 41 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 14 11.011719 C 12.904779 11.011719 11.919219 11.339079 11.189453 11.953125 C 10.459687 12.567171 10.011719 13.484511 10.011719 14.466797 C 10.011719 16.333977 11.631285 17.789609 13.691406 17.933594 A 0.98809878 0.98809878 0 0 0 13.695312 17.935547 A 0.98809878 0.98809878 0 0 0 14 17.988281 C 16.27301 17.988281 17.988281 16.396083 17.988281 14.466797 A 0.98809878 0.98809878 0 0 0 17.986328 14.414062 C 17.884577 12.513831 16.190443 11.011719 14 11.011719 z M 14 12.988281 C 15.392231 12.988281 15.94197 13.610038 16.001953 14.492188 C 15.989803 15.348434 15.460091 16.011719 14 16.011719 C 12.614594 16.011719 11.988281 15.302225 11.988281 14.466797 C 11.988281 14.049083 12.140703 13.734298 12.460938 13.464844 C 12.78117 13.19539 13.295221 12.988281 14 12.988281 z M 11 19 A 1.0001 1.0001 0 0 0 10 20 L 10 39 A 1.0001 1.0001 0 0 0 11 40 L 17 40 A 1.0001 1.0001 0 0 0 18 39 L 18 33.134766 L 18 20 A 1.0001 1.0001 0 0 0 17 19 L 11 19 z M 20 19 A 1.0001 1.0001 0 0 0 19 20 L 19 39 A 1.0001 1.0001 0 0 0 20 40 L 26 40 A 1.0001 1.0001 0 0 0 27 39 L 27 29 C 27 28.170333 27.226394 27.345035 27.625 26.804688 C 28.023606 26.264339 28.526466 25.940057 29.482422 25.957031 C 30.468166 25.973981 30.989999 26.311669 31.384766 26.841797 C 31.779532 27.371924 32 28.166667 32 29 L 32 39 A 1.0001 1.0001 0 0 0 33 40 L 39 40 A 1.0001 1.0001 0 0 0 40 39 L 40 28.261719 C 40 25.300181 39.122788 22.95433 37.619141 21.367188 C 36.115493 19.780044 34.024172 19 31.8125 19 C 29.710483 19 28.110853 19.704889 27 20.423828 L 27 20 A 1.0001 1.0001 0 0 0 26 19 L 20 19 z M 12 21 L 16 21 L 16 33.134766 L 16 38 L 12 38 L 12 21 z M 21 21 L 25 21 L 25 22.560547 A 1.0001 1.0001 0 0 0 26.798828 23.162109 C 26.798828 23.162109 28.369194 21 31.8125 21 C 33.565828 21 35.069366 21.582581 36.167969 22.742188 C 37.266572 23.901794 38 25.688257 38 28.261719 L 38 38 L 34 38 L 34 29 C 34 27.833333 33.720468 26.627107 32.990234 25.646484 C 32.260001 24.665862 31.031834 23.983076 29.517578 23.957031 C 27.995534 23.930001 26.747519 24.626988 26.015625 25.619141 C 25.283731 26.611293 25 27.829667 25 29 L 25 38 L 21 38 L 21 21 z"></path>
                </svg>
              </span>
            </a>
          </li>
          <li><a class="md:p-4 py-3 px-0 block md:mb-0 mb-2" href="https://github.com/sanskriti932/">
              <span style="color:#e5daf0;">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 64 64" fill="currentColor">
                  <path d="M 31 2 C 15.011719 2 2 15.011719 2 31 C 2 43.648438 10.144531 54.425781 21.457031 58.378906 C 21.617188 58.492188 21.808594 58.5625 22.011719 58.566406 C 24.839844 59.492188 27.863281 60 31 60 C 46.988281 60 60 46.988281 60 31 C 60 15.011719 46.988281 2 31 2 Z M 31 4 C 45.886719 4 58 16.113281 58 31 C 58 42.660156 50.570313 52.613281 40.199219 56.386719 C 40.089844 56.0625 40 55.582031 40 55.253906 L 40 50 C 40 47.90625 38.976563 45.625 37.96875 44.09375 C 43.519531 43.15625 49.863281 40.277344 49.863281 29.53125 C 49.863281 26.585938 48.941406 23.988281 47.125 21.800781 C 47.523438 20.488281 48.015625 17.71875 46.640625 14.242188 C 46.53125 13.964844 46.300781 13.75 46.015625 13.65625 C 45.734375 13.570313 43.167969 12.902344 37.839844 16.398438 C 35.671875 15.839844 33.378906 15.550781 31 15.542969 C 28.632813 15.550781 26.335938 15.839844 24.175781 16.398438 C 18.847656 12.898438 16.273438 13.566406 15.996094 13.65625 C 15.710938 13.75 15.480469 13.964844 15.371094 14.242188 C 13.992188 17.722656 14.484375 20.488281 14.890625 21.800781 C 13.066406 23.988281 12.144531 26.585938 12.144531 29.53125 C 12.144531 40.179688 18.375 43.113281 23.878906 44.089844 C 23.1875 44.964844 22.460938 46.097656 22.140625 47.25 C 20.71875 47.644531 17.804688 47.65625 15.847656 44.304688 C 15.777344 44.175781 14.066406 41.136719 10.691406 40.902344 C 10.15625 40.90625 8.796875 40.992188 8.46875 42.03125 C 8.105469 43.183594 9.378906 44.058594 9.925781 44.429688 C 9.960938 44.453125 10.015625 44.484375 10.050781 44.503906 C 10.113281 44.535156 11.570313 45.300781 12.65625 48.035156 C 12.882813 48.75 14.871094 54.136719 22.007813 53.1875 C 22.011719 53.976563 22.007813 54.375 22 54.691406 L 22 55.25 C 22 55.574219 21.902344 56.0625 21.792969 56.378906 C 11.421875 52.605469 4 42.652344 4 31 C 4 16.113281 16.113281 4 31 4 Z M 30.757813 7.003906 C 26.859375 7.046875 23.003906 8.074219 19.609375 10.015625 C 19.128906 10.285156 18.960938 10.898438 19.234375 11.375 C 19.417969 11.699219 19.753906 11.882813 20.105469 11.882813 C 20.273438 11.882813 20.441406 11.839844 20.597656 11.75 C 24.734375 9.390625 29.617188 8.507813 34.339844 9.265625 C 34.882813 9.355469 35.394531 8.984375 35.484375 8.4375 C 35.570313 7.890625 35.199219 7.378906 34.65625 7.289063 C 33.363281 7.082031 32.058594 6.988281 30.757813 7.003906 Z M 38.65625 8.386719 C 38.269531 8.402344 37.90625 8.648438 37.765625 9.035156 C 37.570313 9.554688 37.832031 10.128906 38.351563 10.324219 C 39.0625 10.589844 39.765625 10.894531 40.453125 11.238281 C 40.597656 11.3125 40.75 11.347656 40.902344 11.347656 C 41.265625 11.347656 41.617188 11.148438 41.796875 10.796875 C 42.042969 10.308594 41.84375 9.703125 41.351563 9.453125 C 40.605469 9.078125 39.828125 8.738281 39.050781 8.449219 C 38.921875 8.402344 38.789063 8.382813 38.65625 8.386719 Z M 44.984375 15.546875 C 46.058594 18.707031 45.324219 20.996094 45.058594 21.644531 C 44.914063 22.003906 44.988281 22.414063 45.25 22.699219 C 46.980469 24.59375 47.859375 26.890625 47.859375 29.53125 C 47.859375 39.667969 41.851563 41.703125 35.96875 42.355469 C 35.574219 42.398438 35.242188 42.671875 35.125 43.050781 C 35.003906 43.429688 35.125 43.84375 35.425781 44.105469 C 36.214844 44.78125 38 47.714844 38 50 L 38 55.253906 C 38 55.273438 38.003906 56.144531 38.289063 56.992188 C 35.96875 57.644531 33.527344 58 31 58 C 28.46875 58 26.023438 57.640625 23.699219 56.988281 C 23.988281 56.136719 23.996094 55.265625 23.996094 55.25 L 24 54.714844 C 24.003906 54.261719 24.011719 53.648438 24 51.996094 C 23.996094 51.691406 23.859375 51.410156 23.625 51.21875 C 23.390625 51.03125 23.082031 50.960938 22.785156 51.023438 C 16.070313 52.488281 14.617188 47.640625 14.5625 47.4375 C 14.550781 47.402344 14.539063 47.371094 14.527344 47.335938 C 13.566406 44.898438 12.300781 43.65625 11.546875 43.09375 C 13.175781 43.667969 14.085938 45.257813 14.109375 45.292969 C 16.753906 49.820313 21.121094 49.9375 23.40625 48.914063 C 23.722656 48.773438 23.941406 48.480469 23.988281 48.140625 C 24.191406 46.710938 25.761719 44.820313 26.554688 44.125 C 26.851563 43.863281 26.96875 43.449219 26.847656 43.074219 C 26.730469 42.695313 26.402344 42.421875 26.011719 42.378906 C 20.144531 41.710938 14.144531 39.660156 14.144531 29.53125 C 14.144531 26.894531 15.023438 24.59375 16.761719 22.699219 C 17.023438 22.414063 17.097656 22.003906 16.949219 21.644531 C 16.683594 20.996094 15.945313 18.714844 17.015625 15.550781 C 17.867188 15.578125 19.941406 15.941406 23.433594 18.3125 C 23.675781 18.476563 23.984375 18.527344 24.265625 18.449219 C 26.355469 17.867188 28.6875 17.554688 31 17.542969 C 33.320313 17.554688 35.652344 17.867188 37.746094 18.449219 C 38.027344 18.527344 38.332031 18.476563 38.574219 18.3125 C 42.085938 15.929688 44.160156 15.574219 44.984375 15.546875 Z M 21.375 34.394531 C 20.984375 34.347656 20.589844 34.527344 20.386719 34.886719 L 19.386719 36.617188 C 19.109375 37.097656 19.273438 37.707031 19.75 37.984375 C 19.90625 38.074219 20.078125 38.117188 20.25 38.117188 C 20.59375 38.117188 20.929688 37.9375 21.113281 37.617188 L 22.113281 35.886719 C 22.390625 35.410156 22.230469 34.796875 21.75 34.519531 C 21.628906 34.453125 21.503906 34.410156 21.375 34.394531 Z M 40.625 34.394531 C 40.496094 34.410156 40.367188 34.453125 40.25 34.519531 C 39.769531 34.796875 39.609375 35.410156 39.886719 35.890625 L 40.886719 37.621094 C 41.070313 37.941406 41.40625 38.121094 41.75 38.121094 C 41.921875 38.121094 42.09375 38.074219 42.25 37.984375 C 42.730469 37.707031 42.890625 37.097656 42.613281 36.621094 L 41.613281 34.890625 C 41.40625 34.53125 41.011719 34.347656 40.625 34.394531 Z M 36.1875 36.34375 C 36.058594 36.324219 35.921875 36.332031 35.785156 36.371094 C 35.253906 36.511719 34.9375 37.058594 35.078125 37.59375 L 35.597656 39.527344 C 35.71875 39.972656 36.121094 40.265625 36.5625 40.265625 C 36.652344 40.265625 36.738281 40.253906 36.824219 40.234375 C 37.355469 40.089844 37.675781 39.542969 37.53125 39.007813 L 37.015625 37.078125 C 36.90625 36.675781 36.570313 36.398438 36.1875 36.34375 Z M 25.816406 36.34375 C 25.429688 36.398438 25.09375 36.675781 24.984375 37.078125 L 24.46875 39.011719 C 24.324219 39.542969 24.644531 40.089844 25.175781 40.234375 C 25.261719 40.257813 25.347656 40.265625 25.4375 40.265625 C 25.875 40.265625 26.28125 39.972656 26.402344 39.527344 L 26.921875 37.59375 C 27.0625 37.0625 26.746094 36.511719 26.214844 36.371094 C 26.078125 36.332031 25.945313 36.328125 25.816406 36.34375 Z M 31 37 C 30.445313 37 30 37.445313 30 38 L 30 40 C 30 40.554688 30.445313 41 31 41 C 31.554688 41 32 40.554688 32 40 L 32 38 C 32 37.445313 31.554688 37 31 37 Z"></path>
                </svg>
              </span>
            </a></li>
        </ul>
      </nav>
    </div>
  </header>

  <script>
    // JavaScript for mobile menu toggle
    document.getElementById('menu-toggle').addEventListener('change', function() {
      const menu = document.getElementById('menu');
      if (this.checked) {
        menu.classList.remove('hidden');
      } else {
        menu.classList.add('hidden');
      }
    });
  </script>

  <div class="w-full h-full  dark:bg-gray-200">

    <!-- Hero Section -->
    <div class="h-screen  w-full mx-auto py-20 xl:px-16 xs:px-8 flex flex-col md:flex-row gap-4 justify-center items-center pb-10 pt-4 fade-in">
      <!-- Image Section -->
      <div class="w-full flex justify-center ">
        <img class="rounded-full md:max-w-[70%] sm:max-w-[50%] xs:max-w-[60%] mx-auto" src="sansimg.jpeg" alt="My Image" />
      </div>

      <!-- Text Section -->
      <div class="w-full flex flex-col justify-center gap-4 text-white dark:text-gray-800 md:mt-0 sm:mt-8 xs:mt-4">
        <h1 class="text-4xl text-[#e5daf0] font-semibold font-serif" id="typewriter"></h1>
        <h5 class="text-xl font-bold"><span style="color:#a2d9e0">I code stuff sometimes.</span></h5>
        <p>Class of 2024 | Aspiring Data Enthusiast | Passionate About Software Development<br><br>Coding is just one part of my story, but there's much more to my journey than just writing lines of code. While I love diving into tech, there's a lot I'm eager to share with you about the projects, experiences, and challenges that have shaped my path so far.</p>
        <div class="sm:mt-4 xs:mt-2">
          <a href="#" onclick="sendEmail()" class="animate-bounce focus:animate-none hover:animate-none inline-flex text-md font-medium bg-[#426780] mt-3 px-4 py-2 rounded-lg tracking-wide text-white">
            <img src="email.png" style="height: 20px;"><span class="ml-2">Say Hello!</span>
          </a>
        </div>
      </div>
    </div>

    <!-- About Me Section -->
    <div class="w-full h-full flex flex-col justify-center items-center space-y-8 py-10 fade-in">
      <h1 class="text-2xl text-[#e5daf0] font-bold">/about-me</h1>
      <h6 class="text-lg font-light text-center max-w-4xl px-4">
        Hello everyone! Sanskriti here. I am a <span style="color:#a2d9e0"> recent graduate</span> from The British College, affiliated with Leeds Beckett University. I am deeply intrigued by data, analyzing business trends, and exploring software design. I envision myself diving into data science/software systems for further studies and am <span style="color:#a2d9e0">thrilled to embark on my career journey.</span> I eagerly look forward to discovering what the future holds for me!<br><br>Here are some technologies I have some knowledge on:<br><br>
        <div class="w-full max-w-4xl flex justify-center gap-x-8 text-lg font-light">
          <ul class="list-disc space-y-2">
            <li>R</li>
            <li>SQL</li>
            <li>PL-SQL</li>
          </ul>
          <ul class="list-disc space-y-2">
            <li>Python</li>
            <li>Laravel</li>
            <li>PHP</li>
          </ul>
        </div>
      </h6>
    </div>

    <!-- Experience Section -->
    <div class="w-full h-full flex flex-col justify-center items-center space-y-8 py-10 fade-in">
      <h1 class="text-2xl text-[#e5daf0] font-bold">/experience</h1>
      <div class="flex flex-wrap justify-center space-x-8 space-y-8 sm:space-y-0">
        <!-- Software Engineering Intern Card -->
        <div class="transform rounded-xl h-auto w-80 sm:w-96 bg-[#426780] shadow-xl transition duration-300 hover:translate-x-4 p-6">
          <div class="flex flex-col h-full justify-start space-y-4">
            <h1 class="text-lg font-light">Software Engineering Intern <span style="color:#a2d9e0">@ RBK Tunisia</span></h1>
            <ul class="list-disc list-inside space-y-2 text-[#f1faee]">
              <li>Created a social media application using MERN stack.</li>
              <li>Learned about API routing in web applications.</li>
              <li>Gained in-depth knowledge of database design pipelines for successful backend connections.</li>
              <li>Implemented and explored user interaction and data fetching on the frontend.</li>
            </ul>
          </div>
        </div>

        <!-- Digital Marketing Intern Card -->
        <div class="transform rounded-xl h-auto w-80 sm:w-96 bg-[#426780] shadow-xl transition duration-300 hover:translate-x-4 p-6">
          <div class="flex flex-col h-full justify-start space-y-4">
            <h1 class="text-lg font-light">Digital Marketing Intern <span style="color:#a2d9e0">@ Majestic Marketing</span></h1>
            <ul class="list-disc list-inside space-y-2 text-[#f1faee]">
              <li>Learned about SEO and content/social media marketing.</li>
              <li>Used tools such as Canva and a range of Adobe tools for graphic designing.</li>
              <li>Managed social media for the company and scheduled posts for it.</li>
              <li>Gained Google Digital Garage certification in digital marketing.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- My Projects Section -->
    <div class="w-full h-full flex flex-col justify-center items-center space-y-8 py-10 fade-in">
      <h1 class="text-2xl text-[#e5daf0] font-bold">/my-projects</h1>
      <div class="flex justify-center items-center w-full ">
        <div class="w-3/4 sm:w-full md:w-3/4 rounded-lg p-4">
          <div class="w-full">
            <!-- Table -->
            <div class="overflow-x-auto">
              <table class="table-auto w-full text-left border-collapse">
                <!-- Table Head -->
                <thead>
                  <tr class=" border-b">
                    <th class="px-4 py-3 cursor-pointer hover:text-[#78bceb]"
                      onclick="changeContent('Determining Strength of Concrete')">01</th>
                    <th class="px-4 py-3 cursor-pointer hover:text-[#78bceb] "
                      onclick="changeContent('Caravan Booking System')">02</th>
                    <th class="px-4 py-3 cursor-pointer hover:text-[#78bceb] "
                      onclick="changeContent('Accessories Web Application')">03</th>
                  </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                  <tr>
                    <td colspan="4" class="px-4 py-6">
                      <div id="dynamic-content" class="text-lg font-light"></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- My World Outside Code Section -->
    <div class="w-full h-full flex flex-col justify-center items-center space-y-8 py-10 fade-in">
      <h1 class="text-2xl text-[#e5daf0] font-bold">/my-world-outside-code</h1>
      <section class=" w-full">
        <div class="py-4 px-2 mx-auto sm:py-4 lg:px-6 w-full">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
            <!-- Image Cards -->
            <div class="col-span-2 sm:col-span-1 md:col-span-2  h-auto md:h-full flex flex-col">
              <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                <img src="explore3.jpeg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
              </a>
            </div>
            <div class="col-span-2 sm:col-span-1 md:col-span-2 ">
              <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                <img src="/food2.jpeg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
              </a>
              <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                  <img src="/food1.jpeg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                  <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                </a>
                <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                  <img src="/san1.jpeg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                  <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                </a>
              </div>
            </div>
            <div class="col-span-2 sm:col-span-1 md:col-span-1 h-auto md:h-full flex flex-col">
              <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                <img src="/explore1.jpeg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

  </div>


<footer class="rounded-lg shadow  m-4 fade-in">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline">Sanskriti Lamichhane™</a>. All Rights Reserved.</span>
    </div>
</footer>


</body>

<style>
  #typewriter {
    display: inline-block;
    font-family: monospace;
    white-space: nowrap;
    overflow: hidden;
    border-right: 2px solid black;
    /* Cursor */
    animation: blink 0.7s steps(1) infinite;
    /* Blinking effect */
  }

  @keyframes blink {
    50% {
      border-color: transparent;
    }
  }
</style>

<div id="typewriter"></div>

<script>
  const words = ["Hello, World!", "This is Sanskriti!"];
  let i = 0;
  let j = 0;
  let currentWord = "";
  let isDeleting = false;
  let isFinished = false;

  function type() {
    currentWord = words[i];
    if (!isFinished) {
      if (isDeleting) {
        document.getElementById("typewriter").textContent = currentWord.substring(0, j - 1);
        j--;
        if (j == 0) {
          isDeleting = false;
          i++;
          if (i == words.length) {
            isFinished = true; // Stop typing after the last word.
          }
        }
      } else {
        document.getElementById("typewriter").textContent = currentWord.substring(0, j + 1);
        j++;
        if (j == currentWord.length) {
          if (i == words.length - 1) {
            isFinished = true; // Keep the last word static.
          } else {
            isDeleting = true;
          }
        }
      }
    } else {
      document.getElementById("typewriter").textContent = currentWord; // Ensure static text stays.
    }

    setTimeout(type, isFinished ? 500 : 100); // Adjust the delay when finished.
  }

  type();
</script>
<script>
  const data = {
    
    "Determining Strength of Concrete": {
      content: ["Learned about the nature of dataset, gained knowledge about qualitative and quantitative variables, imputed missing values in the dataset, identification of outliers, visualisation of collienarity, principle component analysis and visualisation of dataset through various machine learning algorithm via histograms."],
      link: "https://github.com/sanskriti932/strengthofconcrete.git",
    },
    "Caravan Booking System": {
      content: ["Created An EERD first to identify the entities, its attributes, then formulating it into a table with primary key and foreign keys. Also, used PL-SQL to write trigger for table. Used Oracle Apex Cloud environment to create application for data visualisation using forms, charts, tables and calendars."],
      link: "https://github.com/sanskriti932/caravanbookingsystem.git",
    },
    "Accessories Web Application": {
      content: ["Explored different aspects of Laravel framework with Tailwind CSS to streamline the creation of accessories purchasing web application and made use of PayPal sandbox for online transaction. Used MySQL for database management, utilised MAMP for local host web server."],
      link: "https://github.com/tbc-bsc-l6/component-2-sanskriti932.git",
    },
  };

  // Function to update content dynamically
  function changeContent(header) {
  const contentDiv = document.getElementById("dynamic-content");
  const newData = data[header];

  // Update dynamic content
  contentDiv.innerHTML = `
    <div>
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-bold ">${header}</h2>
        <a href="${newData.link}" class="svg-button" style="background-color: #e5daf0; padding: 10px; border-radius: 5px; text-decoration: none;">
          
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
              <path d="M 24 4 C 12.972066 4 4 12.972074 4 24 C 4 35.027926 12.972066 44 24 44 C 35.027934 44 44 35.027926 44 24 C 44 12.972074 35.027934 4 24 4 z M 24 7 C 33.406615 7 41 14.593391 41 24 C 41 31.66536 35.956939 38.122519 29 40.251953 L 29 35.136719 C 29 33.226635 27.899316 31.588619 26.308594 30.773438 A 10 8 0 0 0 32.4375 18.720703 C 32.881044 17.355414 33.376523 14.960672 32.199219 13.076172 C 29.929345 13.076172 28.464667 14.632086 27.765625 15.599609 A 10 8 0 0 0 24 15 A 10 8 0 0 0 20.230469 15.59375 C 19.529731 14.625773 18.066226 13.076172 15.800781 13.076172 C 14.449711 15.238817 15.28492 17.564557 15.732422 18.513672 A 10 8 0 0 0 21.681641 30.779297 C 20.3755 31.452483 19.397283 32.674042 19.097656 34.15625 L 17.783203 34.15625 C 16.486203 34.15625 15.98225 33.629234 15.28125 32.740234 C 14.58925 31.851234 13.845172 31.253859 12.951172 31.005859 C 12.469172 30.954859 12.144453 31.321484 12.564453 31.646484 C 13.983453 32.612484 14.081391 34.193516 14.650391 35.228516 C 15.168391 36.160516 16.229687 37 17.429688 37 L 19 37 L 19 40.251953 C 12.043061 38.122519 7 31.66536 7 24 C 7 14.593391 14.593385 7 24 7 z"></path>
            </svg>
        
        </a>
      </div>
      <ul class="list-disc pl-5 space-y-2">
        ${newData.content.map((item) => `<li>${item}</li>`).join("")}
      </ul>
    </div>
  `;
}


  // Display default content (first header)
  window.onload = () => {
    changeContent("Determining Strength of Concrete");
  };
</script>
<script>
  // Create an intersection observer to watch for when elements come into view
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible'); // Add 'visible' class to fade in
        observer.unobserve(entry.target); // Stop observing once the element is in view
      }
    });
  }, {
    threshold: 0.2 // Trigger when 20% of the element is in view
  });

  // Select all elements you want to apply the fade-in effect to
  const elements = document.querySelectorAll('.fade-in');
  elements.forEach(element => {
    observer.observe(element); // Start observing each element
  });
</script>
<script>
  function sendEmail() {
    const recipientEmail = "sanskritilamichhane2003@gmail.com"; // Replace with the recipient's email
    const yourEmail = ""; // Your email

    // Construct the mailto link
    const mailtoLink = `mailto:${recipientEmail}?cc=${yourEmail}&subject=Hello&body=Hi,`;

    // Redirect to the Gmail compose window
    window.location.href = mailtoLink;
  }
</script>
</html>
