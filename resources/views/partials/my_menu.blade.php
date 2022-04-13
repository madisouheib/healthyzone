
<nav>
    <div class="ltn__main-menu">
        <ul>
            @foreach($items as $menu_item)
            <li class=""><a href="#">{{ $menu_item->title }}</a>
               
            </li>
            @endforeach
          
  
      
            <li class="special-link"><a  href="'whatsapp://send?abid=+966580401721&text= اشتراك">  اشترك الان </a></li>
        </ul>
    </div>
</nav>