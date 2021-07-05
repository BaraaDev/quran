@php $name = "name"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">اسم المستخدم</label>
    <div class="col-lg-10">
        <input name="{{$name}}" value="{{Request::old($name) ? Request::old($name) : $model->name}}" type="text" class="form-control" placeholder="اكتب اسم المستخدم">
    </div>
</div>



@php $email = "email"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">البريد الإلكتروني</label>
    <div class="col-lg-10">
        <input name="{{$email}}" value="{{Request::old($email) ? Request::old($email) : $model->email}}" type="email" class="form-control" placeholder="اكتب البريد الإلكتروني">
    </div>
</div>


@php $phone = "phone"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الهاتف</label>
    <div class="col-lg-10">
        <input name="{{$phone}}" value="{{Request::old($phone) ? Request::old($phone) : $model->phone}}" type="text" class="form-control" placeholder="اكتب رقم الهاتف">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">كلمة السر</label>
    <div class="col-lg-10">
        <input name="password" type="password" value="{{ old('password') }}" class="form-control" placeholder="اكتب كلمة السر">
    </div>
</div>


<div class="form-group row">
    <label class="col-form-label col-lg-2">اعادة كلمة السر</label>
    <div class="col-lg-10">
        <input name="password_confirmation" type="password" value="{{ old('password') }}" class="form-control" placeholder="اكتب اعادة كلمة السر">
    </div>
</div>


@php $is_admin = "is_admin"; @endphp
<div class="form-group row">
    <label class="col-form-label col-lg-2">الحالة<span class="text-danger">*</span></label>
    <div class="col-lg-6">
        <select name="{{$is_admin}}" class="form-control select-search" data-fouc data-placeholder="اختار مشرف" required>
            <option></option>
            <option value="user" {{ isset($model) && $model->{$is_admin} == 'user' ? 'selected'  : '' }}>مستخدم</option>
            <option value="admin" {{ isset($model) && $model->{$is_admin} == 'admin' ? 'selected'  : '' }}>مدير</option>
        </select>
    </div>
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
