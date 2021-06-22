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
@php $inputKeywords = "meta_keyword"; @endphp
<!-- Inside form group with addon -->
<div class="form-group row">

    <label class="col-form-label col-lg-2">كلمات تعريفية<span class="text-danger">*</span></label>
    <div class="col-lg-10">

        <input type="text" name="{{$inputKeywords}}" class="form-control" value=" {{Request::old($inputKeywords) ? Request::old($inputKeywords) : $model->$inputKeywords}}" >
    </div>
</div> <!-- /inside form group with addon -->


@php $meta_description = "meta_description"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الوصف</label>
    <div class="col-lg-10">
        <textarea name="{{$meta_description}}"  class="form-control summernote">{{Request::old($meta_description) ? Request::old($meta_description) : $model->meta_description}}</textarea>
    </div>
</div>

@php $facebook = "facebook"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الفيسبوك</label>
    <div class="col-lg-10">
        <input name="{{$facebook}}" value="{{Request::old($facebook) ? Request::old($facebook) : $model->facebook}}" type="text" class="form-control" placeholder="ضع اسم المستخدم الخاص بك على الفيسبوك">
    </div>
</div>

@php $whatsApp = "whatsApp"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الواتساب</label>
    <div class="col-lg-10">
        <input name="{{$whatsApp}}" value="{{Request::old($whatsApp) ? Request::old($whatsApp) : $model->whatsApp}}" type="text" class="form-control" placeholder="ضع رقم الواتساب الخاص بك">
    </div>
</div>


@php $phone = "phone"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الهاتف</label>
    <div class="col-lg-10">
        <input name="{{$phone}}" value="{{Request::old($phone) ? Request::old($phone) : $model->phone}}" type="text" class="form-control" placeholder="ضع رقمك">
    </div>
</div>


@php $email = "email"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">البريد الإلكتروني</label>
    <div class="col-lg-10">
        <input name="{{$email}}" value="{{Request::old($email) ? Request::old($email) : $model->email}}" type="text" class="form-control" placeholder="اكتب البريد الإلكتروني">
    </div>
</div>


@php $location = "location"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الموبايل</label>
    <div class="col-lg-10">
        <input name="{{$location}}" value="{{Request::old($location) ? Request::old($location) : $model->location}}" type="text" class="form-control" placeholder="اكتب عنوانك/عنوان دارك">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">إختار صورة<span class="text-danger">*</span></label>
    <div class="col-lg-10">
        <input type="file" name="image" class="form-control-uniform" data-fouc>
    </div>
</div>
