@extends('layouts._admin.main')
@section('title', 'IJOMAC - Detalhes do Formador')
@section('content')
    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Formador</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">Detalhes do Formador</li>
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
                        <a href="{{ route('admin.teacher.edit', ['teacher' => $teacher->id]) }}"
                            class="btn btn-icon btn-light-brand">
                            <i class="feather-edit"></i>
                        </a>
                        @can('is-admin')
                            <a href="{{ route('admin.teacher.delete', ['teacher' => $teacher->id]) }}"
                                class="btn btn-icon btn-light-brand">
                                <i class="feather-trash-2"></i>
                            </a>
                        @endcan
                        <a href="{{ route('admin.teacher.index') }}" class="btn btn-danger ">
                            <i class="feather-chevron-left me-2"></i>
                            <span>Voltar</span>

                        </a>
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
                                @if ($teacher->photo)
                                    <img src="{{ url('storage/' . $teacher->photo) }}" alt="foto de {{ $teacher->name }}"
                                        class="img-fluid">
                                @else
                                    <img src="{{ url('assets/images/user.png') }}" alt="formador sem foto"
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
                                    <td class="col-md-9">{{ $teacher->name }}</td>
                                </tr>
                                <tr>
                                    <th class="col-md-3">E-mail:</th>
                                    <td class="col-md-9">{{ $teacher->email }}</td>
                                </tr>
                                <tr>
                                    <th class="col-md-3">Telefone:</th>
                                    <td class="col-md-9">{{ $teacher->phone }}</td>
                                </tr>
                                <tr>
                                    <th class="col-md-3">Endereço:</th>
                                    <td class="col-md-9">{{ $teacher->address }}</td>
                                </tr>
                                <tr>
                                    <th class="col-md-3">Criado em:</th>
                                    <td class="col-md-9">
                                        {{ $teacher->created_at ? $teacher->created_at->format('d/m/Y H:i') : now() }}</td>
                                </tr>
                                <tr>
                                    <th class="col-md-3">Última atualização:</th>
                                    <td class="col-md-9">
                                        {{ $teacher->updated_at ? $teacher->updated_at->format('d/m/Y H:i') : now() }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
