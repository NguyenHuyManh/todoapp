@extends('layouts.master') @section('content')
<div id="main-content">
    <div class="modal">
        <div class="modal-overlay"></div>
        <div class="modal-add-task">
            <div class="modal-close">
                <i class="fas fa-times modal-close-icon"></i>
            </div>
            <form action="{{ route('task.store') }}" method="post" class="modal-add-task__form">
                @csrf
                <div class="form-group">
                    <h3>Title</h3>
                    <input type="text" class="form-input title-input" name="title" placeholder="What need be done?">
                    <div class="show-error--title"></div>
                </div>
                <div class="form-group">
                    <h3>Description</h3>
                    <textarea class="form-input description-input" name="description" id="" cols="30" rows="3"
                        placeholder="Description about this task"></textarea>
                    <div class="show-error--description"></div>
                </div>
                <div class="form-group">
                    <h3>Date Picker</h3>
                    <input type="text" class="form-input date-time-input" id="date-time" name="date_time">
                    <div class="show-error--date-time"></div>
                </div>
                <div class="form-group">
                    <h3>Important</h3>
                    <select class="form-input select-important" name="important">
                        <option value="1">Low</option>
                        <option value="2">Medium</option>
                        <option value="3">Hight</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-add-task">Add New Task</button>
                </div>
            </form>
        </div>
    </div>

    <div class="main-content-head">
        <div class="main-content-head__left">
            <h3 class="main-content-head__left-title">{{ $titlePage }}</h3>
            <span class="main-content-head__left-number">({{ $data->count() }})</span>
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
            @foreach ($data as $item)
            <div class="l-4 m-6 c-12">
                <div class="task-item">
                    <div class="task-head">
                        <div class="task-title">
                            <p>{{ $item->title }}</p>
                        </div>
                        <a href="{{ route('task.destroy', $item->id) }}" class="delete-task"><i
                                class="fas fa-trash-alt task-icon-delete"></i></a>
                    </div>
                    <div class="task-body">
                        <p class="task-description">{{ $item->description }}</p>
                    </div>
                    <div class="task-action">
                        <div class="task-date">
                            <p><i class="fas fa-clock task-date-icon"></i>
                                {{ date('d/m/Y', strtotime($item->date_time)) }}</p>
                        </div>
                        <div class="task-improtance">
                            @if ($item->importance == 1)
                            <i class="fas fa-flag task-improtance-icon green "></i>
                            @elseif($item->importance == 2)
                            <i class="fas fa-flag task-improtance-icon orange "></i>
                            @else()
                            <i class="fas fa-flag task-improtance-icon red "></i>
                            @endif
                        </div>
                        <div class="task-complete">
                            @if ($item->status == 2)
                            <i class="fas fa-clipboard task-complete-icon change-status gray" data-id="{{ $item->id }}"
                                data-status="2"></i>
                            @else
                            <i class="far fa-clipboard task-complete-icon change-status" data-id="{{ $item->id }}"
                                data-status="1"></i>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection