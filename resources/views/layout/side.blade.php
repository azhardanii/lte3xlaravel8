<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('template')}}/index3.html" class="brand-link pb-4">
      <img src="{{asset('img')}}/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar px-0">      
      <div class="user-panel mt-2 pb-1 pl-2 mb-3 d-flex">
        <div class="image pt-2">
          <img src="{{asset('img')}}/user_sad.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">{{ Auth::user()->name }}</a>
          <a class="d-block"><i class="fa fa-circle text-success mr-1" style="font-size: 12px;"></i>            
            @if(auth()->user()->role==0)
              Administrator
            @elseif(auth()->user()->role==1)
              Guru
            @elseif(auth()->user()->role==2)
              Siswa
            @endif            
          </a>
        </div>
      </div>      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column pl-2" data-widget="treeview" role="menu" data-accordion="false">    

          <!-- Menu Administrator -->   
          @if(auth()->user()->role==0)
          <li class="nav-item {{ request()->is('/') ? 'show' : '' }}">
            <a href="/" class="nav-link">
                <i class="far nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
          </li>                    
          <li class="nav-item {{ request()->is('guru') ? 'show' : '' }}">
            <a href="/guru" class="nav-link">
                <i class="far nav-icon fas fa-user"></i>
                <p>Guru</p>
            </a>
          </li>                    
          <li class="nav-item {{ request()->is('siswa') ? 'show' : '' }}">
            <a href="/siswa" class="nav-link">
                <i class="far nav-icon fas fa-user-alt"></i>
                <p>Siswa</p>
            </a>
          </li>   
          <!-- Menu Guru -->   
          @elseif(auth()->user()->role==1)
          <li class="nav-item {{ request()->is('/') ? 'show' : '' }}">
            <a href="/" class="nav-link">
                <i class="far nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
          </li>                    
          <li class="nav-item {{ request()->is('guru') ? 'show' : '' }}">
            <a href="/guru" class="nav-link">
                <i class="far nav-icon fas fa-user"></i>
                <p>Guru</p>
            </a>
          </li>  
          <!-- Menu Siswa -->   
          @elseif(auth()->user()->role==2)
          <li class="nav-item {{ request()->is('/') ? 'show' : '' }}">
            <a href="/" class="nav-link">
                <i class="far nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
          </li>                                               
          <li class="nav-item {{ request()->is('siswa') ? 'show' : '' }}">
            <a href="/siswa" class="nav-link">
                <i class="far nav-icon fas fa-user-alt"></i>
                <p>Siswa</p>
            </a>
          </li>                                                                 
          @endif   

          <li class="nav-item">            
            <a href="#" class="nav-link" type="button" data-toggle="modal" data-target="#valid-out">
                <i class="far nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
            </a>                          
          </li>                           
        </ul>
      </nav>      
    </div>        
</aside>

<div class="modal fade" id="valid-out">
  <div class="modal-dialog modal-sm">
    <div class="modal-content bg-dark">            
      <div class="modal-body">
        <p>Apakah yakin akan keluar / Logout?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-light">Ya!</a>
      </div>
    </div>
  </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form> 

         