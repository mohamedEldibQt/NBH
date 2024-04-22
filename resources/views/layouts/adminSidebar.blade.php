
<div class="main-menu menu-fixed menu-light menu-accordion  menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" nav-item">
               <a href="{{ route('dashboard') }}"><i class="la la-home"></i>
                   <span class="menu-title" data-i18n="nav.dash.main">{{trans('words.dashboard')}}</span>
              </a>
            </li>


            <li class=" nav-item"><a href="{{ route('headers') }}">
                    <i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.form_layouts.main"> {{trans('words.header')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('headers') }}" data-i18n="nav.form_layouts.form_layout_basic"> {{trans('words.show_header')}}</a>
                    </li>

                    <li><a class="menu-item" href="{{ route('headers_create') }}" data-i18n="nav.form_layouts.form_layout_form_actions"> {{trans('words.create_header')}}</a>
                    </li>

                </ul>
            </li>



            <li class="nav-item has-sub "><a href="#">   <i class="la la-file-text"></i>
                    <span class="menu-title" data-i18n="nav.menu_levels.main">{{trans('words.about')}}</span></a>
                <ul class="menu-content" style="">
                    <li class="has-sub is-shown "><a class="menu-item" href="{{ route('about') }}" data-i18n="nav.menu_levels.second_level_child.main">{{trans('words.about')}}</a>
                        <ul class="menu-content" style="">
                            <li><a class="menu-item" href="{{ route('about') }}" data-i18n="nav.form_layouts.form_layout_basic">{{trans('words.show_about')}}</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('about_create') }}" data-i18n="nav.form_layouts.form_layout_form_actions"> {{trans('words.create_about')}}</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-sub is-shown "><a class="menu-item" href="{{ route('aboutTeam') }}" data-i18n="nav.menu_levels.second_level_child.main">{{trans('words.about_team')}}</a>
                        <ul class="menu-content" style="">
                            <li><a class="menu-item" href="{{ route('aboutTeam') }}" data-i18n="nav.form_layouts.form_layout_basic">{{trans('words.show_about_team')}}</a>
                            </li>

                            <li><a class="menu-item" href="{{ route('aboutOurTeam_create') }}" data-i18n="nav.form_layouts.form_layout_form_actions">{{trans('words.create_about_team')}}</a>
                            </li>

                        </ul>
                    </li>


                    <li class="has-sub is-shown"><a class="menu-item" href="{{ route('aboutFutures') }}" data-i18n="nav.menu_levels.second_level_child.main">{{trans('words.about_future')}}</a>
                        <ul class="menu-content" style="">
                            <li><a class="menu-item" href="{{ route('aboutFutures') }}" data-i18n="nav.form_layouts.form_layout_basic">{{trans('words.show_about_future')}}</a>
                            </li>

                            <li><a class="menu-item" href="{{ route('aboutFuture_create') }}" data-i18n="nav.form_layouts.form_layout_form_actions">{{trans('words.create_about_future')}}</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>




            <li class="nav-item has-sub "><a href="#">   <i class="la la-file-text"></i>
                    <span class="menu-title" data-i18n="nav.menu_levels.main">{{trans('words.branch')}}</span></a>
                <ul class="menu-content" style="">
                    <li class="has-sub is-shown "><a class="menu-item" href="{{ route('branch') }}" data-i18n="nav.menu_levels.second_level_child.main"> {{trans('words.branch')}}</a>
                        <ul class="menu-content" style="">
                            <li><a class="menu-item" href="{{ route('branch') }}" data-i18n="nav.menu_levels.second_level_child.third_level"> {{trans('words.show_branch')}}</a>
                            </li>

                            <li><a class="menu-item" href="{{ route('branch_create') }}" data-i18n="nav.menu_levels.second_level_child.third_level">{{trans('words.create_branch')}}</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-sub is-shown "><a class="menu-item" href="{{ route('branchTeam') }}"
                                                         data-i18n="nav.menu_levels.second_level_child.main">{{trans('words.branch_team')}}</a>
                        <ul class="menu-content" style="">
                            <li><a class="menu-item" href="{{ route('branchTeam') }}" data-i18n="nav.form_layouts.form_layout_basic"> {{trans('words.show_branch_team')}}</a>
                            </li>

                            <li><a class="menu-item" href="{{ route('branchTeam_create') }}" data-i18n="nav.form_layouts.form_layout_form_actions">{{trans('words.create_branch_team')}}</a>
                            </li>

                        </ul>
                    </li>


                    <li class="has-sub is-shown "><a class="menu-item" href="{{ route('branchFuture') }}"
                                                         data-i18n="nav.menu_levels.second_level_child.main"> {{trans('words.branch_future')}}</a>
                        <ul class="menu-content" style="">
                            <li><a class="menu-item" href="{{ route('branchFuture') }}" data-i18n="nav.form_layouts.form_layout_basic">{{trans('words.show_branch_future')}}</a>
                            </li>

                            <li><a class="menu-item" href="{{ route('branchFuture_create') }}" data-i18n="nav.form_layouts.form_layout_form_actions">{{trans('words.create_branch_future')}}</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>





            <li class=" nav-item"><a href="{{ route('partner') }}"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.form_layouts.main">{{trans('words.partner')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('partner') }}" data-i18n="nav.form_layouts.form_layout_basic"> {{trans('words.show_partner')}}</a>
                    </li>

                    <li><a class="menu-item" href="{{ route('partner_create') }}" data-i18n="nav.form_layouts.form_layout_form_actions">{{trans('words.create_partner')}}</a>
                    </li>

                </ul>
            </li>

            <li class=" nav-item"><a href="{{ route('products') }}"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.form_layouts.main"> {{trans('words.product')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('products') }}" data-i18n="nav.form_layouts.form_layout_basic">{{trans('words.show_product')}}</a>
                    </li>

                    <li><a class="menu-item" href="{{ route('product_create') }}" data-i18n="nav.form_layouts.form_layout_form_actions">{{trans('words.create_product')}}</a>
                    </li>

                </ul>
            </li>


            <li class=" nav-item"><a href="{{ route('footer') }}"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.form_layouts.main"> {{trans('words.footer')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('footer') }}" data-i18n="nav.form_layouts.form_layout_basic">{{trans('words.show_footer')}}</a>
                    </li>

                    <li><a class="menu-item" href="{{ route('footer_create') }}" data-i18n="nav.form_layouts.form_layout_form_actions">{{trans('words.create_footer')}}</a>
                    </li>

                </ul>
            </li>

            <hr>


            <li class=" nav-item"><a href="{{ route('contacts') }}"><i class="la la-file-text"></i>
                    <span class="menu-title" data-i18n="nav.form_layouts.main"> {{trans('words.contact_us')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('contacts') }}" data-i18n="nav.form_layouts.form_layout_basic">{{trans('words.show_contacts')}}</a>
                    </li>

                </ul>
            </li>


        </ul>

    </div>
</div>
