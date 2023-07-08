<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequestForm;
use App\Models\Banner;
use App\Models\Image;
use domain\Facades\BannerFacade;

class BannerController extends ParentController
{
    public function index()
    {
        $response['banners'] = BannerFacade::all();
        return view('pages.banner.index')->with($response);
    }

    public function store(BannerRequestForm $request)
    {
        $validatedData = $request->validated();
        $banner = new Banner();

        $banner = $banner->create([
            'title' => $validatedData['title'],
        ]);


        if ($banner->id) {
            $imageLocation = new Image;
            if ($request->hasFile('image')) {
                $uploadPath = 'uploads/posts/image/';

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();

                $filename = time() . '.' . $ext;
                $file->move($uploadPath, $filename);
                $imageLocation->image = $uploadPath . $filename;
                $imageLocation->create([
                    'name' => $imageLocation,
                ]);
            }
        }

        return redirect()->back()->with('message', 'Banner List Created Successfully');
    }

    public function status($banner)
    {
        BannerFacade::status($banner);
        return redirect()->back()->with('message', 'Banner List has been Updated');
    }

    public function delete(int $banner_id)
    {
        BannerFacade::delete($banner_id);
        return redirect()->back()->with('message', 'Banner List Deleted');
    }
}
