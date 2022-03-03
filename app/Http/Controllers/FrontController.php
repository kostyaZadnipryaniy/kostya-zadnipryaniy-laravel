<?php

namespace App\Http\Controllers;

use App\Client;
use App\Project;
use App\ProjectStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\MyFormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
   
    public function index(Request $request)
    {
        if ($request->has('parameter')) {
            $parameter = $request->get('parameter');
        }

        $projects = Project::all();
        $clients  = Client::all();

        //
        $data = [];

        return view('front.blade.php', $data);
    }
    
    public function formaAjax(MyFormRequest $formRequest)
    {
        $result = ['success' => false, 'data' => ''];
        $fields = $formRequest->validated();

        $id = $fields['id'];
        $project = Project::where('id','=', $id)->first();

        if (!empty($project)) {
            $result['success'] = true;
            $result['data'] = $project;
        }

        return json_encode($result);
    }

    public function create()
    {

        $clients = Client::all()->pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $statuses = ProjectStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.projects.create', compact('clients', 'statuses'));
    }

    
    public function edit(Project $project)
    {
        abort_if(Gate::denies('project_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = Client::all()->pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $statuses = ProjectStatus::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $project->load('client', 'status');

        return view('admin.projects.edit', compact('clients', 'statuses', 'project'));
    }

    
    public function show(Project $project)
    {
        abort_if(Gate::denies('project_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project->load('client', 'status');

        return view('admin.projects.show', compact('project'));
    }

    public function destroy(Project $project)
    {
        abort_if(Gate::denies('project_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project->delete();

        return back();
    }

}