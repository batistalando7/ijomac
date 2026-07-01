<!--! ================================================================ !-->
<!--! [Start] Navigation Manu !-->
<!--! ================================================================ !-->
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/admin/dashboard" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                {{-- <img src="{{ url('site/images/favicon.png') }}" alt="SOS" class="logo logo-lg"
                    style="heigth:10rem; width:12rem;"> --}}

                <h1 class="logo logo-lg">IJOMAC </h1>
                <img src="{{ url('site/images/favicon.png') }}" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Dashboard</label>
                </li>
                @can('is-admin')
                    {{-- Menu Dashboard --}}
                    <li class="nxl-item">
                        <a href="/admin/dashboard" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Visão geral</span>
                        </a>
                    </li>

                    <li class="nxl-item nxl-caption">
                        <label>Recursos</label>
                    </li>

                    {{-- Menu users --}}
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-user"></i></span>
                            <span class="nxl-mtext">Utilizador</span><span class="nxl-arrow"><i
                                    class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.user.index') }}">Lista de
                                    Utilizadores</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.user.create') }}">Adicionar
                                    Utilizador</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                                
                {{-- Menu Curso --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Alunos</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.student.index') }}">Lista de
                                alunos</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.student.create') }}">Adicionar
                                aluno</a>
                        </li>
                    </ul>
                </li>

                {{-- Menu Category --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                        <span class="nxl-mtext">Categorias</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.category.index') }}">Lista de
                                Categoria</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.category.create') }}">Adicionar
                                Categoria</a>
                        </li>
                    </ul>
                </li>
                
                {{-- Menu Curso --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-file-text"></i></span>
                        <span class="nxl-mtext">Cursos</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.course.index') }}">Lista de
                                Cursos</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.course.create') }}">Adicionar
                                Curso</a>
                        </li>
                    </ul>
                </li>

                {{-- Menu Formadores --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-facebook"></i></span>
                        <span class="nxl-mtext">Formadores</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.teacher.index') }}">Lista
                                de Formadores</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.teacher.create') }}">Adicionar
                                Formador</a></li>
                    </ul>
                </li>
                
                {{-- Menu services --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-list"></i></span>
                        <span class="nxl-mtext">Serviços</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.service.index') }}">Lista
                                de Serviços</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.service.create') }}">Adicionar
                                Serviço</a></li>
                    </ul>
                </li>

                {{-- Menu Tags --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-tag"></i></span>
                        <span class="nxl-mtext">Solicitação de Serviços</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.serviceRequest.index') }}">Lista de
                                Solicitações</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.serviceRequest.create') }}">Adicionar Solicitação</a>
                        </li>
                    </ul>
                </li>

                <li class="nxl-item nxl-caption">
                    <label>Multimedia</label>
                </li>

                {{-- Menu Publicidade --}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-volume-2"></i></span>
                        <span class="nxl-mtext">Anúncios</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.ads.index') }}">Lista de
                                Anúncios</a>
                        </li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('admin.ads.create') }}">Adicionar
                                Anúncios</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    </div>
</nav>
