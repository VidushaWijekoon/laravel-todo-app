<?php

namespace domain\Services;

use App\Models\Banner;
use infractructure\Facades\ImagesFacades;

class BannerService
{
    protected $banner;

    public function __construct()
    {
        $this->banner = new Banner();
    }

    public function all()
    {
        return  $this->banner->all();
    }
    public function store($data)
    {
        if (isset($data['images'])) {
            $image = ImagesFacades::store();
            $data['image_id'] = $image['created_images']->id;
        }
        $this->banner->create($data);
    }

    public function done($banner_id)
    {
        $banner = $this->banner->findOrFail($banner_id);
        $banner->done = 1;
        $banner->update();
    }

    public function delete($banner_id)
    {
        $banner = $this->banner->findOrFail($banner_id);
        $banner->delete();
    }
}