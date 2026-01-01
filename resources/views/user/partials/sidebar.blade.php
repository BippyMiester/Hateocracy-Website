<style>
    .sidebar-icon {
        width: 24px;               /* ensure visible width */
        height: 24px;              /* ensure visible height */
        display: inline-block;     /* prevents collapsing in some containers */
        vertical-align: middle;    /* aligns with text baseline */
        color: #888ea8;            /* default icon color; adjust to match your sidebar */
        fill: currentColor;        /* make the SVG path use the element color */
    }

    /* Ensure the path inside the sidebar-icon uses the fill as a fallback for overly-specific global rules. */
    .sidebar-icon path {
        fill: currentColor !important;
    }
</style>
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu">
                <a href="{{ route('user.dashboard') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        {{--
                            Dashboard icon: use the Font Awesome SVG path (fill-based).
                            width/height + fill="currentColor" ensures the icon is visible and takes CSS color.
                        --}}
                        <svg
                            class="sidebar-icon"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640"
                            width="24"
                            height="24"
                            role="img"
                            aria-hidden="true"
                            fill="currentColor"
                        >
                            <!-- Font Awesome Free v7.1.0 path (solid) -->
                            <path d="M64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320zM384 416C384 389.1 367.5 366.1 344 356.7L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184L296 356.7C272.5 366.2 256 389.2 256 416C256 451.3 284.7 480 320 480C355.3 480 384 451.3 384 416zM208 240C225.7 240 240 225.7 240 208C240 190.3 225.7 176 208 176C190.3 176 176 190.3 176 208C176 225.7 190.3 240 208 240zM192 320C192 302.3 177.7 288 160 288C142.3 288 128 302.3 128 320C128 337.7 142.3 352 160 352C177.7 352 192 337.7 192 320zM480 352C497.7 352 512 337.7 512 320C512 302.3 497.7 288 480 288C462.3 288 448 302.3 448 320C448 337.7 462.3 352 480 352zM464 208C464 190.3 449.7 176 432 176C414.3 176 400 190.3 400 208C400 225.7 414.3 240 432 240C449.7 240 464 225.7 464 208z"/>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>


            <li class="menu">
                <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        {{--
                            Dashboard icon: use the Font Awesome SVG path (fill-based).
                            width/height + fill="currentColor" ensures the icon is visible and takes CSS color.
                        --}}
                        <svg
                            class="sidebar-icon"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640"
                            width="24"
                            height="24"
                            role="img"
                            aria-hidden="true"
                            fill="currentColor"
                        >
                            <!-- Font Awesome Free v7.1.0 path (solid) -->
                            <path d="M384 224L480 224L480 160L384 160L384 224zM96 224L96 144C96 117.5 117.5 96 144 96L496 96C522.5 96 544 117.5 544 144L544 240C544 266.5 522.5 288 496 288L144 288C117.5 288 96 266.5 96 240L96 224zM256 480L480 480L480 416L256 416L256 480zM96 480L96 400C96 373.5 117.5 352 144 352L496 352C522.5 352 544 373.5 544 400L544 496C544 522.5 522.5 544 496 544L144 544C117.5 544 96 522.5 96 496L96 480z"/>
                        </svg>
                        <span>Progress</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                    <li class="active">
                        <a href="#"> Labs </a>
                    </li>
                    <li>
                        <a href="#"> Cards </a>
                    </li>
                    <li>
                        <a href="#"> Modules </a>
                    </li>

                </ul>
            </li>

            <li class="menu">
                <a href="{{ route('terms.display') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        {{--
                            Dashboard icon: use the Font Awesome SVG path (fill-based).
                            width/height + fill="currentColor" ensures the icon is visible and takes CSS color.
                        --}}
                        <svg
                            class="sidebar-icon"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640"
                            width="24"
                            height="24"
                            role="img"
                            aria-hidden="true"
                            fill="currentColor"
                        >
                            <!-- Font Awesome Free v7.1.0 path (solid) -->
                            <path d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64zM320 130.8L320 508.9C458 442.1 495.1 294.1 496 205.5L320 130.9L320 130.9z"/>
                        </svg>
                        <span>Privacy Policy</span>
                    </div>
                </a>
            </li>


        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>
