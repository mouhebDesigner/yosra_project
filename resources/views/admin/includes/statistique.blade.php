
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ route('admin.sujets.index') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Les Sujets
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\Sujet::count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ route('admin.etudiants.index') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Les Etudiants
          </span>
          <span class="info-box-number text-dark">
            {{ App\Models\User::where('role', 'etudiant')->count() }}

          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
    @if(Auth::user()->isAdmin())
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ route('admin.users.index') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Inscriptions
          </span>
          <span class="info-box-number text-dark">
            {{ App\Models\User::where('role', 'etudiant')->count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
    @endif
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ route('admin.events.index') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Evènements
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\Event::count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ route('admin.formations.index') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Formations
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\Formation::count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
  <!-- /.col -->
</div>