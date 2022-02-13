<header class="header">
    <div class="wrapper">
        <div class="container">
            <div class="navigation-container">
                <a
                    class="logo"
                    href="{{ route('user.home') }}"
                >
                    <img
                        src="{{ asset('images/logo.svg') }}"
                        alt="Texto escrito empregos para sabatistas"
                    />
                </a>
                <nav class="navigation">
                    <ul class="menu-list">
                        <li>
                            <a
                                class="link {{ (Route::currentRouteName() === 'user.home') ? 'active' : ''}}"
                                href="{{ route('user.home') }}"
                            >
                                início
                            </a>
                        </li>
                        <li>
                            <a
                            class="link {{ (Route::currentRouteName() === 'user.jobs') ? 'active' : ''}}"
                                href="{{ route('user.jobs') }}"
                            >
                                vagas
                            </a>
                        </li>
                        <li>
                            <a
                                class="link {{ (Route::currentRouteName() === 'user.publish-jobs') ? 'active' : ''}}"
                                href="{{ route('user.publish-jobs') }}"
                            >
                                publique uma vaga
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
