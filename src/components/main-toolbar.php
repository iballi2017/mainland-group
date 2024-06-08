<!-- <h1>Main toolbar</h1> -->

<!-- <div class="lg:bg-theme-clr-white border-b border-on-theme-light relative z-10 
lg:before:content[''] lg:before:bg-secondary lg:before:h-full lg:before:block lg:before:absolute lg:before:top-0 lg:before:-z-10 
before:left-0 lg:before:right-1/2 lg:before:w-1/2
lg:after:content[''] lg:after:bg-theme-clr-white lg:after:h-full lg:after:block lg:after:absolute lg:after:top-0 lg:after:bottom-0 lg:after:-z-10  
after:right-0 lg:after:left-1/2 lg:after:w-1/2
"> -->
<!-- </div> -->


<header class="main-toolbar">
  <div class="bg-theme-clr-white relative z-10 
before:content[''] before:bg-secondary before:h-full before:block before:absolute before:top-0 before:-z-10 
before:left-0 before:right-1/2 before:w-1/2
after:content[''] after:bg-theme-clr-white after:h-full after:block after:absolute after:top-0 after:bottom-0 after:-z-10  
after:right-0 after:left-1/2 after:w-1/2
">
    <div class="mg-main-wrapper">
      <div class="grid grid-cols-12 w-full">
        <div class="bg-theme-clr-secondary col-span-12 lg:col-span-2 text-white flex items-center justify-center lg:justify-start py-4">
          <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="./assets/images/brand-logo.svg" alt="Mainland Group brand logo" class="max-w-40">
          </a>
        </div>
        <div class="col-span-12 lg:col-span-10">
          <div class="top-bar | bg-theme-clr-light text-on-theme-clr-light py-2 px-2 sm:px-4 md:px-8">
            <div class="flex items-center justify-between gap-2 flex-wrap">
              <ul class="sm:flex items-center gap-4 text-sm">
                <li class="flex items-center gap-2">
                  <i data-feather="phone" class="feather-nav"></i><span>+234 (9012) 1223 563</span>
                </li>
                <li class="flex items-center gap-2">
                  <i data-feather="mail" class="feather-nav"></i><span>Info.mainlandgroup@gmail.com</span>
                </li>
              </ul>

              <div class="flex items-center justify-between w-full md:w-auto gap-4">
                <ul class="flex items-center gap-4 text-xs">
                  <li>
                    <label class="theme-font-toggle-wrapper | inline-flex items-center cursor-pointer">
                      <span class="me-3 text-sm">Font size:
                      </span>
                      <input type="checkbox" value="" class="ui-font-sizes-toggler | sr-only peer">
                      <span class="cursor relative w-14 h-6 bg-theme-clr-secondary peer-focus:outline-none rounded-full peer after:absolute after:top-[2px] after:start-[2px] after:bg-accent-50 after:text-white after:border-accent-50 after:border after:rounded-full after:w-5 after:h-5 after:transition-all peer-checked:after:border-black peer-checked:after:bg-transparent before:absolute before:top-[2px] before:end-[2px] before:bg-transparent before:text-white before:border-black before:border before:rounded-full before:w-5 before:h-5 before:transition-all peer-checked:before:border-accent-50 peer-checked:before:bg-accent-50"></span>
                    </label>
                  </li>
                </ul>

                <!--  -->

                <ul class="flex items-center gap-4 text-xs">
                  <li>
                    <label class="theme-mode-toggle-wrapper | inline-flex items-center cursor-pointer">
                      <span class="me-3 text-sm">Mode:
                      </span>
                      <input type="checkbox" value="" class="ui-mode-toggler | sr-only peer">
                      <span class="cursor relative w-14 h-6 bg-accent-50 peer-focus:outline-none rounded-full peer after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-white after:border after:rounded-full after:w-5 after:h-5 after:transition-all peer-checked:after:border-black peer-checked:after:bg-transparent before:absolute before:top-[2px] before:end-[2px] before:bg-transparent before:border-black before:border before:rounded-full before:w-5 before:h-5 before:transition-all peer-checked:before:border-white peer-checked:before:bg-white"></span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- <div class="bg-theme-clr-white | md:flex items-center py-4 md:px-8"> -->
          <div class="bg-theme-clr-white | md:flex items-center lg:px-8">
            <div class="w-full md:w-auto order-1 md:order-2 flex justify-between md:justify-end md:before:content-[''] md:before:bg-secondary md:before:w-[1px] lg:before:mr-8">
              <button data-collapse-toggle="navbar" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none  focus:ring-primary-alt focus:border-2 focus:border-primary-alt" aria-controls="navbar" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <i data-feather="menu" class="text-on-theme-clr-white"></i>
              </button>
              <button class="search-icon | focus:border-2 focus:border-primary-alt p-2 w-10 h-10 inline-flex items-center justify-center" aria-label="search">
                <i data-feather="search" class="text-on-theme-clr-white"></i>
              </button>
            </div>

            <ul class="hidden order-2 md:order-1 w-full md:mr-2 lg:mr-8 md:flex flex-col p-2 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-2 lg:space-x-8 rtl:space-x-reverse md:flex-row md:items-center md:justify-between md:mt-0 md:border-0" id="navbar">
              <li>
                <a href="./" class="nav-link | block py-2 px-3 text-on-theme-clr-white rounded lg:rounded-none md:py-0" aria-current="page">
                  Home
                </a>
              </li>
              <li>
                <a href="about.php" class="nav-link active | block py-2 px-3 text-on-theme-clr-white rounded lg:rounded-none md:p-0">
                  About
                </a>
              </li>

              <li>
                <button id="sub-company-dropdown-btn" data-dropdown-toggle="sub-company-dropdown" class="inline-flex items-center py-2 px-3 text-on-theme-clr-white" type="button">
                  Sub-Company
                  <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                  </svg>
                </button>
                <!-- Sub-Company Dropdown menu -->
                <div id="sub-company-dropdown" class="hidden z-40 bg-white divide-y divide-gray-100 rounded-lg focus:border focus:border-primary shadow w-full md:w-44 lg:w-56 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="sub-company-dropdown-btn">
                    <li>
                      <a href="sub-company-lagoscart.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Lagoscart
                      </a>
                    </li>
                    <li>
                      <a href="sub-company-vanlagos.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Vanlagos
                      </a>
                    </li>
                    <li>
                      <a href="sub-company-mainland-solar.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Mainland Solar
                      </a>
                    </li>
                    <li>
                      <a href="sub-company-studios-mainland.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Studios Mainland
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li>
                <button id="portfolio-dropdown-btn" data-dropdown-toggle="portfolio-dropdown" class="inline-flex items-center py-2 px-3 text-on-theme-clr-white" type="button">
                  Portfolio
                  <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                  </svg>
                </button>
                <!-- Portfolio Dropdown menu -->
                <div id="portfolio-dropdown" class="hidden z-40 bg-white divide-y divide-gray-100 rounded-lg bg-primary focus:border focus:border-primary shadow w-full md:w-44 lg:w-56 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="portfolio-dropdown-btn">
                    <li>
                      <a href="portfolio-gallery.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Gallery
                      </a>
                    </li>
                    <li>
                      <a href="portfolio-testimonials.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        Testimonials
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <!-- <li>
                <a href="#" class="nav-link | block py-2 px-3 text-on-theme-clr-white rounded lg:rounded-none md:p-0">
                  Portfolio
                </a>
              </li> -->
              <li>
                <a href="blog.php" class="nav-link | block py-2 px-3 text-on-theme-clr-white rounded lg:rounded-none md:p-0">
                  Blog
                </a>
              </li>
              <li>
                <a href="career.php" class="nav-link | block py-2 px-3 text-on-theme-clr-white rounded lg:rounded-none md:p-0">
                  Career
                </a>
              </li>
              <li>
                <a href="contact-us.php" class="nav-link | block py-2 px-3 text-on-theme-clr-white rounded lg:rounded-none md:p-0">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- page-search -->
<div class="page-search overlay-ctrl | fixed left-4 right-4 sm:left-32 sm:right-32  lg:left-80 lg:right-80 top-40 md:top-64 z-50">
  <form>
    <div class="relative rounded-lg overflow-hidden">
      <input type="text" class="relative z-0 bg-theme-clr-white border border-gray-300 text-on-theme-clr-white text-sm rounded-lg focus:ring-primary-alt focus:border-2 focus:border-primary-alt block w-full pe-10 p-2.5" placeholder="Search">
      <button class="absolute z-10 inset-y-0 end-0 flex items-center ps-3.5 pe-3.5 bg-primary focus:ring-primary-alt focus:border-2 focus:border-primary-alt">
        <i data-feather="search" class="text-on-theme-clr-white"></i>
      </button>
    </div>
  </form>
</div>