
        <form action="{{ route('auth-user') }}" method="POST" class="">
            @csrf
            <div class="mb-4">
                <label for="email" class="block ">Email address</label>
                <input type="email"
                    class="form-input mt-1 block w-full  rounded-md bg-black border-[1px] border-white p-2" id="email"
                    name="email" required>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block ">Password</label>
                <input type="password"
                    class="form-input mt-1 block w-full  rounded-md bg-black border-[1px] border-white p-2" id="password"
                    name="password" required>
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 rounded">
                Login
            </button>
            <span>If you don't have an account <a href="/register" class="underline">Register</a></span>
        </form>
  

