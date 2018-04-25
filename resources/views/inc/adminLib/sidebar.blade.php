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
                    <span>Book</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin_lib_book_list') }}">All Book List</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_lib_lost_book') }}">Lost Book List</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_lib_add_book') }}">New Book</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="icon-stack"></i>
                    <span>Circulation</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin_lib_issue_book_list') }}">Issue Book List</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_lib_add_issue_book') }}">Issue Book</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_lib_add_return_book') }}">Return Book</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="icon-stack"></i>
                    <span>Student</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ route('admin_lib_student_list') }}">Registered student</a>
                    </li>
                    <li>
                        <a href="{{ route('admin_lib_student_form') }}">Student Form</a>
                    </li>
                </ul>
            </li>

            
            <li>
                <a href="{{ route('admin_lib_fee_adjustment') }}">
                    <i class="icon-stack"></i>
                    <span>Fee Adjustment</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin_lib_lock_system') }}">
                    <i class="icon-stack"></i>
                    <span>Lock System</span>
                </a>
            </li>

            <li>
                <a href="{{ route('user_lib_index') }}">
                    <i class="icon-stack"></i>
                    <span>User Panel</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin_dashboard_index') }}">
                    <i class="icon-stack"></i>
                    <span>Website Management</span>
                </a>
            </li>

            <!-- /main -->

        </ul>
    </div>
</div>
<!-- /main navigation -->