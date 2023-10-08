@extends('layouts.classic-main')
@section('content')

<div class="body">
    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-color-primary header-body-bottom-border">
            <div class="header-top header-top-default border-bottom-0">
                <div class="container">
                    <div class="header-row py-2">
                        <div class="header-column justify-content-start">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills text-uppercase text-2">
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link ps-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
                                        </li>
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> mail@domain.com</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> 123-456-7890</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="Porto" width="100" height="48" src="img/logo-default-slim.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle active" href="index.html">
                                                    Home
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="index.html">
                                                            Landing Page
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="index.html#demos">
                                                            Demos <span class="tip tip-dark">hot</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Classic</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-classic.html">Classic - Original</a></li>
                                                            <li><a class="dropdown-item" href="index-classic-color.html">Classic - Color</a></li>
                                                            <li><a class="dropdown-item" href="index-classic-light.html">Classic - Light</a></li>
                                                            <li><a class="dropdown-item" href="index-classic-video.html">Classic - Video</a></li>
                                                            <li><a class="dropdown-item" href="index-classic-video-light.html">Classic - Video - Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Corporate</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-corporate.html">Corporate - Version 1</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-2.html">Corporate - Version 2</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-3.html">Corporate - Version 3</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-4.html">Corporate - Version 4</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-5.html">Corporate - Version 5</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-6.html">Corporate - Version 6</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-7.html">Corporate - Version 7</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-8.html">Corporate - Version 8</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-9.html">Corporate - Version 9</a></li>
                                                            <li><a class="dropdown-item" href="index-corporate-10.html"->Corporate - Version 10</a></li>
                                                            <li><a class="dropdown-item" href="index.html#demos"->More...</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Portfolio</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-portfolio.html">Portfolio - Version 1</a></li>
                                                            <li><a class="dropdown-item" href="index-portfolio-2.html">Portfolio - Version 2</a></li>
                                                            <li><a class="dropdown-item" href="index-portfolio-3.html">Portfolio - Version 3</a></li>
                                                            <li><a class="dropdown-item" href="index-portfolio-4.html">Portfolio - Version 4</a></li>
                                                            <li><a class="dropdown-item" href="index-portfolio-5.html">Portfolio - Version 5</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Blog</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-blog.html">Blog - Version 1</a></li>
                                                            <li><a class="dropdown-item" href="index-blog-2.html">Blog - Version 2</a></li>
                                                            <li><a class="dropdown-item" href="index-blog-3.html">Blog - Version 3</a></li>
                                                            <li><a class="dropdown-item" href="index-blog-4.html">Blog - Version 4</a></li>
                                                            <li><a class="dropdown-item" href="index-blog-5.html">Blog - Version 5</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">One Page</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-one-page.html">One Page Original</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-mega">
                                                <a class="dropdown-item dropdown-toggle" href="elements.html">
                                                    Elements
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="dropdown-mega-content">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <span class="dropdown-mega-sub-title">Elements 1</span>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a class="dropdown-item" href="elements-accordions.html">Accordions</a></li>
                                                                        <li><a class="dropdown-item" href="elements-alerts.html">Alerts</a></li>
                                                                        <li><a class="dropdown-item" href="elements-animations.html">Animations  <span class="tip tip-dark p-relative bottom-2">hot</span></a></li>
                                                                        <li><a class="dropdown-item" href="elements-arrows.html">Arrows</a></li>
                                                                        <li><a class="dropdown-item" href="elements-badges.html">Badges</a></li>
                                                                        <li><a class="dropdown-item" href="elements-before-after.html">Before / After</a></li>
                                                                        <li><a class="dropdown-item" href="elements-blockquotes.html">Blockquotes</a></li>
                                                                        <li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>
                                                                        <li><a class="dropdown-item" href="elements-call-to-action.html">Call to Action</a></li>
                                                                        <li><a class="dropdown-item" href="elements-cards.html">Cards</a></li>
                                                                        <li><a class="dropdown-item" href="elements-carousels.html">Carousels</a></li>
                                                                        <li><a class="dropdown-item" href="elements-cascading-images.html">Cascading Images</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <span class="dropdown-mega-sub-title">Elements 2</span>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a class="dropdown-item" href="elements-content-rotate.html">Content Rotate</a></li>
                                                                        <li><a class="dropdown-item" href="elements-countdowns.html">Countdowns</a></li>
                                                                        <li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>
                                                                        <li><a class="dropdown-item" href="elements-dividers.html">Dividers</a></li>
                                                                        <li><a class="dropdown-item" href="elements-forms.html">Forms</a></li>
                                                                        <li><a class="dropdown-item" href="elements-headings.html">Headings</a></li>
                                                                        <li><a class="dropdown-item" href="elements-icons.html">Icons</a></li>
                                                                        <li><a class="dropdown-item" href="elements-icon-boxes.html">Icon Boxes</a></li>
                                                                        <li><a class="dropdown-item" href="elements-image-frames.html">Image Frames  <span class="tip tip-dark p-relative bottom-2">hot</span></a></li>
                                                                        <li><a class="dropdown-item" href="elements-image-gallery.html">Image Gallery</a></li>
                                                                        <li><a class="dropdown-item" href="elements-image-hotspots.html">Image Hotspots</a></li>
                                                                        <li><a class="dropdown-item" href="elements-lightboxes.html">Lightboxes</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <span class="dropdown-mega-sub-title">Elements 3</span>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>
                                                                        <li><a class="dropdown-item" href="elements-maps.html">Maps</a></li>
                                                                        <li><a class="dropdown-item" href="elements-medias.html">Medias</a></li>
                                                                        <li><a class="dropdown-item" href="elements-modals.html">Modals</a></li>
                                                                        <li><a class="dropdown-item" href="elements-parallax.html">Parallax</a></li>
                                                                        <li><a class="dropdown-item" href="elements-particles.html">Particles</a></li>
                                                                        <li><a class="dropdown-item" href="elements-posts.html">Posts</a></li>
                                                                        <li><a class="dropdown-item" href="elements-pricing-tables.html">Pricing Tables</a></li>
                                                                        <li><a class="dropdown-item" href="elements-process.html">Process</a></li>
                                                                        <li><a class="dropdown-item" href="elements-progressbars.html">Progress Bars</a></li>
                                                                        <li><a class="dropdown-item" href="elements-random-images.html">Random Images</a></li>
                                                                        <li><a class="dropdown-item" href="elements-read-more.html">Read More</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <span class="dropdown-mega-sub-title">Elements 4</span>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a class="dropdown-item" href="elements-sections.html">Sections</a></li>
                                                                        <li><a class="dropdown-item" href="elements-shape-dividers.html">Shape Dividers</a></li>
                                                                        <li><a class="dropdown-item" href="elements-star-ratings.html">Star Ratings</a></li>
                                                                        <li><a class="dropdown-item" href="elements-sticky-elements.html">Sticky Elements</a></li>
                                                                        <li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>
                                                                        <li><a class="dropdown-item" href="elements-tabs.html">Tabs</a></li>
                                                                        <li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>
                                                                        <li><a class="dropdown-item" href="elements-toggles.html">Toggles</a></li>
                                                                        <li><a class="dropdown-item" href="elements-tooltips-popovers.html">Tooltips & Popovers</a></li>
                                                                        <li><a class="dropdown-item" href="elements-typography.html">Typography</a></li>
                                                                        <li><a class="dropdown-item" href="elements-word-rotator.html">Word Rotator</a></li>
                                                                        <li><a class="dropdown-item" href="elements-360-image-viewer.html">360º Image Viewer</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Features
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Headers</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-headers-overview.html">Overview</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Classic</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-classic.html">Classic</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-classic-language-dropdown.html">Classic + Language Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-classic-big-logo.html">Classic + Big Logo</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Flat</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-flat.html">Flat</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-flat-top-bar.html">Flat + Top Bar</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-flat-top-bar-top-borders.html">Flat + Top Bar + Top Border</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-flat-borders.html">Flat + Borders</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Center</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-center.html">Center</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-center-double-navs.html">Center + Double Navs</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-center-nav-buttons.html">Center + Nav + Buttons</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-center-below-slider.html">Center Below Slider</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Floating</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-floating-bar.html">Floating Bar</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-floating-icons.html">Floating Icons</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a class="dropdown-item" href="feature-headers-below-slider.html">Below Slider</a></li>
                                                            <li><a class="dropdown-item" href="feature-headers-full-video.html">Full Video</a></li>
                                                            <li><a class="dropdown-item" href="feature-headers-narrow.html">Narrow</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Sticky</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-sticky-shrink.html">Sticky Shrink</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-sticky-scroll-up.html">Sticky Scroll Up</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-sticky-static.html">Sticky Static</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-sticky-change-logo.html">Sticky Change Logo</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-sticky-reveal.html">Sticky Reveal</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Transparent</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-light.html">Transparent Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-dark.html">Transparent Dark</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-light-bottom-border.html">Transparent Light + Bottom Border</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-dark-bottom-border.html">Transparent Dark + Bottom Border</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-bottom-slider.html">Transparent Bottom Slider</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-transparent-top-bar-extra-buttons.html">Transparent Top Bar Extra Buttons</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-semi-transparent-light.html">Semi Transparent Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-semi-transparent-dark.html">Semi Transparent Dark</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-semi-transparent-bottom-slider.html">Semi Transparent Bottom Slider</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-semi-transparent-top-bar-borders.html">Semi Transparent + Top Bar + Borders</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Full Width</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width.html">Full Width</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-borders.html">Full Width + Borders</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-transparent-light.html">Full Width Transparent Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-transparent-dark.html">Full Width Transparent Dark</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-semi-transparent-light.html">Full Width Semi Transparent Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-semi-transparent-dark.html">Full Width Semi Transparent Dark</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-full-width-2-rows-extra-buttons.html">Full Width 2 Rows + Extra Buttons</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Navbar</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-navbar.html">Navbar</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-navbar-full.html">Navbar Full</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-navbar-pills.html">Navbar Pills</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-navbar-divisors.html">Navbar Divisors</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-navbar-icons-search.html">Nav Bar + Icons + Search</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Side Header</a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Side Header Left</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-dropdown.html">Dropdown</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-expand.html">Expand</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-columns.html">Columns</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-slide.html">Slide</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-semi-transparent.html">Semi Transparent</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-left-dark.html">Dark</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Side Header Right</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-dropdown.html">Dropdown</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-expand.html">Expand</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-columns.html">Columns</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-slide.html">Slide</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-semi-transparent.html">Semi Transparent</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-right-dark.html">Dark</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Side Header Offcanvas</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-offcanvas-push.html">Push</a></li>
                                                                            <li><a class="dropdown-item" href="feature-headers-side-header-offcanvas-slide.html">Slide</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="feature-headers-side-header-narrow-bar.html">Side Header Narrow Bar</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a class="dropdown-item" href="feature-headers-sign-in-sign-up.html">Sign In / Sign Up</a></li>
                                                            <li><a class="dropdown-item" href="feature-headers-logged.html">Logged</a></li>
                                                            <li><a class="dropdown-item" href="feature-headers-mini-cart.html">Mini Cart</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Search Styles</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-search-simple-input.html">Simple Input</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-search-simple-input-reveal.html">Simple Input Reveal</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-search-dropdown.html">Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-search-big-input-hidden.html">Big Input Hidden</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-search-full-screen.html">Full Screen</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Extra</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-headers-extra-big-icon.html">Big Icon</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-extra-big-icons-top.html">Big Icons Top</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-extra-button.html">Button</a></li>
                                                                    <li><a class="dropdown-item" href="feature-headers-extra-background-color.html">Background Color</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Navigations</a>
                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Pills</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills.html">Pills</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills-arrows.html">Pills + Arrows</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills-dark-text.html">Pills Dark Text</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills-color-dropdown.html">Pills Color Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills-square.html">Pills Square</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-pills-rounded.html">Pills Rounded</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Stripes</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-stripe.html">Stripe</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-stripe-dark-text.html">Stripe Dark Text</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-stripe-color-dropdown.html">Stripe Color Dropdown</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Hover Effects</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-top-line.html">Top Line</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-top-line-animated.html">Top Line Animated</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-top-line-color-dropdown.html">Top Line Color Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-bottom-line.html">Bottom Line</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-bottom-line-animated.html">Bottom Line Animated</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-slide.html">Slide</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-sub-title.html">Sub Title</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hover-line-under-text.html">Line Under Text</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Vertical</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-vertical-dropdown.html">Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-vertical-expand.html">Expand</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-vertical-columns.html">Columns</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-vertical-slide.html">Slide</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Hamburguer</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-hamburguer-sidebar.html">Sidebar</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-hamburguer-overlay.html">Overlay</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Dropdown Styles</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-dark.html">Dark</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-light.html">Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-colors.html">Colors</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-top-line.html">Top Line</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-square.html">Square</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow.html">Arrow Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow-center.html">Arrow Center Dropdown</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-light.html">Modern Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-dark.html">Modern Dark</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Dropdown Effects</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-no-effect.html">No Effect</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-opacity.html">Opacity</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-top.html">Move To Top</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-bottom.html">Move To Bottom</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-right.html">Move To Right</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-left.html">Move To Left</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Font Styles</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-font-small.html">Small</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-font-medium.html">Medium</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-font-large.html">Large</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-font-alternative.html">Alternative</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Icons</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-navigations-icons.html">Icons</a></li>
                                                                    <li><a class="dropdown-item" href="feature-navigations-icons-float-icons.html">Float Icons</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a class="dropdown-item" href="feature-navigations-sub-title.html">Sub Title</a></li>
                                                            <li><a class="dropdown-item" href="feature-navigations-divisors.html">Divisors</a></li>
                                                            <li><a class="dropdown-item" href="feature-navigations-logo-between.html">Logo Between</a></li>
                                                            <li><a class="dropdown-item" href="feature-navigations-one-page.html">One Page Nav</a></li>
                                                            <li><a class="dropdown-item" href="feature-navigations-click-to-open.html">Click To Open</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Page Headers</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-page-headers-overview.html">Overview</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Classic</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-page-headers-classic-small.html">Small</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-classic-medium.html">Medium</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-classic-large.html">Large</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Modern</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-page-headers-modern-small.html">Small</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-modern-medium.html">Medium</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-modern-large.html">Large</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Colors</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-primary.html">Primary</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-secondary.html">Secondary</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-tertiary.html">Tertiary</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-quaternary.html">Quaternary</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-light.html">Light</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-colors-dark.html">Dark</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Title Position</a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Left</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-left-small.html">Small</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-left-medium.html">Medium</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-left-large.html">Large</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Right</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-right-small.html">Small</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-right-medium.html">Medium</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-right-large.html">Large</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Center</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-center-small.html">Small</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-center-medium.html">Medium</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-title-position-center-large.html">Large</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Background</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-fixed.html">Fixed</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-parallax.html">Parallax</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-video.html">Video</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-transparent-header.html">Transparent Header</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-pattern.html">Pattern</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-overlay.html">Overlay</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-background-clean.html">Clean (No Background)</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Extra</a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Breadcrumb</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-page-headers-extra-breadcrumb-outside.html">Outside</a></li>
                                                                            <li><a class="dropdown-item" href="feature-page-headers-extra-breadcrumb-dark.html">Dark</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-extra-scroll-to-content.html">Scroll to Content</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-extra-full-width.html">Full Width</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-extra-product.html">Product</a></li>
                                                                    <li><a class="dropdown-item" href="feature-page-headers-extra-mouse-hover-split.html">Mouse Hover Split</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Footers</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-footers-overview.html">Overview</a></li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Classic</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-classic.html#footer">Classic</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-classic-advanced.html#footer">Advanced</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-classic-compact.html#footer">Compact</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-classic-simple.html#footer">Simple</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-classic-locations.html#footer">Locations</a></li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Copyright</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-copyright-light.html#footer">Light</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-copyright-dark.html#footer">Dark</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-copyright-social-icons.html#footer">Social Icons</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Colors</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-primary.html#footer">Primary</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-secondary.html#footer">Secondary</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-tertiary.html#footer">Tertiary</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-quaternary.html#footer			">Quaternary</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-light.html#footer">Light</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-classic-colors-light-simple.html#footer">Light Simple</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Modern</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-modern.html#footer">Modern</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-modern-font-style-alternative.html#footer">Font Style Alternative</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-modern-clean.html#footer">Clean</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-modern-useful-links.html#footer">Useful Links</a></li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Background</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-modern-background-image-simple.html#footer">Image Simple</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-modern-background-image-advanced.html#footer">Image Advanced</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-modern-background-video-simple.html#footer">Video Simple</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Call to Action</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-modern-call-to-action-button.html#footer">Button</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-modern-call-to-action-simple.html#footer">Simple</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Blog</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-blog-classic.html#footer">Blog Classic</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">eCommerce</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-ecommerce-classic.html#footer">eCommerce Classic</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Contact Form</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-contact-form-classic.html#footer">Classic</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-contact-form-above-the-map.html#footer">Above the Map</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-contact-form-center.html#footer">Center</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-contact-form-columns.html#footer">Columns</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Map</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="feature-footers-map-hidden.html#footer">Hidden Map</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-map-full-width.html#footer">Full Width</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Extra</a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Simple</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-extra-top-social-icons.html#footer">Top Social Icons</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-extra-big-icons.html#footer">Big Icons</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="feature-footers-extra-recent-work.html#footer">Recent Work</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-extra-reveal.html#footeranchor">Reveal</a></li>
                                                                    <li><a class="dropdown-item" href="feature-footers-extra-instagram.html#footer">Instagram</a></li>
                                                                    <li class="dropdown-submenu">
                                                                        <a class="dropdown-item" href="#">Full Width</a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a class="dropdown-item" href="feature-footers-extra-full-width-light.html#footer">Simple Light</a></li>
                                                                            <li><a class="dropdown-item" href="feature-footers-extra-full-width-dark.html#footer">Simple Dark</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Admin Extension <span class="tip tip-dark">hot</span><em class="not-included">(Not Included)</em></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-admin-forms-basic.html">Forms Basic</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-forms-advanced.html">Forms Advanced</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-tables-advanced.html">Tables Advanced</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-tables-responsive.html">Tables Responsive</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-tables-editable.html">Tables Editable</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
                                                            <li><a class="dropdown-item" href="feature-admin-charts.html">Charts</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Sliders</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="index-slider-revolution.html">Revolution Slider</a></li>
                                                            <li><a class="dropdown-item" href="index-slider-owl.html">Owl Slider</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Layout Options</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-layout-boxed.html">Boxed</a></li>
                                                            <li><a class="dropdown-item" href="feature-layout-dark.html">Dark</a></li>
                                                            <li><a class="dropdown-item" href="feature-layout-rtl.html">RTL</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Extra</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="feature-cursor-effect.html">Cursor Effect</a></li>
                                                            <li><a class="dropdown-item" href="feature-grid-system.html">Grid System</a></li>
                                                            <li><a class="dropdown-item" href="feature-reading-progress.html">Reading Progress</a></li>
                                                            <li><a class="dropdown-item" href="feature-lazy-load.html">Lazy Load</a></li>
                                                            <li><a class="dropdown-item" href="feature-page-loading.html">Page Loading</a></li>
                                                            <li><a class="dropdown-item" href="feature-page-transition.html">Page Transition</a></li>
                                                            <li><a class="dropdown-item" href="feature-side-panel.html">Side Panel</a></li>
                                                            <li><a class="dropdown-item" href="feature-horizontal-scroll.html">Horizontal Scroll</a></li>
                                                            <li><a class="dropdown-item" href="feature-locomotive-scroll.html">Locomotive Scroll</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="feature-gdpr.html">GDPR</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Pages
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Contact Us</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="contact-us-advanced.php">Contact Us - Advanced</a></li>
                                                            <li><a class="dropdown-item" href="contact-us.html">Contact Us - Basic</a></li>
                                                            <li><a class="dropdown-item" href="contact-us-recaptcha.html">Contact Us - Recaptcha</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">About Us</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="about-us-advanced.html">About Us - Advanced</a></li>
                                                            <li><a class="dropdown-item" href="about-us.html">About Us - Basic</a></li>
                                                            <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Layouts</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="page-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="page-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="page-right-sidebar.html">Right Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
                                                            <li><a class="dropdown-item" href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="page-secondary-navbar.html">Secondary Navbar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Extra</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="page-404.html">404 Error</a></li>
                                                            <li><a class="dropdown-item" href="page-500.html">500 Error</a></li>
                                                            <li><a class="dropdown-item" href="page-coming-soon.html">Coming Soon</a></li>
                                                            <li><a class="dropdown-item" href="page-maintenance-mode.html">Maintenance Mode</a></li>
                                                            <li><a class="dropdown-item" href="page-search-results.html">Search Results</a></li>
                                                            <li><a class="dropdown-item" href="sitemap.html">Sitemap</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Team</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="page-team-advanced.html">Team - Advanced</a></li>
                                                            <li><a class="dropdown-item" href="page-team.html">Team - Basic</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Services</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="page-services.html">Services - Version 1</a></li>
                                                            <li><a class="dropdown-item" href="page-services-2.html">Services - Version 2</a></li>
                                                            <li><a class="dropdown-item" href="page-services-3.html">Services - Version 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item" href="page-careers.html">Careers</a></li>
                                                    <li><a class="dropdown-item" href="page-faq.html">FAQ</a></li>
                                                    <li><a class="dropdown-item" href="page-login.html">Login / Register</a></li>
                                                    <li><a class="dropdown-item" href="page-user-profile.html">User Profile</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Portfolio
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Single Project</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-single-wide-slider.html">Wide Slider</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-small-slider.html">Small Slider</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-full-width-slider.html">Full Width Slider</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-gallery.html">Gallery</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-carousel.html">Carousel</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-medias.html">Medias</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-full-width-video.html">Full Width Video</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-masonry-images.html">Masonry Images</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-right-sidebar.html">Right Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-sticky-sidebar.html">Sticky Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-single-extended.html">Extended</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Grid Layouts</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-grid-1-column.html">1 Column</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-2-columns.html">2 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-3-columns.html">3 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-4-columns.html">4 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-5-columns.html">5 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-6-columns.html">6 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-no-margins.html">No Margins</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-full-width-no-margins.html">Full Width No Margins</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-grid-1-column-title-and-description.html">Title and Description</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Masonry Layouts</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">2 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">3 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">4 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">5 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">6 Columns</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-no-margins.html">No Margins</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-masonry-full-width.html">Full Width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Sidebar Layouts</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-sidebar-left-and-right.html">Left and Right Sidebars</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Ajax</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-ajax-page.html">Ajax on Page</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-ajax-modal.html">Ajax on Modal</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Extra</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="portfolio-extra-timeline.html">Timeline</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-lightbox.html">Lightbox</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-load-more.html">Load More</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-infinite-scroll.html">Infinite Scroll</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-lazy-load-masonry.html">Lazy Load Masonry</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-pagination.html">Pagination</a></li>
                                                            <li><a class="dropdown-item" href="portfolio-extra-combination-filters.html">Combination Filters</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Blog
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Large Image</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-large-image-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-large-image-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-large-image-sidebar-right.html">Right Sidebar </a></li>
                                                            <li><a class="dropdown-item" href="blog-large-image-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Medium Image</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-medium-image-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-medium-image-sidebar-right.html">Right Sidebar </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Grid</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-grid-4-columns.html">4 Columns</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-3-columns.html">3 Columns</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-no-margins.html">No Margins</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-no-margins-full-width.html">No Margins Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-sidebar-right.html">Right Sidebar </a></li>
                                                            <li><a class="dropdown-item" href="blog-grid-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Masonry</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-masonry-4-columns.html">4 Columns</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-3-columns.html">3 Columns</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-no-margins.html">No Margins</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-no-margins-full-width.html">No Margins Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-masonry-sidebar-right.html">Right Sidebar </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Timeline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-timeline.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-timeline-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-timeline-sidebar-right.html">Right Sidebar </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Single Post</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-post.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-slider-gallery.html">Slider Gallery</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-image-gallery.html">Image Gallery</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-embedded-video.html">Embedded Video</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-html5-video.html">HTML5 Video</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-blockquote.html">Blockquote</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-link.html">Link</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-embedded-audio.html">Embedded Audio</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-small-image.html">Small Image</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-sidebar-right.html">Right Sidebar </a></li>
                                                            <li><a class="dropdown-item" href="blog-post-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Post Comments</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="blog-post.html#comments">Default</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-comments-facebook.html#comments">Facebook Comments</a></li>
                                                            <li><a class="dropdown-item" href="blog-post-comments-disqus.html#comments">Disqus Comments</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Shop
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Single Product</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="shop-product-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="shop-product-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="shop-product-sidebar-right.html">Right Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="shop-product-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a></li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">3 Columns</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="shop-3-columns-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="shop-3-columns-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="shop-3-columns-sidebar-right.html">Right Sidebar </a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">2 Columns</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="shop-2-columns-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="shop-2-columns-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="shop-2-columns-sidebar-right.html">Right Sidebar </a></li>
                                                            <li><a class="dropdown-item" href="shop-2-columns-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">1 Column</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="shop-1-column-full-width.html">Full Width</a></li>
                                                            <li><a class="dropdown-item" href="shop-1-column-sidebar-left.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="shop-1-column-sidebar-right.html">Right Sidebar </a></li>
                                                            <li><a class="dropdown-item" href="shop-1-column-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
                                                    <li><a class="dropdown-item" href="shop-login.html">Login</a></li>
                                                    <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                                                    <li><a class="dropdown-item" href="shop-order-complete.html">Order Complete</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <ul class="header-social-icons social-icons d-none d-sm-block">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                    <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search"><i class="fas fa-search header-nav-top-icon"></i></a>
                                    <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                        <form role="search" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                <button class="btn" type="submit" aria-label="Search">
                                                    <i class="fas fa-search header-nav-top-icon"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-nav-feature header-nav-features-cart d-inline-flex ms-2">
                                    <a href="#" class="header-nav-features-toggle" aria-label="">
                                        <img src="img/icons/icon-cart.svg" width="14" alt="" class="header-nav-top-icon-img">
                                        <span class="cart-info d-none">
                                            <span class="cart-qty">1</span>
                                        </span>
                                    </a>
                                    <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                        <ol class="mini-products-list">
                                            <li class="item">
                                                <a href="#" title="Camera X1000" class="product-image"><img src="img/products/product-1.jpg" alt="Camera X1000"></a>
                                                <div class="product-details">
                                                    <p class="product-name">
                                                        <a href="#">Camera X1000 </a>
                                                    </p>
                                                    <p class="qty-price">
                                                         1X <span class="price">$890</span>
                                                    </p>
                                                    <a href="#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
                                                </div>
                                            </li>
                                        </ol>
                                        <div class="totals">
                                            <span class="label">Total:</span>
                                            <span class="price-total"><span class="price">$890</span></span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-dark" href="#">View Cart</a>
                                            <a class="btn btn-primary" href="#">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">
        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center dots-light show-dots-hover show-dots-xs nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['600px','600px','600px','550px','500px']" style="height: 600px;">
            <div class="owl-stage-outer">
                <div class="owl-stage">

                    <!-- Carousel Slide 1 -->
                    <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8" style="background-image: url(img/slides/slide-bg-7.jpg); background-size: cover; background-position: center; height: 600px;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    DO YOU NEED A <span class="position-relative">NEW <span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="img/slides/slide-white-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                        <img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h1 class="text-color-light font-weight-extra-bold text-13 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">WEB DESIGN?</h1>
                                <p class="text-4-5 text-color-light font-weight-light mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">Check out our options and features</p>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Slide 2 -->
                    <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8" style="background-image: url(img/slides/slide-bg-6.jpg); background-size: cover; background-position: center; height: 600px;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column align-items-center">
                                        <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            WE CREATE DESIGNS, WE ARE
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                                <img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 300, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">PORTO</h2>
                                        <p class="text-4 text-color-light font-weight-light text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">The best choice for your new website</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="owl-dots mb-5">
                <button role="button" class="owl-dot active"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
            </div>
        </div>

        <div class="home-intro" id="home-intro">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>
                            The fastest way to grow your business with the leader in <span class="highlighted-word text-color-primary font-weight-semibold text-5">Technology</span>
                            <span>Check out our options and features included.</span>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="get-started text-start text-lg-end">
                            <a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now!</a>
                            <div class="learn-more">or <a href="index.html">learn more.</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                        <div class="owl-carousel owl-theme pb-3" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
                                            <span class="thumb-info-type">Brand</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-1.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Watch</span>
                                            <span class="thumb-info-type">Media</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-1.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-2.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Identity</span>
                                            <span class="thumb-info-type">Logo</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-2.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-27.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Screens</span>
                                            <span class="thumb-info-type">Website</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-27.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-4.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Three Bottles</span>
                                            <span class="thumb-info-type">Logo</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-4.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-5.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Company T-Shirt</span>
                                            <span class="thumb-info-type">Brand</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-5.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-6.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Mobile Mockup</span>
                                            <span class="thumb-info-type">Website</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-6.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-7.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Label</span>
                                            <span class="thumb-info-type">Media</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-7.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-23.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Business Folders</span>
                                            <span class="thumb-info-type">Logo</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-23.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-24.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Tablet Screen</span>
                                            <span class="thumb-info-type">Website</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-24.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-25.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Black Watch</span>
                                            <span class="thumb-info-type">Media</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-25.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="img/projects/project-26.jpg" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Monitor Mockup</span>
                                            <span class="thumb-info-type">Website</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                            </a>
                                            <a href="img/projects/project-26.jpg" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                        </div>
                    </div>
