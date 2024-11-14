<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Maincontent</title>
    <style>
      body {
          background-color: #f3f4f6;
      }

      .hover-custom:hover {
          box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
          transform: translateY(-2px);
      }

      .container {
          max-width: 600px;
          margin: auto;
          background: white;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      h1.todo {
          text-align: center;
          color: #333;
      }
      .task-list {
          list-style: none;
          padding: 0;
      }
      .task-item {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 10px 15px;
          border-bottom: 1px solid #ddd;
      }
      .task-item:last-child {
          border-bottom: none;
      }
      .task-item.completed .title {
          text-decoration: line-through;
          color: #888;
      }
      .task-actions {
          display: flex;
          gap: 10px;
      }
      button {
          border: none;
          background: #007BFF;
          color: white;
          padding: 5px 10px;
          border-radius: 4px;
          cursor: pointer;
      }
      button.delete {
          background: #DC3545;
      }
      button:hover {
          opacity: 0.9;
      }
      form input[type="text"] {
          width: calc(100% - 90px);
          padding: 8px;
          margin-right: 10px;
      }
  </style>
</head>
<body class="h-full">
<div class="min-h-full">
  <nav class="bg-gray-800" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="h-8 w-8 rounded-full" src="images/Logo.jpeg" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="/" class="{{ request() -> is('/') ? 'bg-gray-900 text-white' :  'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Content</a>
              <a href="/contact" class="{{ request() -> is('contact') ? 'bg-gray-900 text-white' :  'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact Person</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
            </button>

            <div class="relative ml-3">
              <div>
                <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-10 w-10 rounded-full" src="images/profil.jpg" alt="profil">                </button>
              </div>

              <div 
              x-show="isOpen"
              x-transition:enter="transition ease-out duration-100 transform"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75 transform"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <a href="/about" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="/home" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <a href="/" class="{{ request() -> is('/') ? 'bg-gray-900 text-white' :  'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Content</a>
        <a href="/contact" class="{{ request() -> is('contact') ? 'bg-gray-900 text-white' :  'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact Person</a>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="h-10 w-10 rounded-full" src="images/profil.jpg" alt="profil">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Mars_Sama</div>
            <div class="text-sm font-medium text-gray-400">hyoudouissei2510@gmail.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="/about" class="block px-4 py-2 text-sm text-white hover-custom" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
          <a href="/home" class="block px-4 py-2 text-sm text-white hover-custom" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
        </div>
      </div>
    </div>
  </nav>
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Main</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="container">
          <h1 class="todo">To-Do List</h1>
          <form action="/tasks" method="POST">
              @csrf
              <input type="text" name="title" placeholder="Add a new task" required>
              <input type="image" src="images/add.png" alt="submit" width="25" height="25">
          </form>
          <ul class="task-list">
              @foreach($tasks as $task)
                  <li class="task-item {{ $task->completed ? 'completed' : '' }}">
                      <span class="title">{{ $task->title }}</span>
                      <div class="task-actions">
                          <form action="/tasks/{{ $task->id }}" method="POST" style="display: inline;">
                              @csrf
                              @method('PATCH')
                              <input type="image" src="images/Ceklist.png" alt="submit" width="30" height="25" {{$task->completed ? 'Undo' : '' }}>
                          </form>
                          <form action="/tasks/{{ $task->id }}" method="POST" style="display: inline;">
                              @csrf
                              @method('DELETE')
                              <input type="image" src="images/sampah.png" alt="Submit" width="25" height="25">
                          </form>
                      </div>
                  </li>
              @endforeach
          </ul>
      </div>
      </div>
    </main>
  </div>
</body>
</html>