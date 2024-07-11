
@if (session()->has('success'))
<div class="text-center bg-green-500">
{{ session('success') }}
</div>
@endif