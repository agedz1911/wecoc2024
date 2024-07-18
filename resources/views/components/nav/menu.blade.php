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
                    <a href="/scientific-program#at-glance">Program At A Glance</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/scientific-program#schedule-sympo">Symposium Schedule</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/scientific-program#schedule-ws">Workshop Schedule</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/scientific-program#scientific-corner">Scientific Corner</a>
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
                <a href="/cardiology-in-jeopardy" class="nav-link-item hover:text-primary-500">Cardiology in Jeopardy
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>
              <li class="nav-item {{ request()->is('homecoming*') ? 'text-primary-500' : '' }}">
                <a href="homecoming" class="nav-link-item hover:text-primary-500">Homecoming
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>
              
            </ul>
          </nav>
        </div>
        <!-- Header Navigation -->

        <!-- Header User Event -->
        <div class="flex items-center gap-1">
          <a href="https://www.instagram.com/ykvi.wecoc/" class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-instagram text-rose-500 "></i></a>
          <a href="mailto:wecoc.eventkardiologi@gmail.com" class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-solid fa-envelope text-gray-600 "></i></a>
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
