<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCareerRequest;
use App\Http\Requests\StoreCareerRequest;
use App\Http\Requests\UpdateCareerRequest;
use App\Models\Career;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CareerController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('career_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $careers = Career::with(['media'])->get();

        return view('admin.careers.index', compact('careers'));
    }

    public function create()
    {
        abort_if(Gate::denies('career_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.careers.create');
    }

    public function store(StoreCareerRequest $request)
    {
        $career = Career::create($request->all());

        if ($request->input('vacancy_image', false)) {
            $career->addMedia(storage_path('tmp/uploads/' . basename($request->input('vacancy_image'))))->toMediaCollection('vacancy_image');
        }

        if ($request->input('vacancy_document', false)) {
            $career->addMedia(storage_path('tmp/uploads/' . basename($request->input('vacancy_document'))))->toMediaCollection('vacancy_document');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $career->id]);
        }

        return redirect()->route('admin.careers.index');
    }

    public function edit(Career $career)
    {
        abort_if(Gate::denies('career_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.careers.edit', compact('career'));
    }

    public function update(UpdateCareerRequest $request, Career $career)
    {
        $career->update($request->all());

        if ($request->input('vacancy_image', false)) {
            if (!$career->vacancy_image || $request->input('vacancy_image') !== $career->vacancy_image->file_name) {
                if ($career->vacancy_image) {
                    $career->vacancy_image->delete();
                }
                $career->addMedia(storage_path('tmp/uploads/' . basename($request->input('vacancy_image'))))->toMediaCollection('vacancy_image');
            }
        } elseif ($career->vacancy_image) {
            $career->vacancy_image->delete();
        }

        if ($request->input('vacancy_document', false)) {
            if (!$career->vacancy_document || $request->input('vacancy_document') !== $career->vacancy_document->file_name) {
                if ($career->vacancy_document) {
                    $career->vacancy_document->delete();
                }
                $career->addMedia(storage_path('tmp/uploads/' . basename($request->input('vacancy_document'))))->toMediaCollection('vacancy_document');
            }
        } elseif ($career->vacancy_document) {
            $career->vacancy_document->delete();
        }

        return redirect()->route('admin.careers.index');
    }

    public function show(Career $career)
    {
        abort_if(Gate::denies('career_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.careers.show', compact('career'));
    }

    public function destroy(Career $career)
    {
        abort_if(Gate::denies('career_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $career->delete();

        return back();
    }

    public function massDestroy(MassDestroyCareerRequest $request)
    {
        Career::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('career_create') && Gate::denies('career_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Career();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
