<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <p>Admin dashboard</p>
    s<div class="mdc-drawer__content">
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">

                <!-- User Section -->
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="user-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
                        User
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="user-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('users.index') }}">
                                    List users
                                </a>
                            </div>
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('users.create') }}">
                                    Add user
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- Teacher Section -->
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="teacher-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">school</i>
                        Teacher
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="teacher-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('teachers.index') }}">
                                    List teachers
                                </a>
                            </div>
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('teachers.create') }}">
                                    Add teacher
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- Guardian Section -->
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="guardian-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person_outline</i>
                        Guardian
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="guardian-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('guardians.index') }}">
                                    List guardians
                                </a>
                            </div>
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('guardians.create') }}">
                                    Add guardian
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="mentor-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">school</i>
                        School Mentors
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="mentor-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('school_mentors.index') }}">
                                    List School Mentors
                                </a>
                            </div>
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('school_mentors.create') }}">
                                    Add School Mentor
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- Subject Section -->
<div class="mdc-list-item mdc-drawer-item">
    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="subject-sub-menu">
        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">subject</i>
        Subject
        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
    </a>
    <div class="mdc-expansion-panel" id="subject-sub-menu">
        <nav class="mdc-list mdc-drawer-submenu">
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('subjects.index') }}">
                    List subjects
                </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('subjects.create') }}">
                    Add subject
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
                <a class="mdc-drawer-link" href="{{ route('students.index') }}">
                    List students
                </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('students.create') }}">
                    Add student
                </a>
            </div>
        </nav>
    </div>
</div>


<!-- Grade Section -->
<div class="mdc-list-item mdc-drawer-item">
    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="grade-sub-menu">
        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">assignment</i>
        Grade
        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
    </a>
    <div class="mdc-expansion-panel" id="grade-sub-menu">
        <nav class="mdc-list mdc-drawer-submenu">
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('grades.index') }}">
                    List grades
                </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('grades.create') }}">
                    Add grade
                </a>
            </div>
        </nav>
    </div>
</div>


<!-- Class Room Section -->
<div class="mdc-list-item mdc-drawer-item">
    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="class-room-sub-menu">
        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">class</i>
        Class Room
        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
    </a>
    <div class="mdc-expansion-panel" id="class-room-sub-menu">
        <nav class="mdc-list mdc-drawer-submenu">
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('class_rooms.index') }}">
                    List Class Rooms
                </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('class_rooms.create') }}">
                    Add Class Room
                </a>
            </div>
        </nav>
    </div>
</div>


<!-- Daily Schedule Section -->

<div class="mdc-list-item mdc-drawer-item">
    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="daily-schedule-sub-menu">
        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">schedule</i>
        Daily Schedule
        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
    </a>
    
    <div class="mdc-expansion-panel" id="daily-schedule-sub-menu">
        <nav class="mdc-list mdc-drawer-submenu">
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('daily_schedules.index') }}">
                    List Schedules
                </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ route('daily_schedules.create') }}">
                    Add Schedule
                </a>
            </div>
        </nav>
    </div>
</div>









            </nav>
        </div>
    </div>
</aside>
