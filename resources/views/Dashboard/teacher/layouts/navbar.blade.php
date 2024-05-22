<header class="mdc-top-app-bar">
    <div class="mdc-top-app-bar__row">
        <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
        </div>
        <h1><p>Teacher Dashboard</p></h1>

        <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="mdc-icon-button" title="Logout" style="background: none; border: none;">
                    <i class="mdi mdi-logout-variant" style="font-size: 24px; color: #000;"></i>
                </button>
            </form>
        </div>
    </div>
</header>
