
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('nucleos.index') }}">
          <i class="fa fa-church"></i>
          <span>Nucleos</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('agrupamentos.index') }}">
          <i class="fa fa-church"></i>
          <span>Agrupamentos</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dirigentes.index')}}">
          <i class="fa fa-church"></i>
          <span>Dirigentes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('agrupamentos.index') }}">
          <i class="fa fa-church"></i>
          <span>Unidade</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('ua.index') }}">
          <i class="fa fa-church"></i>
          <span>Unidade Autonoma</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('agrupamentos.index') }}">
          <i class="fa fa-church"></i>
          <span>Escuteiro</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('agrupamentos.index') }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="fa fa-gear"></i>
          <span>Configuracoes</span>
        </a>


        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="forms-elements.html">
                <i class="fa fa-people'group"></i><span>Patrulhas</span>
              </a>
            </li>
            <li>
              <a href="forms-layouts.html">
                <i class="bi bi-circle"></i><span>Religiao</span>
              </a>
            </li>

            <li>
                <a href="{{ route('fucoes.index') }}">
                  <i class="bi bi-circle"></i><span>Cargo do Dirigente</span>
                </a>
              </li>

        </ul>


      </li>

      <!-- End Dashboard Nav -->



    </ul>

  </aside><!-- End Sidebar-->
