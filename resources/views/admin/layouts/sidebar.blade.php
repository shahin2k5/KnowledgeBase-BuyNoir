
            
            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title"> 
                                <span>Main</span>
                            </li>


                            <li class="{{ (request()->is('admin/dashboard*')) ? 'active' : '' }}"> 
                                <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                                    <i class="fe fe-home"></i>
                                    <span>
                                        {{__('sidebar.dashboard')}} 
                                    </span>
                                </a>
                            </li>

                            @can('article-list')
                                <li class="{{ (request()->is('admin/article*')) ? 'active' : '' }}"> 
                                    <a class="sidebar-link" href="{{ route('articles.index') }}" aria-expanded="false">
                                        <i class="fe fe-layout"></i>
                                        <span>
                                            {{__('sidebar.article')}} 
                                        </span>
                                    </a>
                                </li>
                            @endcan

                            @can('articlecategory-list')
                                <li class="{{ (request()->is('admin/articlecategory*')) ? 'active' : '' }}"> 
                                    <a class="sidebar-link" href="{{ route('articlecategories.index') }}" aria-expanded="false">
                                        <i class="fe fe-layout"></i>
                                        <span>
                                            {{__('sidebar.articlecategory')}} 
                                        </span>
                                    </a>
                                </li>
                            @endcan




                            <li class="submenu"> 

                                <a class="" href="javascript:void(0)" aria-expanded="false">
                                    <i class="fe fe-users"></i>
                                    <span class="hide-menu">{{__('sidebar.user')}} </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul style="display: none;">

                                    @can('user-list')
                                        <li>
                                            <a href="{{ route('users.index') }}" title="{{__('sidebar.user')}}" class="sidebar-link {{ (request()->is('admin/user*')) ? 'active' : '' }}">
                                                <span class="hide-menu">{{__('sidebar.user')}}</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('role-list')
                                        <li>
                                            <a href="{{ route('roles.index') }}" title="{{__('sidebar.roles')}}" class="sidebar-link {{ (request()->is('admin/roles*')) ? 'active' : '' }}">
                                                <span class="hide-menu">{{__('sidebar.user_role')}}</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('permission-list')
                                        <li>
                                            <a href="{{ route('permissions.index') }}" title="{{__('sidebar.permissions')}}" class="sidebar-link {{ (request()->is('admin/permissions*')) ? 'active' : '' }}">
                                                <span class="hide-menu">{{__('sidebar.permission')}}</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('user-activity-list')
                                        <li>
                                            <a href="/admin/user-activity" title="{{__('sidebar.useractivity')}}" class="sidebar-link {{ (request()->is('admin/setting/useractivity*')) ? 'active' : '' }}">
                                                {{-- <i data-feather="user-check" class="feather-icon"></i> --}}
                                                <span class="hide-menu">{{__('sidebar.useractivity')}}</span>
                                            </a>
                                        </li>
                                    @endcan

                                </ul>
                            </li>




                            <li class="submenu"> 

                                <a class="" href="javascript:void(0)" aria-expanded="false">
                                    <i class="fe fe-vector"></i>
                                    <span class="hide-menu">{{__('sidebar.settings')}} </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul style="display: none;">

                                    @can('setting-edit')
                                        <li>
                                            <a href="{{route('settings.site-setting.edit')}}" title="{{__('sidebar.file-manager')}}" class="sidebar-link {{ (request()->is('admin/setting/site-setting*')) ? 'active' : '' }}">
                                                <span class="hide-menu">{{__('sidebar.site-setting')}}</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('file-manager')
                                        <li>
                                            <a href="{{route('filemanager.index')}}" title="{{__('sidebar.file-manager')}}" class="sidebar-link {{ (request()->is('admin/setting/file-manager*')) ? 'active' : '' }}">
                                                <span class="hide-menu">{{__('sidebar.file-manager')}}</span>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('log-list')
                                        <li>
                                            <a href="/admin/log-reader" title="{{__('sidebar.log')}}" class="sidebar-link {{ (request()->is('admin/setting/log*')) ? 'active' : '' }}">
                                                <span class="hide-menu">{{__('sidebar.log')}}</span>
                                            </a>
                                        </li>
                                    @endcan

                                </ul>
                            </li>





                            



                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->