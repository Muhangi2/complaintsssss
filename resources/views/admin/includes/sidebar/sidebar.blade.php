<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Complaints</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('marks')}}">
              <i class="bi bi-circle"></i><span>Marks</span>
            </a>
          </li>
          <li>
            <a href="{{url('registration')}}">
              <i class="bi bi-circle"></i><span>Registration</span>
            </a>
          </li>
          <li>
            <a href="{{url('tuition')}}">
              <i class="bi bi-circle"></i><span>Tuition</span>
            </a>
          </li>

        </ul>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link " href="{{url('/settings')}}">
          <i class="bi bi-gear"></i>
          <span>settings</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{url('/reports')}}">
          <i class="bi bi-file-text"></i>
               <span>Reports</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link " href="{{url('/')}}">
          <i class="bi bi-grid"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>

  </aside>