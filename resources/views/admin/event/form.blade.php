
@php $title = "title"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">العنوان</label>
    <div class="col-lg-10">
        <input name="{{$title}}" value="{{Request::old($title) ? Request::old($title) : $model->title}}" type="text" class="form-control" placeholder="اكتب العنوان">
    </div>
</div>

@php $description = "description"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الوصف</label>
    <div class="col-lg-10">
        <textarea name="{{$description}}"  class="form-control summernote">{{Request::old($description) ? Request::old($description) : $model->description}}</textarea>
    </div>
</div>

@php $link = "link"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الرابط</label>
    <div class="col-lg-10">
        <input name="{{$link}}" type="text" value="{{Request::old($link) ? Request::old($link) : $model->link}}" class="form-control" placeholder="ضع رابط الزووم ">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">الأقسام<span class="text-danger">*</span></label>
    <div class="col-lg-6">
        @inject('tag','App\Models\Category')

        {!! Form::select('category_id',$tag->status()->pluck('name','id'),Request::old('category_id') ? Request::old('category_id') : $model->category_id,[
            'placeholder' => 'اختر من الأقسام',
            'class' => 'form-control form-control-select2'
        ]) !!}
    </div>
</div>


<div class="form-group row">
    <label class="col-form-label col-lg-2">المواعيد<span class="text-danger">*</span></label>
    <div class="col-lg-6">
        @inject('tag','App\Models\Appointment')

        {!! Form::select('appointment_id',$tag->status()->pluck('title','id'),Request::old('appointment_id') ? Request::old('appointment_id') : $model->appointment_id,[
            'placeholder' => 'اختر من المواعيد',
            'class' => 'form-control form-control-select2'
        ]) !!}
    </div>
</div>

@php $user = "user"; @endphp
<div class="col-lg-10">
    <input name="{{$user}}" value="{{auth()->user()->name}}" type="hidden">
</div>

@php $status = "status"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الحالة<span class="text-danger">*</span></label>
    <div class="col-lg-6">
        <select name="{{$status}}" class="form-control select-search" data-fouc data-placeholder="اختار الحاله" required>
            <option value="1" {{ isset($model) && $model->{$status} == '1' ? 'selected'  : '' }}>نشط</option>
            <option value="0" {{ isset($model) && $model->{$status} == '0' ? 'selected'  : '' }}>معلق</option>
        </select>
    </div>
</div>


<div class="form-group row">
    <label class="col-form-label col-lg-2">إختار صورة<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <input type="file" name="image" class="form-control-uniform" data-fouc>
    </div>
</div>
