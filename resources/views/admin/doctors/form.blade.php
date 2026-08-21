@extends('admin.layouts.app')
@section('title',($doctor->exists?'Edit':'Add').' doctor | Maruti Hospital Admin') @section('page-title','Doctors') @section('breadcrumb','Maruti Hospital Admin | Doctors')
@section('content')
<div class="page-head"><div><h2>{{ $doctor->exists ? 'Edit doctor' : 'Add doctor' }}</h2><p>Only visible profiles appear on the public website.</p></div><a class="button button-muted" href="{{ route('admin.doctors.index') }}">Back</a></div>
<form class="panel" method="post" enctype="multipart/form-data" action="{{ $doctor->exists ? route('admin.doctors.update',$doctor) : route('admin.doctors.store') }}">@csrf @if($doctor->exists) @method('PUT') @endif
<div class="detail-grid">@foreach(['name'=>'Full name','designation'=>'Designation','department'=>'Department','experience'=>'Experience','qualification'=>'Qualification','sort_order'=>'Display order'] as $field=>$label)<div class="detail-item"><label>{{ $label }}</label><input class="form-control" style="width:100%" name="{{ $field }}" value="{{ old($field,$doctor->$field) }}" {{ in_array($field,['name','designation','department'])?'required':'' }}></div>@endforeach</div>
<div class="detail-item"><label>Profile photo</label><input type="file" name="photo" accept="image/png,image/jpeg,image/webp"></div><label><input type="checkbox" name="is_active" value="1" @checked(old('is_active',$doctor->is_active ?? true))> Show on website</label><div style="margin-top:18px"><button class="button">Save doctor</button></div></form>
@endsection
