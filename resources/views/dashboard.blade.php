<x-app-layout>
    <x-slot name="header">
        <div class="menu-icon bi bi-list"></div>
    </x-slot>

    <!DOCTYPE html>
    <html>
        <head>
            <!-- Basic Page Info -->
            <meta charset="utf-8" />
            <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

            <!-- Site favicon -->
            <link
                rel="apple-touch-icon"
                sizes="180x180"
                href="./back/vendors/images/apple-touch-icon.png"
            />
            <link
                rel="icon"
                type="image/png"
                sizes="32x32"
                href="./back/vendors/images/favicon-32x32.png"
            />
            <link
                rel="icon"
                type="image/png"
                sizes="16x16"
                href="./back/vendors/images/favicon-16x16.png"
            />

            <!-- Mobile Specific Metas -->
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1, maximum-scale=1"
            />

            <!-- Google Font -->
            <link
                href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
                rel="stylesheet"
            />
            <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="./back/vendors/styles/core.css" />
            <link
                rel="stylesheet"
                type="text/css"
                href="./back/vendors/styles/icon-font.min.css"
            />
            <link
                rel="stylesheet"
                type="text/css"
                href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
            />
            <link
                rel="stylesheet"
                type="text/css"
                href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
            />
            <link rel="stylesheet" type="text/css" href="./back/vendors/styles/style.css" />

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script
                async
                src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
            ></script>
            <script
                async
                src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
                crossorigin="anonymous"
            ></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag("js", new Date());

                gtag("config", "G-GBZ3SGGX85");
            </script>
            <!-- Google Tag Manager -->
            <script>
                (function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != "dataLayer" ? "&l=" + l : "";
                    j.async = true;
                    j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
            </script>
            <!-- End Google Tag Manager -->
        </head>
        <body>


            <div class="right-sidebar">
                <div class="sidebar-title">
                    <h3 class="weight-600 font-16 text-blue">
                        Layout Settings
                        <span class="btn-block font-weight-400 font-12"
                            >User Interface Settings</span
                        >
                    </h3>
                    <div class="close-sidebar" data-toggle="right-sidebar-close">
                        <i class="icon-copy ion-close-round"></i>
                    </div>
                </div>
                <div class="right-sidebar-body customscroll">
                    <div class="right-sidebar-body-content">
                        <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                        <div class="sidebar-btn-group pb-30 mb-10">
                            <a
                                href="javascript:void(0);"
                                class="btn btn-outline-primary header-white active"
                                >White</a
                            >
                            <a
                                href="javascript:void(0);"
                                class="btn btn-outline-primary header-dark"
                                >Dark</a
                            >
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                        <div class="sidebar-btn-group pb-30 mb-10">
                            <a
                                href="javascript:void(0);"
                                class="btn btn-outline-primary sidebar-light"
                                >White</a
                            >
                            <a
                                href="javascript:void(0);"
                                class="btn btn-outline-primary sidebar-dark active"
                                >Dark</a
                            >
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                        <div class="sidebar-radio-group pb-10 mb-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebaricon-1"
                                    name="menu-dropdown-icon"
                                    class="custom-control-input"
                                    value="icon-style-1"
                                    checked=""
                                />
                                <label class="custom-control-label" for="sidebaricon-1"
                                    ><i class="fa fa-angle-down"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebaricon-2"
                                    name="menu-dropdown-icon"
                                    class="custom-control-input"
                                    value="icon-style-2"
                                />
                                <label class="custom-control-label" for="sidebaricon-2"
                                    ><i class="ion-plus-round"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebaricon-3"
                                    name="menu-dropdown-icon"
                                    class="custom-control-input"
                                    value="icon-style-3"
                                />
                                <label class="custom-control-label" for="sidebaricon-3"
                                    ><i class="fa fa-angle-double-right"></i
                                ></label>
                            </div>
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                        <div class="sidebar-radio-group pb-30 mb-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-1"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-1"
                                    checked=""
                                />
                                <label class="custom-control-label" for="sidebariconlist-1"
                                    ><i class="ion-minus-round"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-2"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-2"
                                />
                                <label class="custom-control-label" for="sidebariconlist-2"
                                    ><i class="fa fa-circle-o" aria-hidden="true"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-3"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-3"
                                />
                                <label class="custom-control-label" for="sidebariconlist-3"
                                    ><i class="dw dw-check"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-4"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-4"
                                    checked=""
                                />
                                <label class="custom-control-label" for="sidebariconlist-4"
                                    ><i class="icon-copy dw dw-next-2"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-5"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-5"
                                />
                                <label class="custom-control-label" for="sidebariconlist-5"
                                    ><i class="dw dw-fast-forward-1"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-6"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-6"
                                />
                                <label class="custom-control-label" for="sidebariconlist-6"
                                    ><i class="dw dw-next"></i
                                ></label>
                            </div>
                        </div>

                        <div class="reset-options pt-30 text-center">
                            <button class="btn btn-danger" id="reset-settings">
                                Reset Settings
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="left-side-bar">
                <div class="brand-logo">

                    <a href="index.html">
                        <img src="./back/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
                        <img
                            src="./back/vendors/images/deskapp-logo-white.svg"
                            alt=""
                            class="light-logo"
                        />

                    </a>

                    <div class="close-sidebar" data-toggle="left-sidebar-close">
                        <i class="ion-close-round"></i>
                    </div>
                </div>
                <div class="menu-block customscroll">
                    <div class="sidebar-menu">
                        <ul id="accordion-menu">
                           <x-app-layout>
    <x-slot name="header">
        <div class="menu-icon bi bi-list"></div>
    </x-slot>

    <!DOCTYPE html>
    <html>
        <head>
            <!-- Basic Page Info -->
            <meta charset="utf-8" />
            <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

            <!-- Site favicon -->
            <link
                rel="apple-touch-icon"
                sizes="180x180"
                href="./back/vendors/images/apple-touch-icon.png"
            />
            <link
                rel="icon"
                type="image/png"
                sizes="32x32"
                href="./back/vendors/images/favicon-32x32.png"
            />
            <link
                rel="icon"
                type="image/png"
                sizes="16x16"
                href="./back/vendors/images/favicon-16x16.png"
            />

            <!-- Mobile Specific Metas -->
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1, maximum-scale=1"
            />

            <!-- Google Font -->
            <link
                href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
                rel="stylesheet"
            />
            <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="./back/vendors/styles/core.css" />
            <link
                rel="stylesheet"
                type="text/css"
                href="./back/vendors/styles/icon-font.min.css"
            />
            <link
                rel="stylesheet"
                type="text/css"
                href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
            />
            <link
                rel="stylesheet"
                type="text/css"
                href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
            />
            <link rel="stylesheet" type="text/css" href="./back/vendors/styles/style.css" />

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script
                async
                src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
            ></script>
            <script
                async
                src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
                crossorigin="anonymous"
            ></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag("js", new Date());

                gtag("config", "G-GBZ3SGGX85");
            </script>
            <!-- Google Tag Manager -->
            <script>
                (function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != "dataLayer" ? "&l=" + l : "";
                    j.async = true;
                    j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
            </script>
            <!-- End Google Tag Manager -->
        </head>
        <body>


            <div class="right-sidebar">
                <div class="sidebar-title">
                    <h3 class="weight-600 font-16 text-blue">
                        Layout Settings
                        <span class="btn-block font-weight-400 font-12"
                            >User Interface Settings</span
                        >
                    </h3>
                    <div class="close-sidebar" data-toggle="right-sidebar-close">
                        <i class="icon-copy ion-close-round"></i>
                    </div>
                </div>
                <div class="right-sidebar-body customscroll">
                    <div class="right-sidebar-body-content">
                        <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                        <div class="sidebar-btn-group pb-30 mb-10">
                            <a
                                href="javascript:void(0);"
                                class="btn btn-outline-primary header-white active"
                                >White</a
                            >
                            <a
                                href="javascript:void(0);"
                                class="btn btn-outline-primary header-dark"
                                >Dark</a
                            >
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                        <div class="sidebar-btn-group pb-30 mb-10">
                            <a
                                href="javascript:void(0);"
                                class="btn btn-outline-primary sidebar-light"
                                >White</a
                            >
                            <a
                                href="javascript:void(0);"
                                class="btn btn-outline-primary sidebar-dark active"
                                >Dark</a
                            >
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                        <div class="sidebar-radio-group pb-10 mb-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebaricon-1"
                                    name="menu-dropdown-icon"
                                    class="custom-control-input"
                                    value="icon-style-1"
                                    checked=""
                                />
                                <label class="custom-control-label" for="sidebaricon-1"
                                    ><i class="fa fa-angle-down"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebaricon-2"
                                    name="menu-dropdown-icon"
                                    class="custom-control-input"
                                    value="icon-style-2"
                                />
                                <label class="custom-control-label" for="sidebaricon-2"
                                    ><i class="ion-plus-round"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebaricon-3"
                                    name="menu-dropdown-icon"
                                    class="custom-control-input"
                                    value="icon-style-3"
                                />
                                <label class="custom-control-label" for="sidebaricon-3"
                                    ><i class="fa fa-angle-double-right"></i
                                ></label>
                            </div>
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                        <div class="sidebar-radio-group pb-30 mb-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-1"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-1"
                                    checked=""
                                />
                                <label class="custom-control-label" for="sidebariconlist-1"
                                    ><i class="ion-minus-round"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-2"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-2"
                                />
                                <label class="custom-control-label" for="sidebariconlist-2"
                                    ><i class="fa fa-circle-o" aria-hidden="true"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-3"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-3"
                                />
                                <label class="custom-control-label" for="sidebariconlist-3"
                                    ><i class="dw dw-check"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-4"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-4"
                                    checked=""
                                />
                                <label class="custom-control-label" for="sidebariconlist-4"
                                    ><i class="icon-copy dw dw-next-2"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-5"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-5"
                                />
                                <label class="custom-control-label" for="sidebariconlist-5"
                                    ><i class="dw dw-fast-forward-1"></i
                                ></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    id="sidebariconlist-6"
                                    name="menu-list-icon"
                                    class="custom-control-input"
                                    value="icon-list-style-6"
                                />
                                <label class="custom-control-label" for="sidebariconlist-6"
                                    ><i class="dw dw-next"></i
                                ></label>
                            </div>
                        </div>

                        <div class="reset-options pt-30 text-center">
                            <button class="btn btn-danger" id="reset-settings">
                                Reset Settings
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="left-side-bar">
                <div class="brand-logo">

                    <a href="index.html">
                        <img src="./back/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
                        <img
                            src="./back/vendors/images/deskapp-logo-white.svg"
                            alt=""
                            class="light-logo"
                        />

                    </a>

                    <div class="close-sidebar" data-toggle="left-sidebar-close">
                        <i class="ion-close-round"></i>
                    </div>
                </div>
                <div class="menu-block customscroll">
                    <div class="sidebar-menu">
                        <ul id="accordion-menu">
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <span class="micon bi bi-house"></span
                                    ><span class="mtext">Home</span>
                                </a>

                            </li>
                             <li class="dropdown">
                               <a href="javascript:;" class="dropdown-toggle">
                                    <span class="micon bi bi-textarea-resize"></span
                                    ><span class="mtext">Forms</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="{{ url('insert-data') }}">Shto nje koshere</a></li>
                                    <li>
                                        <a href="{{ url('insert-honey') }}">Shto mjaltë</a>
                                    </li>
                                    <li><a href="{{ url('insert-honey-category') }}">shto kategorin e mjales</a></li>
                                    <li><a href="{{ url('sell-honey') }}">shit mjalten</a></li>
                                 <li><a href="{{ url('showHives') }}">Shih kosheret</a></li>
                                  <li><a href="{{ url('showHoney') }}">Shih mjalten</a></li>
                                      <li><a href="{{ url('showSellings') }}">Shih shitjet</a></li>
                                </ul>
                            </li>


                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay"></div>


            <!-- welcome modal start -->
            <div class="welcome-modal">
                <button class="welcome-modal-close">
                    <i class="bi bi-x-lg"></i>
                </button>
                <iframe
                    class="w-100 border-0"
                    src="https://embed.lottiefiles.com/animation/31548"
                ></iframe>
                <div class="text-center">
                    <h3 class="h5 weight-500 text-center mb-2">
                        Open source
                        <span role="img" aria-label="gratitude">❤️</span>
                    </h3>
                    <div class="pb-2">
                        <a
                            class="github-button"
                            href="https://github.com/dropways/deskapp"
                            data-color-scheme="no-preference: dark; light: light; dark: light;"
                            data-icon="octicon-star"
                            data-size="large"
                            data-show-count="true"
                            aria-label="Star dropways/deskapp dashboard on GitHub"
                            >Star</a
                        >
                        <a
                            class="github-button"
                            href="https://github.com/dropways/deskapp/fork"
                            data-color-scheme="no-preference: dark; light: light; dark: light;"
                            data-icon="octicon-repo-forked"
                            data-size="large"
                            data-show-count="true"
                            aria-label="Fork dropways/deskapp dashboard on GitHub"
                            >Fork</a
                        >
                    </div>
                </div>
                <div class="text-center mb-1">
                    <div>
                        <a
                            href="https://github.com/dropways/deskapp"
                            target="_blank"
                            class="btn btn-light btn-block btn-sm"
                        >
                            <span class="text-danger weight-600">STAR US</span>
                            <span class="weight-600">ON GITHUB</span>
                            <i class="fa fa-github"></i>
                        </a>
                    </div>
                    <script
                        async
                        defer="defer"
                        src="https://buttons.github.io/buttons.js"
                    ></script>
                </div>
                <a
                    href="https://github.com/dropways/deskapp"
                    target="_blank"
                    class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
                >
                    DOWNLOAD
                    <i class="fa fa-download"></i>
                </a>
                <p class="font-14 text-center mb-1 d-none d-md-block">
                    Available in the following technologies:
                </p>
                <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
                    <i class="fa fa-html5"></i>
                </div>
            </div>
            <button class="welcome-modal-btn">
                <i class="fa fa-download"></i> Download
            </button>
            <!-- welcome modal end -->
            <!-- js -->
            <script src="./back/vendors/scripts/core.js"></script>
            <script src="./back/vendors/scripts/script.min.js"></script>
            <script src="./back/vendors/scripts/process.js"></script>
            <script src="./back/vendors/scripts/layout-settings.js"></script>
            <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
            <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
            <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
            <script src="./back/vendors/scripts/dashboard3.js"></script>
            <!-- Google Tag Manager (noscript) -->
            <noscript
                ><iframe
                    src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
                    height="0"
                    width="0"
                    style="display: none; visibility: hidden"
                ></iframe
            ></noscript>
            <!-- End Google Tag Manager (noscript) -->
        </body>
    </html>


</x-app-layout>

                             <li class="dropdown">
                               <a href="javascript:;" class="dropdown-toggle">
                                    <span class="micon bi bi-textarea-resize"></span
                                    ><span class="mtext">Forms</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="{{ url('insert-data') }}">Shto nje koshere</a></li>
                                    <li>
                                        <a href="{{ url('insert-honey') }}">Shto mjaltë</a>
                                    </li>
                                    <li><a href="{{ url('insert-honey-category') }}">shto kategorin e mjales</a></li>
                                    <li><a href="{{ url('sell-honey') }}">shit mjalten</a></li>
                                    <li><a href="{{ url('showHives') }}">Shih kosheret</a></li>
                                    {{-- <li><a href="image-cropper.html">Image Cropper</a></li>
                                    <li><a href="image-dropzone.html">Image Dropzone</a></li> --}}
                                </ul>
                            </li>


                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay"></div>


            <!-- welcome modal start -->
            <div class="welcome-modal">
                <button class="welcome-modal-close">
                    <i class="bi bi-x-lg"></i>
                </button>
                <iframe
                    class="w-100 border-0"
                    src="https://embed.lottiefiles.com/animation/31548"
                ></iframe>
                <div class="text-center">
                    <h3 class="h5 weight-500 text-center mb-2">
                        Open source
                        <span role="img" aria-label="gratitude">❤️</span>
                    </h3>
                    <div class="pb-2">
                        <a
                            class="github-button"
                            href="https://github.com/dropways/deskapp"
                            data-color-scheme="no-preference: dark; light: light; dark: light;"
                            data-icon="octicon-star"
                            data-size="large"
                            data-show-count="true"
                            aria-label="Star dropways/deskapp dashboard on GitHub"
                            >Star</a
                        >
                        <a
                            class="github-button"
                            href="https://github.com/dropways/deskapp/fork"
                            data-color-scheme="no-preference: dark; light: light; dark: light;"
                            data-icon="octicon-repo-forked"
                            data-size="large"
                            data-show-count="true"
                            aria-label="Fork dropways/deskapp dashboard on GitHub"
                            >Fork</a
                        >
                    </div>
                </div>
                <div class="text-center mb-1">
                    <div>
                        <a
                            href="https://github.com/dropways/deskapp"
                            target="_blank"
                            class="btn btn-light btn-block btn-sm"
                        >
                            <span class="text-danger weight-600">STAR US</span>
                            <span class="weight-600">ON GITHUB</span>
                            <i class="fa fa-github"></i>
                        </a>
                    </div>
                    <script
                        async
                        defer="defer"
                        src="https://buttons.github.io/buttons.js"
                    ></script>
                </div>
                <a
                    href="https://github.com/dropways/deskapp"
                    target="_blank"
                    class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
                >
                    DOWNLOAD
                    <i class="fa fa-download"></i>
                </a>
                <p class="font-14 text-center mb-1 d-none d-md-block">
                    Available in the following technologies:
                </p>
                <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
                    <i class="fa fa-html5"></i>
                </div>
            </div>
            <button class="welcome-modal-btn">
                <i class="fa fa-download"></i> Download
            </button>
            <!-- welcome modal end -->
            <!-- js -->
            <script src="./back/vendors/scripts/core.js"></script>
            <script src="./back/vendors/scripts/script.min.js"></script>
            <script src="./back/vendors/scripts/process.js"></script>
            <script src="./back/vendors/scripts/layout-settings.js"></script>
            <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
            <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
            <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
            <script src="./back/vendors/scripts/dashboard3.js"></script>
            <!-- Google Tag Manager (noscript) -->
            <noscript
                ><iframe
                    src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
                    height="0"
                    width="0"
                    style="display: none; visibility: hidden"
                ></iframe
            ></noscript>
            <!-- End Google Tag Manager (noscript) -->
        </body>
    </html>


</x-app-layout>
