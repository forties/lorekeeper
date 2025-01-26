<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="headerNav">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('lorekeeper.settings.site_name', 'Lorekeeper') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    @if(Auth::check() && Auth::user()->is_news_unread && Config::get('lorekeeper.extensions.navbar_news_notif'))
                    <a class="nav-link d-flex text-warning" href="{{ url('news') }}"><strong>News</strong><i class="fas fa-bell"></i></a>
                    @else
                    <a class="nav-link" href="{{ url('news') }}">News</a>
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('https://discord.gg/gjSewyUYA9') }}">Discord</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="inventoryDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Help Desk
                    </a>
                    <div class="dropdown-menu" aria-labelledby="inventoryDropdown">
                        <a class="dropdown-item" href="{{ url('info/Guide') }}">
                            Beginners Guide
                        </a>
                        <a class="dropdown-item" href="{{ url('info/FAQ') }}">
                            Species FAQ
                        </a>
                        <a class="dropdown-item" href="{{ url('news/2.website-faq') }}">
                            Website FAQ
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('info/question') }}">
                            Question Desk
                        </a>
                        <a class="dropdown-item" href="{{ url('info/account') }}">
                            Retirment and Account Binding
                        </a>
                        <a class="dropdown-item" href="{{ url('info/username') }}">
                            Username/Alias Updates
                        </a>
                        <a class="dropdown-item" href="{{ url('info/masterlisthelp') }}">
                            Masterlist Help
                        </a>
                        <a class="dropdown-item" href="{{ url('info/approval') }}">
                            Approval/ML Submission
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('claims') }}">
                            My Claims
                        </a>
                        <a class="dropdown-item" href="{{ url('reports') }}">
                            My Reports
                        </a>
                        <a class="dropdown-item" href="{{ url('reports/bug-reports') }}">
                            Bug Reports
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="loreDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Species Info
                    </a>
                    <div class="dropdown-menu" aria-labelledby="loreDropdown">
                        <a class="dropdown-item" href="{{ url('https://vespercove.com/info/Rules') }}">
                            Species Rules
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('world/species?name=Vesper') }}">
                            General Info
                        </a>
                        <a class="dropdown-item" href="{{ url('https://vespercove.com/world/subtypes?name=Aami%2C+Acantha%2C+Aceldama%2C+Akal') }}">
                            Clan Info
                        </a>
                        <a class="dropdown-item" href="{{ url('world/species/1/traits') }}">
                            Trait Index
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('world') }}">
                            Enyclopedia
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="queueDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Masterlists
                    </a>
                    <div class="dropdown-menu" aria-labelledby="queueDropdown">
                        <a class="dropdown-item" href="{{ url('users') }}">
                            Users
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('masterlist') }}">
                            Vesper Masterlist
                        </a>
                        <a class="dropdown-item" href="{{ url('sublist/Pliff') }}">
                            Pliff Masterlist
                        </a>
                        <a class="dropdown-item" href="{{ url('myos') }}">
                            MYO Slot Masterlist
                        </a>
                    </div>
                </li>
                @if(Auth::check())
                <li class="nav-item dropdown">
                    <a id="browseDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        My Stuff
                    </a>

                    <div class="dropdown-menu" aria-labelledby="browseDropdown">
                        <a class="dropdown-item" href="{{ url('characters') }}">
                            My Characters
                        </a>
                        <a class="dropdown-item" href="{{ url('characters/myos') }}">
                            My MYO Slots
                        </a>
                        <a class="dropdown-item" href="{{ url('inventory') }}">
                            My Items
                        </a>
                        <a class="dropdown-item" href="{{ url('bank') }}">
                            My Bank
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('designs') }}">
                            Design Updates
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('characters/transfers/incoming') }}">
                            Masterlist Transfers
                        </a>
                        <a class="dropdown-item" href="{{ url('trades/open') }}">
                            My Trades
                        </a>
                    </div>
                </li>
                @endif
                <li class="nav-item dropdown">
                    <a id="loreDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Shops
                    </a>
                    <div class="dropdown-menu" aria-labelledby="loreDropdown">
                        <a class="dropdown-item" href="{{ url('shops/2') }}">
                            Kit's General Shop
                        </a>
                        <a class="dropdown-item" href="{{ url('shops/6') }}">
                            Bluebell Adoption Center
                        </a>
                        <a class="dropdown-item" href="{{ url('shops/4') }}">
                            Scoot's Knicknacks and Wobbly Items
                        </a>
                        <a class="dropdown-item" href="{{ url('shops/5') }}">
                            Back Alley
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="loreDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Gallery & Prompts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="loreDropdown">
                        <a class="dropdown-item" href="{{ url('gallery') }}">
                            Full Gallery
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('prompts/prompts?name=&prompt_category_id=2&sort=category') }}">
                            Prompts
                        </a>
                        <a class="dropdown-item" href="{{ url('submissions/new') }}">
                            Prompt Submission
                        </a>

                    </div>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                @if(Auth::user()->isStaff)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin') }}"><i class="fas fa-crown"></i></a>
                </li>
                @endif
                @if(Auth::user()->notifications_unread)
                <li class="nav-item">
                    <a class="nav-link btn btn-secondary btn-sm" href="{{ url('notifications') }}"><span class="fas fa-envelope"></span> {{ Auth::user()->notifications_unread }}</a>
                </li>
                @endif
                <li class="nav-item dropdown">
                    <a id="browseDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Submit
                    </a>

                    <div class="dropdown-menu" aria-labelledby="browseDropdown">
                        @if(Auth::user()->isStaff)
                        <a class="dropdown-item" href="{{ url('admin/masterlist/create-character') }}">
                            Submit Character
                        </a>
                        @endif
                        <a class="dropdown-item" href="{{ url('submissions/new') }}">
                            Submit Prompt
                        </a>
                        <a class="dropdown-item" href="{{ url('claims/new') }}">
                            Submit Claim
                        </a>
                        <a class="dropdown-item" href="{{ url('reports/new') }}">
                            Submit Report
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ Auth::user()->url }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ Auth::user()->url }}">
                            Profile
                        </a>
                        <a class="dropdown-item" href="{{ url('notifications') }}">
                            Notifications
                        </a>
                        <a class="dropdown-item" href="{{ url('account/bookmarks') }}">
                            Bookmarks
                        </a>
                        <a class="dropdown-item" href="{{ url('account/settings') }}">
                            Settings
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>