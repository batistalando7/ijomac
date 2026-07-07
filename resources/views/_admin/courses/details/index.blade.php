@extends('layouts._admin.main')
@section('title', 'IJOMAC - Detalhes do Curso')
@section('content')

    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Cursos</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">Detalhes do curso ({{ $course->name }})</li>
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
                        {{--  <a href="javascript:void(0);" class="btn btn-light-brand" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                        <i class="feather-layers me-2"></i>
                        <span>Save & Send</span>
                    </a> --}}
                        <a onclick="window.history.back();" class="btn btn-primary">
                            <i class="feather-chevron-left me-2"></i>
                            Voltar</a>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                    <div class="card card-body general-info">
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                            <h5 class="fw-bold mb-0">
                                <span class="d-block mb-2">Informação Geral :</span>
                                <span class="fs-12 fw-normal text-muted d-block">Informação geral do Curso</span>
                            </h5>
                            <a href="{{ route('admin.course.index') }}" class="btn btn-sm btn-light-brand">Listar
                                Cursos</a>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">
                                <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->name }}" class="img-fluid" s>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">ID</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $course->id }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Nome do Curso</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $course->name ?? 'Sem Nome'}}</span>
                                </a>
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Categoria</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $course->category->name ?? 'Sem Categoria'}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Duração</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $course->duration ?? 'Sem Duração'}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Nível</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $levels[$course->level] ?? 'Sem Nível'}}</span>
                                </a>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Preço</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>Kz {{ number_format($course->price, 2, ',', '.') ?? 'Sem preço' }}</span>
                                </a>
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Formador</div>
                            <div class="col-lg-10 hstack gap-1">
                                <a href="javascript:void(0);" class="hstack gap-2">
                                    <span>{{ $course->teacher->name ?? 'Sem formador' }}</span>
                                </a>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-2 fw-medium">Descrição</div>
                            <div class="col-lg-10 hstack gap-1">{{ $course->description ?? 'Sem descrição'}}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    @endsection
