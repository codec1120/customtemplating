<!-- This is an example component -->
@inject('Navigation', 'App\Helpers\Navigation')
<div class="min-h-screen bg-white">
    <nav class="h-screen flex flex-col w-96">
        <div class="p-2 flex items-center border-t-2 border-gray-300 space-x-4">
            <div class="relative inline-flex">
                <span class="inline-flex bg-red-500 w-2 h-2 absolute right-0 bottom-0 rounded-full ring-2 ring-white transform translate-x-1/3 translate-y-1/3"></span>
                <img class='w-8 h-8 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200' />
            </div>
            <div>
                <h3 class="font-semibold tracking-wide text-gray-800">
                    {{Auth()->user() ? Auth()->user()->name : __('Admin')}}
                </h3>
            </div>
        </div>
        @if (false)
            <ul class="p-24 space-y-2 flex-1 overflow-auto" style="scrollbar-width: thin;">
            @foreach (
                $Navigation->parentMenu as $parentMenuItem
            )
            <!-- Menu Title -->
            <li>
                    @if ( $parentMenuItem['icon'] )
                        {{!!$parentMenuItem['icon']!!}} 
                    @endif
                <div class="mb-3 pt-6">
                    <span class=" text-black font-medium">{{$parentMenuItem['label']}}</span>
                </div>
                <!-- Menu Items -->
                <ul class="space-y-4 flex-1 overflow-auto" id="parent-menu-ul">
                @foreach (
                    $Navigation->childMenu as $menuItem
                )   
                    @if ( $menuItem['parent_slug'] == $parentMenuItem['slug'] && $menuItem['visible'] )
                    <li>
                        <a href="javascript:;" id="menu-item-{{$menuItem['slug']}}" 
                            class="text-sm flex space-x-4 items-center py-2 text-gray-500 transition duration-500 hover:text-opacity-25">
                            @if ( $menuItem['icon'] )
                                {{!!$menuItem['icon']!!}} 
                            @endif
                                <span id="menu-item-label-{{$menuItem['slug']}}">{{ $menuItem['label'] }}</span>
                        </a>
                    </li>
                    @endif
                @endforeach  
                </ul>
            </li>
            @endforeach
            </ul>
        @else
        <ul class="p-24 space-y-4 flex-1 overflow-auto" id="parent-menu-ul">
            @foreach (
                $Navigation->childMenu as $menuItem
            )   
                @if ($menuItem['visible'])
                    <li>
                        <a href="javascript:;" id="menu-item-{{$menuItem['slug']}}" 
                            class="text-sm flex space-x-4 items-center py-2 text-gray-500 transition duration-500 hover:text-opacity-25">
                            @if ( $menuItem['icon'] )
                                {{!!$menuItem['icon']!!}} 
                            @endif
                                <span id="menu-item-label-{{$menuItem['slug']}}">{{ $menuItem['label'] }}</span>
                        </a>
                    </li>
                @endif
            @endforeach  
        </ul>
        @endif
    </nav>
</div>