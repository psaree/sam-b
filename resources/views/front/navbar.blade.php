<li class="Active">
    <a href="/" title="">Home</a>
    </li>
    @if(count($ParentMenu)>0)
        @foreach ($ParentMenu as $menu)
        <li class="">
            <a href="{{ $menu->id }}" title="">
            {{ $menu->name }}
         </a>
         </li>
         @endforeach
    @endif        