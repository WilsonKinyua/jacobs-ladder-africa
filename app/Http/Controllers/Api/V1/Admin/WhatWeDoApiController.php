<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreWhatWeDoRequest;
use App\Http\Requests\UpdateWhatWeDoRequest;
use App\Http\Resources\Admin\WhatWeDoResource;
use App\Models\WhatWeDo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WhatWeDoApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('what_we_do_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WhatWeDoResource(WhatWeDo::all());
    }

    public function store(StoreWhatWeDoRequest $request)
    {
        $whatWeDo = WhatWeDo::create($request->all());

        if ($request->input('top_header_image', false)) {
            $whatWeDo->addMedia(storage_path('tmp/uploads/' . basename($request->input('top_header_image'))))->toMediaCollection('top_header_image');
        }

        if ($request->input('content_photo', false)) {
            $whatWeDo->addMedia(storage_path('tmp/uploads/' . basename($request->input('content_photo'))))->toMediaCollection('content_photo');
        }

        return (new WhatWeDoResource($whatWeDo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(WhatWeDo $whatWeDo)
    {
        abort_if(Gate::denies('what_we_do_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WhatWeDoResource($whatWeDo);
    }

    public function update(UpdateWhatWeDoRequest $request, WhatWeDo $whatWeDo)
    {
        $whatWeDo->update($request->all());

        if ($request->input('top_header_image', false)) {
            if (!$whatWeDo->top_header_image || $request->input('top_header_image') !== $whatWeDo->top_header_image->file_name) {
                if ($whatWeDo->top_header_image) {
                    $whatWeDo->top_header_image->delete();
                }
                $whatWeDo->addMedia(storage_path('tmp/uploads/' . basename($request->input('top_header_image'))))->toMediaCollection('top_header_image');
            }
        } elseif ($whatWeDo->top_header_image) {
            $whatWeDo->top_header_image->delete();
        }

        if ($request->input('content_photo', false)) {
            if (!$whatWeDo->content_photo || $request->input('content_photo') !== $whatWeDo->content_photo->file_name) {
                if ($whatWeDo->content_photo) {
                    $whatWeDo->content_photo->delete();
                }
                $whatWeDo->addMedia(storage_path('tmp/uploads/' . basename($request->input('content_photo'))))->toMediaCollection('content_photo');
            }
        } elseif ($whatWeDo->content_photo) {
            $whatWeDo->content_photo->delete();
        }

        return (new WhatWeDoResource($whatWeDo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(WhatWeDo $whatWeDo)
    {
        abort_if(Gate::denies('what_we_do_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatWeDo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
