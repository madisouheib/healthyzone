<div class="ltn__utilize-menu">
    <ul>
        @foreach($items as $menu_item)
        <li><a href="#">{{ $menu_item->title }}</a>
            <ul class="sub-menu">
                <li><a href="index.html">Home Pages 01</a></li>
                <li><a href="index-2.html">Home Pages 02</a></li>
                <li><a href="index-3.html">Home Pages 03</a></li>
                <li><a href="index-4.html">Home Pages 04</a></li>
                <li><a href="index-5.html">Home Pages 05</a></li>
            </ul>
        </li>
    @endforeach
 
      
        <li><a href="contact.html">Contact</a></li>
    </ul>
</div>