<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Event Manage</li>

                <li class="has_sub">

                    <a href="{{ route('admin.dashboard') }}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-folder"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.category') }}">Add Category</a></li>
                        <li><a href="{{ route('admin.categorylist') }}">Category List</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-folder"></i>
                        <span> Event</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.page-event')}}"> Add Event</a></li>
                        <li><a href="{{route('admin.eventlist')}}"> Event List</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-folder"></i>
                        <span> Speaker</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.speaker')}}"> Add Speaker</a></li>
                        <li><a href="{{route('admin.speakerlist')}}"> Speaker List</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-folder"></i>
                        <span> Booking</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.bookinglist')}}"> Booking List</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-folder"></i>
                        <span> Invoice</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.invoice.list')}}"> Invoice List</a></li>

                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->