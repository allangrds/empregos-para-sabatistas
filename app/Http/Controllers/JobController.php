<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('text')->get();
        $contractTypes = array(
            array(
                'text' => 'CLT período completo',
                'name' => 'clt_full'
            ),
            array(
                'text' => 'CLT meio período',
                'name' => 'clt_part'
            ),
            array(
                'text' => 'PJ',
                'name' => 'pj'
            ),
        );

        return view('publish_jobs', [
            'categories' => $categories->toArray(),
            'contractTypes' => $contractTypes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {
        $formValues = $request->all();

        /* When there isn't any information about salary */
        if (
            !$formValues['salary'] &&
            !$formValues['initial_salary'] &&
            !$formValues['final_salary']
        ) {
            $messages = [
                'salary' => 'Esse campo é obrigatório',
            ];

            return Redirect::back()->withErrors($messages)->withInput();
        }

        /* When there isn't information about initial_salary or final_salary */
        if (
            (!$formValues['initial_salary'] || !$formValues['final_salary']) &&
            !$formValues['salary']
        ) {
            $messages = [
                'initial_salary' => 'Esse campo é obrigatório',
                'final_salary' => 'Esse campo é obrigatório',
            ];

            return back()->withErrors($messages)->withInput();
        }

        try {
            $jobName = strtolower(str_replace(' ', '-', $formValues['job_name']));
            $companyName = strtolower(str_replace(' ', '-', $formValues['company_name']));
            $uuid = substr(Str::uuid(), 0, 17);
            $slug = "$jobName-$companyName-$uuid";

            Job::create([
                ...$formValues,
                'slug' => $slug,
            ]);

            return back()->with('page_success','Vaga enviada com sucesso. Agora é só aguardar pela aprovação');
        } catch (\Exception $e) {
            return back()->withErrors(['page_error' => 'Não foi possível cadastrar uma vaga de trabalho',])->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        //
    }
}
