<?php

namespace App\Http\Controllers;

use Flasher\Prime\FlasherInterface;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostControllerFinal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CurrentUserId = Auth::user()->id;
        $CurrentUserFirstName = Auth::user()->first_name;
        $CurrentUserLastName = Auth::user()->last_name;
        $CurrentUserEmail = Auth::user()->email;

        $posts = DB::table("post")->orderBy('id', 'desc')->get();
        // dd($posts);

        $postsInfo = DB::table('users')
            ->leftJoin('post', 'users.id', '=', 'post.id')
            ->select('first_name', 'last_name')
            ->get();
        // ->last();

        $userInfo = DB::table('users')
            ->where('id', '=', $CurrentUserId)
            ->get('first_name', 'last_name');
        // dd($userInfo);

        // return view("welcome")->with('posts', $posts)->with('postsInfo', $postsInfo);
        return view('welcome', compact('posts', 'postsInfo', 'CurrentUserFirstName', 'CurrentUserLastName', 'CurrentUserEmail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "tweet" => 'required|min:1',
        ]);

        $data = [
            "tweet" => $request->tweet,
        ];

        DB::table("post")->insert($data);
        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $CurrentUserFirstName = Auth::user()->first_name;
        $CurrentUserLastName = Auth::user()->last_name;
        $CurrentUserEmail = Auth::user()->email;

        $post = DB::table("post")->where("id", $id)->first();
        // dd($post);

        // dd($postsInfo);
        return view("single", compact('post', 'CurrentUserFirstName', 'CurrentUserLastName', 'CurrentUserEmail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPost(Request $request)
    {
        $id = $request->id;
        $data = DB::table('post')->find($id);
        // dd($data);
        return view("editPostPage", ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlasherInterface $Flasher)
    {
        $request->validate([
            "tweet" => "required"
        ]);

        $id = $request->id;

        $data = [
            "tweet" => $request->tweet,
        ];

        $result = DB::table("post")->where("id", $id)->update($data);
        if ($result) {
            $Flasher->addSuccess("Update successfully");
        }
        return redirect()->back();
    }

    public function profile($id)
    {
        $post = DB::table("post")->where("id", $id)->first();
        return view("profile", compact("post"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, FlasherInterface $Flasher)
    {
        DB::table("post")->where("id", $id)->delete();
        $Flasher->addSuccess("Post has been deleted successfully");
        return redirect()->back();

    }
}
