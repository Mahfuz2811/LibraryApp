<!-- Main navigation -->
<div class="sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

            <!-- Main -->
            <li class="navigation-header">
            </li>
            <li>
                <a href="">
                    <i class="icon-home4"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="icon-stack"></i>
                    <span>Notice</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin_notice') }}">All Notice</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_notice_add') }}">New Notice</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="icon-stack"></i>
                    <span>Book</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin_book') }}">All Book</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_book_add') }}">New Book</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="icon-stack"></i>
                    <span>Slider</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin_slider') }}">All Slider</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_slider_add') }}">New Slider</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="icon-stack"></i>
                    <span>Form Download</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin_form') }}">All Form Download</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_form_add') }}">New Form Download</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="icon-stack"></i>
                    <span>Library Member</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin_member') }}">All Member</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_member_add') }}">New Member</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="icon-stack"></i>
                    <span>Administration Member</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin_administration') }}">All Member</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_administration_add') }}">New Member</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="icon-stack"></i>
                    <span>Dynamic Page</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin_dynamic_page') }}">All Pages</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_dynamic_page_add') }}">New Page</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin_lib_index') }}">
                    <i class="icon-home4"></i>
                    <span>Library Management</span>
                </a>
            </li>
            <!-- /main -->

        </ul>
    </div>
</div>
<!-- /main navigation -->