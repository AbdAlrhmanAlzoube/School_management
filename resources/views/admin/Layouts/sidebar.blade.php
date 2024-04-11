<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
  <p>Admin dashboard</p>
  <div class="mdc-drawer__content">
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
          </nav>
      </div>
  </div>
</aside>
