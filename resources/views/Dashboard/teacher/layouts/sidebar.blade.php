<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <br>
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

                <!-- Student Section -->
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="student-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
                        Student
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="student-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('teacher_students.index') }}">
                                    List Students
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- Daily Schedules Section -->
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="schedules-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">event</i>
                        Daily Schedules
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="schedules-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('teacher_daily_schedules.index') }}">
                                    List Schedules
                                </a>
                            </div>

                        </nav>
                    </div>
                </div>


                <!-- Grades Section -->
<div class="mdc-list-item mdc-drawer-item">
    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="grades-sub-menu">
        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grade</i>
        Grades
        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
    </a>
    <div class="mdc-expansion-panel" id="grades-sub-menu">
        <nav class="mdc-list mdc-drawer-submenu">
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('teacher_grades.index') }}">
                    List Grades
                </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('teacher_grades.create') }}">
                    Add Grade
                </a>
            </div>
        </nav>
    </div>
</div>
</aside>
