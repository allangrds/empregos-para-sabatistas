<header class="header">
  <div class="wrapper">
    <div class="container">
      <div class="content">
        <a
          href="{{ route('user.home') }}"
        >
          <img
            src="{{ asset('images/logo.svg') }}"
            alt="Texto escrito empregos para sabatistas"
          />
        </a>
        <nav>
          <ul class="menu-list">
            <li class="menu-item">
              <a
                class="link"
                href="{{ route('user.home') }}"
              >
                início
              </a>
            </li>
            <li class="menu-item">
              <a
                class="link"
                href="{{ route('user.jobs') }}"
                >
                  vagas
              </a>
            </li>
            <li class="menu-item">
              <a
                class="link"
                href="{{ route('user.publish_jobs') }}"
              >
                publique uma vaga
              </a>
            </li>
            <li class="menu-item">
              <a
                class="link"
                href="{{ route('faq') }}"
              >
                dúvidas
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
