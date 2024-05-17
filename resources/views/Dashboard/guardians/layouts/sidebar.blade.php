<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <br>
    <h1><p>Guardian Dashboard</p></h1>
    <div class="mdc-drawer__content">
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <!-- Student Section -->
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="student-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
                        Children
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="student-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('children.create') }}">
                                    Add Child
                                </a>
                                
                            </div>
                            {{-- <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('guardian.create') }}">
                                    Add Child
                                </a>
                            </div> --}}
                        </nav>
                    </div>
                </div>
                
                
                <!-- More Sections -->
                <!-- Add other sections as needed -->
                
            </nav>
        </div>
    </div>
</aside>