<hr class="solid my-5">

                </div>
            </div>

            <div class="row pt-3">
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-support text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">Customer Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-layers text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">Sliders</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-menu text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">Buttons</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-4 pb-5">
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-doc text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">HTML5 / CSS3 / JS</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-user text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">Icons</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                    <div class="feature-box feature-box-style-2">
                        <div class="feature-box-icon">
                            <i class="icons icon-screen-desktop text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold mb-2">Lightbox</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section section-primary border-top-0 mb-0">
            <div class="container">
                <div class="row counters counters-sm counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="45000" data-append="+">0</strong>
                            <label class="opacity-5 text-4 mt-1">Happy Clients</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong data-to="3500" data-append="+">0</strong>
                            <label class="opacity-5 text-4 mt-1">Answered Tickets</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <strong data-to="16">0</strong>
                            <label class="opacity-5 text-4 mt-1">Pre-made Demos</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong data-to="3000" data-append="+">0</strong>
                            <label class="opacity-5 text-4 mt-1">Development Hours</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video section section-height-3 section-text-light section-video section-center overlay overlay-show overlay-op-7 mt-0" data-video-path="video/dark" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%', 'overlay': true}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote mb-0">
                            <div class="testimonial-author">
                                <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <blockquote>
                                <p class="mb-0">Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma - which is living with the results of other people’s thinking. </p>
                            </blockquote>
                            <div class="testimonial-author">
                                <p class="text-2"><strong class="text-color-light opacity-10">John Doe</strong>Okler</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pt-2">
            <div class="row my-5 pb-5">
                <div class="col-lg-6 pe-5">
                    <h2 class="font-weight-normal text-6 mb-2 pb-1"><strong class="font-weight-extra-bold">Who</strong> We Are</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enikklam id valorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Phasellus blandit massa enim. Nullam id varius elit. blandit massa enim d varius blandit massa enimariusi d varius elit.</p>
                    <a href="#" class="font-weight-semibold text-decoration-none learn-more text-2">VIEW MORE <i class="fas fa-chevron-right ms-2"></i></a>
                </div>
                <div class="col-lg-6">
                    <div class="progress-bars mt-5">
                        <div class="progress-label">
                            <span>HTML/CSS</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%">
                                <span class="progress-bar-tooltip">100%</span>
                            </div>
                        </div>
                        <div class="progress-label">
                            <span>Design</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="300">
                                <span class="progress-bar-tooltip">85%</span>
                            </div>
                        </div>
                        <div class="progress-label">
                            <span>WordPress</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%" data-appear-animation-delay="600">
                                <span class="progress-bar-tooltip">75%</span>
                            </div>
                        </div>
                        <div class="progress-label">
                            <span>Photoshop</span>
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="900">
                                <span class="progress-bar-tooltip">85%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="img/team/team-1.jpg" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">John Doe</span>
                                    <span class="thumb-info-type">CEO</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="img/team/team-2.jpg" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Jessica Doe</span>
                                    <span class="thumb-info-type">Marketing</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="img/team/team-3.jpg" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Rick Edward Doe</span>
                                    <span class="thumb-info-type">Developer</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="img/team/team-4.jpg" class="img-fluid" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Melinda Wolosky</span>
                                    <span class="thumb-info-type">Design</span>
                                </span>
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
            </div>
        </div>

        <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer call-to-action-in-footer-margin-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h2 class="font-weight-normal text-6 mb-0">Porto is <strong class="font-weight-extra-bold">everything</strong> you need to create an <strong class="font-weight-extra-bold">awesome</strong> website!</h2>
                            <p class="mb-0">The Best HTML Site Template on ThemeForest</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <footer id="footer">
        <div class="container">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>
            <div class="row py-5 my-4">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-3 mb-3">NEWSLETTER</h5>
                    <p class="pe-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="me-4 mb-3 mb-md-0">
                        <div class="input-group input-group-rounded">
                            <input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="email">
                            <button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="text-3 mb-3">LATEST POSTS</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2 pb-1">
                            <a href="#">
                                <p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Lorem ipsum dolor sit amet.</strong></p>
                                <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                            </a>
                        </li>
                        <li class="mb-2 pb-1">
                            <a href="#">
                                <p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Ipsum dolor sit amet.</strong></p>
                                <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p class="text-3 text-color-light opacity-8 mb-0"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2 font-weight-semibold">Lorem ipsum dolor sit amet.</strong></p>
                                <p class="text-2 mb-0">12:55 AM Dec 19th</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="contact-details">
                        <h5 class="text-3 mb-3">CONTACT US</h5>
                        <ul class="list list-icons list-icons-lg">
                            <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
                            <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
                            <li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <h5 class="text-3 mb-3">FOLLOW US</h5>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                        <a href="index.html" class="logo pe-0 pe-lg-3">
                            <img alt="Porto Website Template" src="img/logo-footer.png" class="opacity-5" width="49" height="22" data-plugin-options="{'appearEffect': 'fadeIn'}">
                        </a>
                    </div>
                    <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                        <p>© Copyright 2023. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                        <nav id="sub-menu">
                            <ul>
                                <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ms-1 text-decoration-none"> FAQ's</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ms-1 text-decoration-none"> Sitemap</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ms-1 text-decoration-none"> Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
