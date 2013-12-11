<?php
function spa_pagination($pages = '', $range = 2)
{
$showitems = ($range * 2)+1;

global $paged;
if(empty($paged)) $paged = 1;

if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}

if(1 != $pages)
{
echo "<div class='pagi pagi-large'><ul class='pager'>";
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>next</a></li>";
 if($paged > 1 && $showitems < $pages) echo "<li><a href='".paginate_links($paged - 1)."'>&lsaquo;</a></li>"; 

for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? "<li class='active'><a  href=#>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
}
}

if ($paged < $pages && $showitems < $pages) echo "<li><a href='".paginate_links($paged + 1)."'>&rsaquo;</a></li>"; 
if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>previous</a></li>";
echo "</ul></div>\n";
}
}

?>