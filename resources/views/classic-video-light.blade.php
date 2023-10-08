@extends('layouts.classic-main')
@section('content')

<div class="body">
    <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 header-body-bottom-border">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="Porto" width="82" height="40" src="img/logo-default-slim-small.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="index.html">
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
                                                <a class="dropdown-item dropdown-toggle active" href="#">
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
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                    <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search"><i class="fas fa-search header-nav-top-icon"></i></a>
                                    <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">
        <section class="section border-0 video overlay overlay-show overlay-color-light overlay-op-8 m-0" data-video-path="video/busy" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
            <div class="container position-relative z-index-3 h-100">
                <div class="row align-items-center h-100">
                    <div class="col">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                            <h1 class="position-relative text-color-dark text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
                                    <img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                </span>
                                GET READY TO <span class="position-relative">SEE<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-3"><img src="img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
                                    <img src="img/slides/slide-title-border-light.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                </span>
                            </h1>
                            <h1 class="text-color-dark font-weight-extra-bold text-12 line-height-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">PERFECT VIDEOS</h1>
                            <p class="text-4 text-color-dark font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">Check out our options and features</p>
                        </div>
                    </div>
                </div>
                <a href="#main" class="slider-scroll-button slider-scroll-button-dark position-absolute bottom-10 left-50pct transform3dx-n50" data-hash data-hash-offset="0" data-hash-offset-lg="80">Sroll To Bottom</a>
            </div>
        </section>

        <div class="container" id="main">

            <div class="row text-center pb-4 pt-5 my-5">
                <div class="col-md-10 mx-md-auto">
                    <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                        <span>Porto is </span>
                        <span class="word-rotator-words bg-dark">
                            <b class="is-visible">incredibly</b>
                            <b>especially</b>
                            <b>extremely</b>
                        </span>
                        <span> beautiful and fully responsive.</span>
                    </h1>
                    <p class="lead appear-animation mb-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
                    </p>
                </div>
            </div>
            <div class="row pb-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-box feature-box-style-2 mb-3">
                                <div class="feature-box-icon">
                                    <i class="icons icon-support text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">Customer Support</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2 mb-3">
                                <div class="feature-box-icon">
                                    <i class="icons icon-doc text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">HTML5 / CSS3 / JS</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-social-google text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">500+ Google Fonts</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-box feature-box-style-2 mb-3">
                                <div class="feature-box-icon">
                                    <i class="icons icon-layers text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">Sliders</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2 mb-3">
                                <div class="feature-box-icon">
                                    <i class="icons icon-user text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">Icons</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="icons icon-menu text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">Buttons</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="accordion accordion-modern accordion-modern-grey-scale-1" id="accordion">
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseOne">
                                        <i class="icons icon-diamond text-color-primary"></i>
                                        Creative Websites
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show">
                                <div class="card-body text-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blanorem ipsum dolor sit amet, consecte.</p>
                                    <p class="mb-0">Adipiscing elit phasellus blanit ma... <a href="#" class="text-color-dark font-weight-semibold ms-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseTwo">
                                        <i class="icons icon-bubble text-color-primary"></i>
                                        Contact Forms
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse">
                                <div class="card-body text-2">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseThree">
                                        <i class="icons icon-grid text-color-primary"></i>
                                        Portfolio Pages
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse">
                                <div class="card-body text-2">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <section class="section bg-color-grey-scale-1 border-0 m-0">
            <div class="container">
                <div class="row my-5">
                    <div class="col-lg-6 pe-5">
                        <h2 class="font-weight-normal text-6 mb-2 pb-1"><strong class="font-weight-extra-bold">Who</strong> We Are</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enikklam id valorem ipsum dolor sit amet, consectetur adipiscing.</p>
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
            </div>
        </section>

        <div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="row py-5 my-5">
                <div class="col-md-6 order-2 order-md-1 text-center text-md-start">
                    <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="img/team/team-1.jpg" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
                            <p class="text-2 mb-0">CEO</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="img/team/team-2.jpg" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
                            <p class="text-2 mb-0">CEO</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="img/team/team-3.jpg" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                            <p class="text-2 mb-0">DEVELOPER</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="img/team/team-4.jpg" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                            <p class="text-2 mb-0">SEO ANALYST</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="img/team/team-5.jpg" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                            <p class="text-2 mb-0">DESIGNER</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
                    <a href="page-team.html" class="btn btn-dark font-weight-semibold rounded-0 px-5 btn-py-2 text-2">LEARN MORE</a>
                </div>
            </div>
        </div>

        <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                        <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false}">
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                    <div class="testimonial-author">
                                        <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                    <div class="testimonial-author">
                                        <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <footer id="footer" class="mt-0">
        <div class="container">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>
            <div class="row py-5 my-4">
                <div class="col-md-6 mb-4 mb-lg-0">
                    <a href="index.html" class="logo pe-0 pe-lg-3">
                        <img alt="Porto Website Template" src="img/logo-footer.png" class="opacity-7 bottom-4" height="32">
                    </a>
                    <p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
                    <p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 ps-2"></i></a></p>
                </div>
                <div class="col-md-6">
                    <h5 class="text-3 mb-3">CONTACT US</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list list-icons list-icons-lg">
                                <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
                                <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
                                <li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list list-icons list-icons-sm">
                                <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="link-hover-style-1 ms-1"> FAQ's</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="link-hover-style-1 ms-1"> Sitemap</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="link-hover-style-1 ms-1"> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright footer-copyright-style-2">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col d-flex align-items-center justify-content-center">
                        <p>© Copyright 2023. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
