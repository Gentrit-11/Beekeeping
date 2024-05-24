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
                        {{-- <li><a href="form-pickers.html">Form Pickers</a></li>
                        <li><a href="image-cropper.html">Image Cropper</a></li>
                        <li><a href="image-dropzone.html">Image Dropzone</a></li> --}}
                    </ul>
                </li>


        </div>
    </div>
</div>
