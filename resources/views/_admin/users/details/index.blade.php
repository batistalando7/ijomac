@extends('layouts._admin.main')
@section('title', 'IJOMAC - Detalhes do Utilizador')
@section('content')
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Utilizador</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">Meu Perfil</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <a href="javascript:void(0);" class="btn btn-icon btn-light-brand">
                            <i class="feather-printer"></i>
                        </a>
                        <a href="{{ route('admin.user.edit', ['user' => $user->slug]) }}"
                            class="btn btn-icon btn-light-brand">
                            <i class="feather-edit"></i>
                        </a>
                        @can('is-admin')
                            <a href="{{ route('admin.user.delete', ['user' => $user->slug]) }}"
                                class="btn btn-icon btn-light-brand">
                                <i class="feather-trash-2"></i>
                            </a>
                        @endcan

                        @can('is-editor')
                            <a href="{{ route('admin.user.index') }}" class="btn btn-primary ">
                                <i class="feather-chevron-left me-2"></i>
                                <span>Voltar</span>

                            </a>
                        @endcan
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <div class="main-content">
            <div class="row">
                <div class="col-xxl-4">
                    <div class="card stretch stretch-full">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="avatar-image wd-150 ht-150 border border-5 border-gray-3">
                                @if ($user->image)
                                    <img src="{{ url('storage/' . $user->image) }}" alt="foto de {{ $user->name }}"
                                        class="img-fluid">
                                @else
                                    <img src="{{ url('assets/images/user.png') }}" alt="usuarioa sem foto"
                                        class="img-fluid">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th class="col-md-3">Nome:</th>
                                    <td class="col-md-9">{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th class="col-md-3">E-mail:</th>
                                    <td class="col-md-9">{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th class="col-md-3">Função:</th>
                                    <td class="col-md-9">{{ $user->role }}</td>
                                </tr>
                                <tr>
                                    <th class="col-md-3">Criado em:</th>
                                    <td class="col-md-9">
                                        {{ $user->created_at ? $user->created_at->format('d/m/Y H:i') : now() }}</td>
                                </tr>
                                <tr>
                                    <th class="col-md-3">Última atualização:</th>
                                    <td class="col-md-9">
                                        {{ $user->updated_at ? $user->updated_at->format('d/m/Y H:i') : now() }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
