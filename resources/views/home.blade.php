@extends('layouts.master') @section('content')
<div id="main-content">
    <div class="main-content-head">
        <div class="main-content-head__left">
            <h3 class="main-content-head__left-title">All Tasks</h3>
            <span class="main-content-head__left-number">(0)</span>
        </div>
        <div class="main-content-head__right">
            <button type="button" class="btn btn-primary main-content-head__right--btn-add">
                <i class="fas fa-plus main-content-head__right--btn-add-icon"></i> New Task
            </button>
            <button type="button" class="btn btn-primary main-content-head__right--btn-add-mobile">
                <i class="fas fa-plus main-content-head__right--btn-add-icon"></i>
            </button>
        </div>
    </div>
    <div class="main-content-body">
        <div class="row">
            <div class="l-4 m-6 c-12">
                <div class="task-item">
                    <div class="task-head">
                        <div class="task-title">
                            <p>test</p>
                        </div>
                        <i class="fas fa-trash-alt task-icon-delete"></i>
                    </div>
                    <div class="task-body">
                        <p class="task-description">Test description</p>
                    </div>
                    <div class="task-action">
                        <div class="task-date">
                            <p><i class="fas fa-clock task-date-icon"></i> 24/5/2010</p>
                        </div>
                        <div class="task-improtance">
                            <i class="fas fa-flag task-improtance-icon red"></i>
                        </div>
                        <div class="task-complete">
                            <i class="far fa-clipboard task-complete-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-4 m-6 c-12">
                <div class="task-item">
                    <div class="task-head">
                        <div class="task-title">
                            <p>test</p>
                        </div>
                        <i class="fas fa-trash-alt task-icon-delete"></i>
                    </div>
                    <div class="task-body">
                        <p class="task-description">Test description</p>
                    </div>
                    <div class="task-action">
                        <div class="task-date">
                            <p><i class="fas fa-clock task-date-icon"></i> 24/5/2010</p>
                        </div>
                        <div class="task-improtance">
                            <i class="fas fa-flag task-improtance-icon green"></i>
                        </div>
                        <div class="task-complete">
                            <i class="fas fa-clipboard task-complete-icon gray"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-4 m-6 c-12">
                <div class="task-item">
                    <div class="task-head">
                        <div class="task-title">
                            <p>test</p>
                        </div>
                        <i class="fas fa-trash-alt task-icon-delete"></i>
                    </div>
                    <div class="task-body">
                        <p class="task-description">Test description</p>
                    </div>
                    <div class="task-action">
                        <div class="task-date">
                            <p><i class="fas fa-clock task-date-icon"></i> 24/5/2010</p>
                        </div>
                        <div class="task-improtance">
                            <i class="fas fa-flag task-improtance-icon orange"></i>
                        </div>
                        <div class="task-complete">
                            <i class="fas fa-clipboard task-complete-icon gray"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-4 m-6 c-12">
                <div class="task-item">
                    <div class="task-head">
                        <div class="task-title">
                            <p>test</p>
                        </div>
                        <i class="fas fa-trash-alt task-icon-delete"></i>
                    </div>
                    <div class="task-body">
                        <p class="task-description">Test description</p>
                    </div>
                    <div class="task-action">
                        <div class="task-date">
                            <p><i class="fas fa-clock task-date-icon"></i> 24/5/2010</p>
                        </div>
                        <div class="task-improtance">
                            <i class="fas fa-flag task-improtance-icon red"></i>
                        </div>
                        <div class="task-complete">
                            <i class="far fa-clipboard task-complete-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection