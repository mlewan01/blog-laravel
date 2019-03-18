<?php
//symlink('/home/artemlux/blog-laravel/storage/app/public', '/home/artemlux/blog-laravel/public_html/storage');

//$linkfile = '/home/nelhae01/domains/artemlux.com/public_html/bloglaravel/storage';

//if(file_exists($linkfile)) {
//    if(is_link($linkfile)) {
//        unlink($linkfile);
//    } else {
//        exit("$linkfile exists but not symbolic link\n");
//    }
//}else {
//	exit("file does not exist...");
//}

symlink('/home/nelhae01/domains/artemlux.com/bloglaravel/storage/app/public', '/home/nelhae01/domains/artemlux.com/public_html/bloglaravel/storage');

//symlink('/home/nelhae01/domains/artemlux.com/bloglaravel/storage/app/public', $linkfile);
//echo getcwd();
