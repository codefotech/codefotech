<!-- ================== Sidebar Start ================== -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <span style="color: var(--bs-primary)">
                    <?xml version="1.0" encoding="utf-8"?>
                    <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 268 150"
                        style="enable-background:new 0 0 268 150;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #1E81BB;
                            }
                        </style>
                        <g>
                            <path d="M121.5,145l-107-56.7V61.7L121.5,5v44.4L68.1,75l53.4,25.6V145z" />
                            <path class="st0" d="M253.5,88.3l-107,56.7v-44.4L200.1,75l-53.6-25.6V5l107,56.7V88.3z" />
                        </g>
                    </svg>
                </span>
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">Code<span
                    class="codefotech_text_color">FoTech</span></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                    fill="currentColor" fill-opacity="0.6" />
                <path
                    d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                    fill="currentColor" fill-opacity="0.38" />
            </svg>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <!-- Blog -->
        <li class="menu-item active">
            <a href="{{ route('blog.list') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                <div data-i18n="Blog">Blog</div>
            </a>
        </li>

        <!-- Layouts -->
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                <div data-i18n="Layouts">Layouts</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-collapsed-menu.html" class="menu-link">
                        <div data-i18n="Collapsed menu">Collapsed menu</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-content-navbar.html" class="menu-link">
                        <div data-i18n="Content navbar">Content navbar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
                        <div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="../horizontal-menu-template" class="menu-link" target="_blank">
                        <div data-i18n="Horizontal">Horizontal</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        <div data-i18n="Without menu">Without menu</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-navbar.html" class="menu-link">
                        <div data-i18n="Without navbar">Without navbar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-fluid.html" class="menu-link">
                        <div data-i18n="Fluid">Fluid</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-container.html" class="menu-link">
                        <div data-i18n="Container">Container</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Blank">Blank</div>
                    </a>
                </li>
            </ul>
        </li> --}}

        <!-- Apps & Pages -->
    </ul>
</aside>
<!-- =================== Sidebar End =================== -->
