<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <p>School Mentoe

    </p>
    <div class="mdc-drawer__content">
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">

                <!-- User Section -->
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="user-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
                        Attendance
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>
                    <div class="mdc-expansion-panel" id="user-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a class="mdc-drawer-link" href="{{ route('get_attendances') }}">
                                    List Attendance
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
                                <a class="mdc-drawer-link" href="{{ route('get_teachers') }}">
                                    List teachers
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
                                <a class="mdc-drawer-link" href="{{ route('get_guardians') }}">
                                    List guardians
                                </a>
                            </div>
                           >
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
                <a class="mdc-drawer-link" href="{{ route('get_subjects') }}">
                    List subjects
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
                <a class="mdc-drawer-link" href="{{ route('get_students') }}">
                    List students
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
                <a class="mdc-drawer-link" href="{{ route('get_grades') }}">
                    List grades
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
                <a class="mdc-drawer-link" href="{{ route('get_class_rooms') }}">
                    List Class Rooms
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
                <a class="mdc-drawer-link" href="{{ route('get_daily_schedules') }}">
                    List Schedules
                </a>
            </div>
         
        </nav>
    </div>
</div>









            </nav>
        </div>
    </div>
</aside>
