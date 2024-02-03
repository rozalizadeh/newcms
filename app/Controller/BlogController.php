<?php

namespace App\Controller;

use App\Model\Blog;

class BlogController extends BaseDashboardController
{
  public function show()
  {
    $blogs = Blog::all();

    return view('blogs.list', ['blogs' => $blogs]);
  }


  public function create()
  {

    return view('blogs.create');
  }
  public function storeCreate()
  {
    $blog = new Blog();
    $blog->name = $_POST['name'];
    $blog->category = $_POST['category'];
    $blog->content = $_POST['content'];

    $blog->save();

    $_SESSION['success'] = 'blog created! ';

    return redirect("/dashboard/blogs");
  }





}