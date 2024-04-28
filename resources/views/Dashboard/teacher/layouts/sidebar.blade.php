<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <br>
    <h1><p> Teacher Dashboarde </p></h1>
    <div class="mdc-drawer__content">
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <!-- Attendance Section -->
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="attendance-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">check_circle</i>
                        Attendances
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="attendance-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('attendances.index') }}">
                                    List Attendances
                                </a>
                            </div>
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('attendances.create') }}">
                                    Add Attendance
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="user-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
                        Student
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="user-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('teacher_students.index') }}">
                                    List students
                                </a>
                                
                            </div>
                       
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
    </div>


  
    
</aside>
