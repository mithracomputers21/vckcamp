<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
            {{ trans('panel.site_title') }}
        </a>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>



            <!-- Divider -->
            <div class="flex md:hidden">
                @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
                    <livewire:language-switcher />
                @endif
            </div>
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{ route("admin.home") }}" class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('camp_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/camps*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.camps.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-users">
                            </i>
                            {{ trans('cruds.camp.title') }}
                        </a>
                    </li>
                @endcan
                @can('member_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/members*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.members.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-user-friends">
                            </i>
                            {{ trans('cruds.member.title') }}
                        </a>
                    </li>
                @endcan
                @can('setting_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/states*")||request()->is("admin/districts*")||request()->is("admin/unions*")||request()->is("admin/panchayats*")||request()->is("admin/habitations*")||request()->is("admin/assemblies*")||request()->is("admin/parliments*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                            </i>
                            {{ trans('cruds.setting.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('state_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/states*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.states.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-globe">
                                        </i>
                                        {{ trans('cruds.state.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('district_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/districts*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.districts.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-map-marker-alt">
                                        </i>
                                        {{ trans('cruds.district.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('union_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/unions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.unions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fab fa-uniregistry">
                                        </i>
                                        {{ trans('cruds.union.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('panchayat_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/panchayats*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.panchayats.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-location-arrow">
                                        </i>
                                        {{ trans('cruds.panchayat.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('habitation_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/habitations*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.habitations.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-map-pin">
                                        </i>
                                        {{ trans('cruds.habitation.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('assembly_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/assemblies*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.assemblies.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user-tie">
                                        </i>
                                        {{ trans('cruds.assembly.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('parliment_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/parliments*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.parliments.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-male">
                                        </i>
                                        {{ trans('cruds.parliment.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-users">
                            </i>
                            {{ trans('cruds.userManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('permission_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.permissions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                        </i>
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.roles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.users.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                        </i>
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_alert_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/user-alerts*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.user-alerts.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-bell">
                            </i>
                            {{ trans('cruds.userAlert.title') }}
                        </a>
                    </li>
                @endcan
                <li class="items-center">
                    <a class="{{ request()->is("admin/messages*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.messages.index") }}">
                        <i class="far fa-fw fa-envelope c-sidebar-nav-icon">
                        </i>
                        {{ __('global.messages') }}
                        @if($unreadConversations['all'])
                            <span class="text-xs bg-rose-500 text-white px-2 py-1 rounded-xl font-bold float-right">
                                {{ $unreadConversations['all'] }}
                            </span>
                        @endif
                    </a>
                </li>


                @if(file_exists(app_path('Http/Controllers/Auth/UserProfileController.php')))
                    @can('auth_profile_edit')
                        <li class="items-center">
                            <a href="{{ route("profile.show") }}" class="{{ request()->is("profile") ? "sidebar-nav-active" : "sidebar-nav" }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle"></i>
                                {{ trans('global.my_profile') }}
                            </a>
                        </li>
                    @endcan
                @endif

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>