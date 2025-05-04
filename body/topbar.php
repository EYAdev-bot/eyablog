<header>

   <nav class=" mt-[50px] flex justify-between items-center">

      <span class="text-[30px]  font-[600] w-[150px]">Eya</span>

      <ul class="md:flex-row  md:flex md:flex hidden gap-8">
         <li class="<?php echo ($page == "home ") ? "font-[700]"  : '' ?>"><a href="index.php?page=home">Home</a></li>
         <li class="<?php echo ($page == "blog") ? "font-[700]"  : '' ?>"><a href="index.php?page=blog">Blog</a></li>
         <li class="<?php echo ($page == "contact") ? "font-[700]"  : '' ?>"><a href="?page=contact">Contact</a></li>
      </ul>

      <div class="nav-list hidden duration-500 md:hidden md:top-[0px]  md:block absolute top-[100px] bg-[#efefef] w-full p-4 md:p-[0px] shadow-2xs">
         <ul class="md:flex-row  md:flex  flex-col flex gap-8">
            <li class="border-b-1 border-solid <?php echo ($page == "home") ? "font-[700]"  : '' ?>"><a href="?page=home">Home</a></li>
            <li class="border-b-1 border-solid <?php echo ($page == "blog") ? "font-[700]"  : '' ?>"><a href="?page=blog">Blog</a></li>
            <li class="border-b-1 border-solid <?php echo ($page == "contact") ? "font-[700]"  : '' ?>"><a href="?page=contact">Contact</a></li>
         </ul>
      </div>

      <input class="rounded-full w-[30vw] md:w-[18vw]" type="search" name="" id="search" placeholder="search articles">

      <ion-icon class="md:hidden text-[30px] cursor-pointer" onclick="onToggleMenu(this)" name="menu-outline"></ion-icon>

   </nav>
</header>