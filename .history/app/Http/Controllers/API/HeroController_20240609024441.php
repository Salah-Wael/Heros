<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HeroController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function heroHome() {

        // return view('hero.home');
        return response()->json([
            'status' => 200,
        ]);

    }

    public function heroProfile($id){
        
        $hero = Hero::with('images')->find($id);

        // Check if the hero exists
        if (!$hero) {
            return response()->json([
                'status' => 404,
                'message' => 'Hero not found',
            ], 404);
        }

        // Return a JSON response with the status and hero data
        return response()->json([
            'status' => 200,
            'hero' => $hero,
        ]);
    }
    public  function editHeroProfile($id) {
        $hero = Hero::find($id);
        $auth_id = $hero->auth_id;
        if(auth()->user()->role == 'hero' && auth()->user()->id == $auth_id){

            $hero = Hero::with('images')->where('id',$id)->first();
            // return view('hero.profile-edit');
            return response()->json([
                'status' => 200,
                'hero' => $hero,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Sorry this isn't your profile page to edit it!",
            ]);
        }
    }

    public function updateHeroProfile(Request $request, $id){
        $hero = Hero::find($id);

        if ((auth()->user()->role == 'hero' && auth()->user()->id == $hero->user_id)) {
            $data = validator::make(
                $request->all(),
                [
                    'title' => 'required|string',
                    'content' => 'required|string',
                    'image' => 'image|mimes:jpeg,jpg,png,jfif,svg|max:2048',
                ],
                #errors
                [
                    'image.image' => "The file field must be an image.",
                    'image.mimes' => "The file field must be an image with extension jpeg, jpg, png, jfif, or svg.",
                ]
            );

            if ($data->fails()) {
                return response()->json([
                    'status' => 400,
                    'error' => $data->errors(),
                ]);
            }

            $validatedData = $data->validated();

            if ($news->title != $request->title || $news->content != $request->content) {
                $news->updated_at = now();
            }

            $updateData = [
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
            ];

            if ($request->hasfile('image')) {
                File::delete(public_path('assets/images/news/') . $news->image);
                $image = $request->file('image');
                $imageName = uniqid() . $image->getClientOriginalName();
                $image->move(public_path('assets/images/news'), $imageName);
                $updateData['image'] = $imageName;
                $updateData['updated_at'] = now();
            }
            DB::table('news')->where('id', $id)->update($updateData);

            $tags = $request->get('tags');
            if ($tags) {
                $news->tags()->attach($tags);
            }

            // return redirect()->route('news.show', $id)->with('success', 'News updated successfully.');
            return response()->json([
                'status' => 201,
                'message' => "News updated successfully.",
                'news-id' => $id
            ]);
        } else {
            // return view('errors.error404');
            return response()->json([
                'status' => 404,
            ]);
        }
    
    }

    public function searchAboutHeroProfile(Request $request){
        if ($request->has('search')) {
            $search = $request->get('search');

            // Define the columns to select
            $columns = [
                'id',
                'firstName',
                'lastName',
                'fullName',
                'shortName',
                'height',
                'weight',
                'sport',
                'origin_country',
                'play_country',
                'birthDate',
                'gender',
                'auth_id'
            ];

            // Initialize the query
            $query = Hero::select($columns);

            // Apply filters based on the request parameters
            if (isset($search['firstName'])) {
                $query->where('firstName', 'like', '%' . $search['firstName'] . '%');
            }
            if (isset($search['lastName'])) {
                $query->where('lastName', 'like', '%' . $search['lastName'] . '%');
            }
            if (isset($search['fullName'])) {
                $query->where('fullName', 'like', '%' . $search['fullName'] . '%');
            }
            if (isset($search['shortName'])) {
                $query->where('shortName', 'like', '%' . $search['shortName'] . '%');
            }
            if (isset($search['sport'])) {
                $query->where('sport', 'like', '%' . $search['sport'] . '%');
            }
            if (isset($search['origin_country'])) {
                $query->where('origin_country', 'like', '%' . $search['origin_country'] . '%');
            }

            // Get the results
            $hero = $query->with('images')->get();

            // Return the results (or you can return a view, JSON, etc.)
            return response()->json($hero);
            // return view('hero.index', compact('hero'));
        }

        // If no search parameters are provided, return an empty result or a message
        return response()->json(['message' => 'No search parameters provided'], 400);
    }
}
