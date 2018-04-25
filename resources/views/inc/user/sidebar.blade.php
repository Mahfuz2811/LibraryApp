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
                <a href="{{ route('user_lib_book_list') }}">
                    <i class="icon-stack"></i>
                    <span>Book List</span>
                </a>
            </li>

            <li>
                <a href="{{ route('user_lib_previouse_issued') }}">
                    <i class="icon-stack"></i>
                    <span>Previous Issued</span>
                </a>
            </li>

            <li>
                <a href="{{ route('user_lib_pending') }}">
                    <i class="icon-stack"></i>
                    <span>Pending Book</span>
                </a>
            </li>

            <li>
                <a href="{{ route('user_lib_apply_book') }}">
                    <i class="icon-stack"></i>
                    <span>Apply for Book</span>
                </a>
            </li>

            <!-- /main -->

        </ul>
    </div>
</div>
<!-- /main navigation -->