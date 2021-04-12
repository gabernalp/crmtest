@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.crmDocument.title_singular') }}:
                {{ trans('cruds.crmDocument.fields.id') }}
                {{ $crmDocument->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('crm-document.edit', [$crmDocument])
    </div>
</div>
@endsection