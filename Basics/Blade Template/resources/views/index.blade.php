@include('test')

Id = {{ $age = null }}

{{-- if and else --}}
@if ($age == 1)
    <h2>Hello World</h2>
@else
    <h2>null</h2>
@endif


{{-- isset and empty --}}
@isset($age)
    <h2>age is {{ $age }}</h2>
@endisset

@empty($age)
    <h2>age is empty</h2>
@endempty


@php
    $users = ['user1', 'user2', 'user3'];
@endphp

{{-- Foreach loop --}}
@foreach ($users as $user)
    <p>
        User name : {{ strtoupper($user) }}
    </p>
@endforeach
