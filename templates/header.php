<?php
function uriIn($value){
    return $_SERVER["REQUEST_URI"] === $value;
}
?>

<section class="flex justify-between py-4 px-8 bg-gray-300">
        <div class="bolder text-3xl font-bold">NovaCraft</div>
        <ul class="flex items-center gap-7 text-2xl">
            <li><a href="/" class="<?php if(uriIn("/views/home")) echo "text-amber-800" ?>">Home</a></li>
            <li><a href="/services" class="<?php if(uriIn("/views/services")) echo "text-amber-800" ?>">Services</a></li>
            <li><a href="/about" class="<?php if(uriIn("/views/about")) echo "text-amber-800" ?>">About</a></li>
            <li><a href="/contact" class="<?php if(uriIn("/views/contact")) echo "text-amber-800" ?>">Contact</a></li>
    </ul>
</section>
