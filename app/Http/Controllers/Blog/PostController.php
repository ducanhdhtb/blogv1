<?php

namespace App\Http\Controllers\Blog;
use App\Category;
use App\Post;

use App\Http\Controllers\Controller as FrontendController;
use Illuminate\Http\Request;

class PostController extends FrontendController
{
	#return view list post
	public function listAction()
	{
		$post = Post::all();
		return view('blog.post.list',compact('post'));
	}
	#return view add blog
	public function newAction()
	{
		$post = Post::all();
		$category = Category::all();
		return view('blog.post.new',compact('post','category'));
	}
	#take data from form add
	public function newActionPost(Request $request)
	{
		$post = new Post();
		$post->title = $request->title;
		$post->category_id = $request->category;
		$post->summary = $request->summary;
		$post->content = $request->content;
		$post->save();
		return redirect()->back()->with('status','Post was create successfully!');

	}
	#return view edit form
	public function editAction($id)
	{
		$select_post = Post::find($id);
		return view('blog.post.edit', compact('select_post'));
	}
	#take data from edit form
	public function editActionPost(Request $request, $id)
	{
		$sel_post = Post::find($id);
		$sel_post->title = $request->title;
		$sel_post->summary = $request->summary;
		$sel_post->content = $request->content;
		$sel_post->category_id = $request->category_id;
		$sel_post->save();
		return redirect()->back()->with('flash5','Update data successfully!');
	}
	#delete a post
	public function deleteAction($id)
	{
		$select_post = Post::find($id);
		$select_post->delete($id);
		return redirect()->back()->with('flash4','Delete complete!');
	}

}

?>