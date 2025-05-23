
<?php
$posts=get_post();
?>  

<div class="text-center">
   <h1 class="text-[40px] font-[600] inline">The Eya Blog</h1><br>
   <span>Blog About New Products</span>
</div>

<div class="mt-[50px] flex justify-bstart  flex-wrap gap-6">

<?php
foreach ($posts as $post) {
?>
   <div>
      <div>
         <img class="md:w-[30vw] h-[250px] object-cover w-full" src="admin/upload/<?=$post->image?>" alt="essie">
      </div>
      <div>
         <h1 class="text-[17px] font-[600] md:w-[30vw] "><?=$post->title?></h1>
          <h2 class="mb-[10px]" style="color: rgba(0, 0, 0, 0.37);">
            <?= date("d/m/Y  H:i" , strtotime($post->date)); ?> by <?=$post->names?>
          </h2>
         <div class="md:w-[30vw]">
           <?=substr(nl2br($post->content),0,300)?>...
         </div>
         <a href="?page=post&id=<?=$post->id?>" class="text-blue-800">read more <svg class="w-6 inline h-6 text-blue-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
            </svg>
         </a>
      </div>
   </div>
      <?php
}
?>

</div>
