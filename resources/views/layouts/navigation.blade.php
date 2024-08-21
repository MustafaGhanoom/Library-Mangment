
<style>
 .flexALL
  {
  display: flex;
   align-items: center;
  justify-content:space-between;
  margin-left:90px;
  margin-right:80px;
  }
  .flexlogobuton
  {
    display: flex;
   align-items: center;
  justify-content:flex-start;
  gap:80px;

  }
  .linav{
    display: flex;
    gap: 50px;

  }
  .linav a{
    border-radius:12px;
    padding:8px;
    border: 2px solid black;
    background-color: rgb(67, 67, 246);
    color:white;
  }

    .linav a:hover{
        background-color: rgb(68, 68, 72);
    }
</style>

<nav class="bg-white mb-1">

    <div class="flexALL">
        <div class="flexlogobuton">
            <div class="flex items-center">
                <img src="./images/logo.png" alt="" width="60" height="20">
            </div>

            @if(auth()->check() && auth()->user()->role === 'Member')
            <ul class="linav">
                <li><a href="/Library">All Book</a></li>
                <li><a href="/Available-books">Available Books</a></li>
            </ul>
        @endif
        </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <ul class="mr-5">
                <p></p>
                <p style="margin-right: 15px"></p>
                <x-dropdown>
                    <x-slot name="trigger">

                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                 <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                    </form>
                </x-slot>

            </x-dropdown>
        </div>
</div>

</nav>
