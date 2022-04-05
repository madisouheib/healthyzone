
<nav>
    <div class="ltn__main-menu">
        <ul>
            @foreach($items as $menu_item)
            <li class=""><a href="#">{{ $menu_item->title }}</a>
                <ul class="sub-menu ltn__sub-menu-col-2---">
                    <li><a href="">//</a></li>
   
                </ul>
            </li>
            @endforeach
          
  
      
            <li class="special-link"><a href="/"> احجز الآن ! </a></li>
        </ul>
    </div>
</nav>