<form action={{ route('logout')}} method="POST">
    @csrf
    <button type="submit" class="text-white px-4 py-2 rounded-md bg-blue-500 hover:bg-blue-600">Logout</button>
</form>