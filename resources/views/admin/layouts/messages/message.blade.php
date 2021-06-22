@if(session('message') ?? '' )
    @include('admin.layouts.alert.success')
@elseif(session('delete') ?? '' )
    @include('admin.layouts.alert.danger')
@elseif(session('error') ?? '' )
    @include('admin.layouts.alert.error')
@endif
