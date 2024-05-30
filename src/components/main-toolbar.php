<!-- <h1>Main toolbar</h1> -->

<div>
  <div
    class="mg-main-container flex flex-wrap items-center justify-between mx-auto md:px-4"
  >
    <div class="grid grid-cols-12 w-full">
      <div
        class="col-span-12 sm:col-span-2 bg-[#1B3512] text-white flex items-center justify-center"
      >
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Flowbite
                    </span> -->

          <img
            src="./assets/images/brand-logo.svg"
            alt="Company brand logo"
            class="max-w-40"
          />
        </a>
      </div>
      <div class="col-span-12 sm:col-span-10">
        <div class="top-bar | bg-dark-50 text-dark-200 py-2 md:px-8">
          <div class="flex items-center justify-between gap-2 flex-wrap">
            <ul class="sm:flex items-center gap-4 text-sm">
              <li class="flex items-center gap-2">
                <i data-feather="phone" class="feather-nav"></i
                ><span>+234 (9012) 1223 563</span>
              </li>
              <li class="flex items-center gap-2">
                <i data-feather="mail" class="feather-nav"></i
                ><span>Info.mainlandgroup@gmail.com</span>
              </li>
            </ul>
            <ul class="flex items-center gap-4 text-xs">
              <li>
                <label
                  class="mode-toggle-wrapper | inline-flex items-center cursor-pointer"
                >
                  <span class="me-3 text-sm text-gray-900 dark:text-gray-300"
                    >Mode:
                  </span>
                  <input
                    type="checkbox"
                    value=""
                    class="ui-mode-toggler | sr-only peer"
                  />
                  <!-- bg-primary-50 -->
                  <!-- <div class="cursor relative w-14 h-6 bg-primary-50 peer-focus:outline-none dark:peer-focus:ring-blue-800 rounded-full peer after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-white after:border after:rounded-full after:w-5 after:h-5 after:transition-all peer-checked:after:border-black peer-checked:after:bg-transparent before:absolute before:top-[2px] before:end-[2px] before:bg-transparent before:border-black before:border before:rounded-full before:w-5 before:h-5 before:transition-all peer-checked:before:border-white peer-checked:before:bg-white"></div> -->
                  <div
                    class="cursor relative w-14 h-6 bg-primary-50 peer-focus:outline-none rounded-full peer after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-white after:border after:rounded-full after:w-5 after:h-5 after:transition-all peer-checked:after:border-black peer-checked:after:bg-transparent before:absolute before:top-[2px] before:end-[2px] before:bg-transparent before:border-black before:border before:rounded-full before:w-5 before:h-5 before:transition-all peer-checked:before:border-white peer-checked:before:bg-white"
                  ></div>
                </label>
              </li>
            </ul>
          </div>
        </div>
        <div class="bg-white-inverse | md:flex items-center py-4 md:px-8">
          <div
            class="w-full md:w-auto order-1 md:order-2 flex justify-between md:justify-end md:before:content-[''] md:before:bg-primary-500 md:before:w-[1px] md:before:mr-8"
          >
            <button
              data-collapse-toggle="navbar-search"
              type="button"
              class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200"
              aria-controls="navbar-sticky"
              aria-expanded="false"
            >
              <span class="sr-only">Open main menu</span>
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 17 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M1 1h15M1 7h15M1 13h15"
                />
              </svg>
            </button>
            <button>
              <i data-feather="search" class=""></i>
            </button>
          </div>
          <ul
            class="hidden order-2 md:order-1 w-full md:mr-8 md:flex flex-col p-2 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:items-center md:justify-between md:mt-0 md:border-0"
            id="navbar-search"
          >
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-primary-500 bg-accent-500 rounded md:py-0 md:dark:text-blue-500"
                aria-current="page"
              >
                Home
              </a>
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-primary-500 rounded md:p-0"
              >
                About
              </a>
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-primary-500 rounded md:p-0"
              >
                Sub-Company
              </a>
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-primary-500 rounded md:p-0"
              >
                Portfolio
              </a>
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-primary-500 rounded md:p-0"
              >
                Blog
              </a>
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-primary-500 rounded md:p-0"
              >
                Career
              </a>
            </li>
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-primary-500 rounded md:p-0"
              >
                Contact Us
              </a>
            </li>
          </ul>
        </div>

        <!-- <nav class="bg-white w-full z-20 top-0 start-0 border-b border-gray-200">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                        <a href="https://flowbite.com/" class="md:hidden flex items-center space-x-3 rtl:space-x-reverse">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                            <span class="self-center text-2xl font-semibold whitespace-nowrap">Flowbite
                            </span>
                        </a>
                        <span class="hidden md:flex"></span>
                        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                            <div class="flex max-w-sm mx-auto before:content-[''] before:bg-black before:w-[1px] before:mr-8">
                                <button>
                                    <i data-feather="search" class=""></i>
                                </button>
                            </div>
                            
                            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                                </svg>
                            </button>
                        </div>
                        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:justify-between md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                                <li>
                                    <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-3 text-gray-900 rounded md:p-0">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-3 text-gray-900 rounded md:p-0">
                                        Sub-Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-3 text-gray-900 rounded md:p-0">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-3 text-gray-900 rounded md:p-0">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-3 text-gray-900 rounded md:p-0">
                                        Career
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-3 text-gray-900 rounded md:p-0">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav> -->
      </div>
    </div>
  </div>
</div>
