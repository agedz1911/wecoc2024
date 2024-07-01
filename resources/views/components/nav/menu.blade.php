<div class="sticky top-0 z-50">
  <header class="site-header  bg-slate-50 py-2 px-3" id="sticky-menu">

    <div class="container-default">
      <div class="flex items-center justify-between gap-x-8">
        <!-- Header Logo -->
        <div class="avatar">
          <a href="/" class="h-14">
            <img src="images/logo-wecoc.PNG" alt="WECOC" />
          </a>
        </div>
        <!-- Header Logo -->

        <!-- Header Navigation -->
        <div class="menu-block-wrapper">
          <div class="menu-overlay"></div>
          <nav class="menu-block" id="append-menu-header">
            <div class="mobile-menu-head">
              <div class="go-back">
                <i class="fa-solid fa-angle-left"></i>
              </div>
              <div class="current-menu-title"></div>
              <div class="mobile-menu-close">&times;</div>
            </div>
            <ul class="site-menu-main">
              <li class="nav-item {{ request()->is('/') ? 'text-primary-500' : '' }}">
                <a href="/"  class="nav-link-item hover:text-primary-500">Home</a>
              </li>
              <li class="nav-item nav-item-has-children {{ request()->is('congress-information*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger  hover:text-primary-500">Congress Information <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-1">
                  <li class="sub-menu--item">
                    <a href="/congress-information#welcome-message">Welcome Message</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/congress-information#organizing-committee">Organizing Committee</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/congress-information#faculties">Faculties</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item nav-item-has-children {{ request()->is('scientific-program*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)"  class="nav-link-item drop-trigger hover:text-primary-500">Scientific Program
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-2">
                  <li class="sub-menu--item">
                    <a href="/scientific-program#at-glance">Program at Glance</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/scientific-program#schedule">Scientific Schedule</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{ request()->is('registration*') ? 'text-primary-500' : '' }}">
                <a href="/registration"  class="nav-link-item hover:text-primary-500">Registration
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>
              <li class="nav-item nav-item-has-children {{ request()->is('submission*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger hover:text-primary-500">Abstract Submission
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-11">
                  <li class="sub-menu--item">
                    <a href="/submission#guideline-abstract">Guideline for Abstract</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/submission#submission">Submission</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{ request()->is('cardiology-in-jeopardy*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item hover:text-primary-500">Cardiology in Jeopardy
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>
              <li class="nav-item {{ request()->is('homecoming*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item hover:text-primary-500">Homecoming
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>
              
            </ul>
          </nav>
        </div>
        <!-- Header Navigation -->

        <!-- Header User Event -->
        <div class="flex items-center gap-1">
          <a href="https://www.instagram.com/wecoc_ykvi/?igsh=MXYzeHQxYThlbDFqcQ%3D%3D" class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-instagram text-rose-500 "></i></a>
          <a class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-facebook text-sky-500 "></i></a>
          <a class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-square-x-twitter "></i></a>
          <!-- <a class="btn btn-primary md:hidden sm:inline-block py-4">Login</a> -->
          <!-- Responsive Offcanvas Menu Button -->
          <div class="block lg:hidden">
            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
        <!-- Header User Event -->
      </div>
    </div>
  </header>
</div>

<!-- <div class="sticky top-0 z-50">
    <div class="navbar absolute px-5 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">daisyUI</a>
        </div>
        <div class="navbar-center text-lime-200 hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#tes"><i class="fa-solid fa-house"></i>Home</a></li>
                <li>
                    <details>
                        <summary><i class="fa-solid fa-circle-info"></i> Congress Information</summary>
                        <ul class="p-2 w-[200px] bg-slate-600">
                            <li><a>Welcome Message</a></li>
                            <li><a>Organizing Committee</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>

                        <summary><i class="fa-solid fa-book-open"></i> Scientific Program</summary>
                        <ul class="p-2 w-[200px] bg-slate-600">
                            <li><a>Program at Glance</a></li>
                            <li><a>Scientific Schedule</a></li>
                        </ul>
                    </details>
                </li>
                <li><a><i class="fa-solid fa-basket-shopping"></i> Registration</a></li>
                <li>
                    <details>
                        <summary><i class="fa-solid fa-cloud-arrow-up"></i> Submission</summary>
                        <ul class="p-2 w-[200px] bg-slate-600">
                            <li><a>Guideline for Abstract</a></li>
                            <li><a>Abstract Submission</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn">Button</a>
        </div>
    </div>
</div> 
<li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger">Submission
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-3">
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Guideline for Abstract <i class="fa-solid fa-angle-right"></i></a>
                    <ul class="sub-menu shape-none" id="submenu-4">
                      <li class="sub-menu--item">
                        <a href="blog.html">Abstract Submission</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="blog-details.html">blog details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Team
                      <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-5">
                      <li class="sub-menu--item">
                        <a href="teams.html">Teams</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">FAQ
                      <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-6">
                      <li class="sub-menu--item">
                        <a href="faq.html">FAQ-1</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="faq-2.html">FAQ-2</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="faq-3.html">FAQ-3</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="faq-4.html">FAQ-4</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio
                      <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-7">
                      <li class="sub-menu--item">
                        <a href="portfolio.html">Portfolio Classic</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="portfolio-2.html">Portfolio Masonry</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="portfolio-3.html">Portfolio Modern</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="portfolio-4.html">Portfolio Minimal</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="portfolio-details.html">Portfolio Details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Pricing
                      <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-8">
                      <li class="sub-menu--item">
                        <a href="pricing.html">Pricing-1</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="pricing-2.html">Pricing-2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Careers
                      <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-9">
                      <li class="sub-menu--item">
                        <a href="careers.html">Career</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="career-details.html">Career Details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Utilities
                      <i class="fa-solid fa-angle-right"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-10">
                      <li class="sub-menu--item">
                        <a href="login.html">Login</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="signup.html">Signup</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="reset-password.html">Reset Password</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="coming-soon.html">Coming Soon</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="error-404.html">Error 404</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>-->