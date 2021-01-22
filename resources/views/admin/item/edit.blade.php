php
$title = '商品編集';
@endphp
@extends('layouts.admin')

@section('content')
<section>
  <form action="{{ route('admin.item.update', ['id' => $item->id]) }}" method="post">
    @csrf
    <button> class="btn btn-primary">{{ __('Update') }}</button>
      <a href="{{ route('admin.item.index') }}" class="btn btn-outline-primary">{{ __('Back') }}</a>
    </div>
  </form>
</section>
@endsection