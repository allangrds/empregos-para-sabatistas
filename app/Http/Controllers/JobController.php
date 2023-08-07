<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Category;
use App\Models\State;
use App\Models\City;
use App\Models\Job;

class JobController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $formValues = $request->all();
    $jobName = $formValues && Arr::exists($formValues, 'job_name') ? $formValues['job_name'] : "";
    $category = $formValues && Arr::exists($formValues, 'category_id') ? $formValues['category_id'] : "";
    $contractType = $formValues && Arr::exists($formValues, 'contract_type') ? $formValues['contract_type'] : "";
    $allocation = $formValues && Arr::exists($formValues, 'allocation') ? $formValues['allocation'] : "";
    $stateId = $formValues && Arr::exists($formValues, 'state_id') ? $formValues['state_id'] : "";
    $city = $formValues && Arr::exists($formValues, 'city') ? $formValues['city'] : "";
    $city_id = "";

    if ($city) {
      if ($stateId) {
        $city = City::where('name', $city)
          ->where('state_id', 'like', '%' . $stateId)
          ->first();

        $city_id = $city ? $city->id : "";
      } else {
        $city = City::where('name', $city)
          ->first();

        $city_id = $city ? $city->id : "";
      }
    }

    $jobs = Job::where('active', true)
      ->where('job_name', 'like', '%' . $jobName . '%')
      ->where('category_id', 'like', '%' . $category . '%')
      ->where('contract_type', 'like', '%' . $contractType . '%')
      ->where('allocation', 'like', '%' . $allocation . '%')
      ->where('state_id', 'like', '%' . $stateId)
      ->where('city_id', 'like', '%' . $city_id)
      ->orderBy('created_at', 'desc')
      ->paginate(6);
    $categories = Category::orderBy('text')->get();
    $states = State::orderBy('name')->get();
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
      array(
        'text' => 'Temporário',
        'name' => 'temporary'
      ),
      array(
        'text' => 'Estágio',
        'name' => 'internship'
      ),
    );
    $allocations = array(
      array(
        'text' => 'Presencial',
        'name' => 'presential'
      ),
      array(
        'text' => 'Híbrido',
        'name' => 'hybrid'
      ),
      array(
        'text' => 'Remoto(100% em casa)',
        'name' => 'remote'
      ),
    );

    return view('jobs', [
      'jobs' => $jobs,
      'contractTypes' => $contractTypes,
      'allocations' => $allocations,
      'categories' => $categories->toArray(),
      'states' => $states->toArray(),
    ]);
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
      array(
        'text' => 'Temporário',
        'name' => 'temporary'
      ),
      array(
        'text' => 'Estágio',
        'name' => 'internship'
      ),
    );
    $allocations = array(
      array(
        'text' => 'Presencial',
        'name' => 'presential'
      ),
      array(
        'text' => 'Híbrido',
        'name' => 'hybrid'
      ),
      array(
        'text' => 'Remoto(100% em casa)',
        'name' => 'remote'
      ),
    );

    return view('publish_jobs', [
      'categories' => $categories->toArray(),
      'contractTypes' => $contractTypes,
      'allocations' => $allocations,
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

    try {
      $choosedState = State::where('uf', $formValues['state'])->get()->first();

      if (!$choosedState->uf) {
        throw new Exception("O estado não existe");
      }

      $choosedCity = City::where('state_id', $choosedState->id)
        ->where('name', $formValues['city'])
        ->get()
        ->first();

      if (!$choosedCity->name) {
        throw new Exception("A cidade não existe");
      }

      $jobName = strtolower(str_replace(array(' ', '/', '&'), '-', $formValues['job_name']));
      $companyName = strtolower(str_replace(array(' ', '/', '&'), '-', $formValues['company_name']));
      $uuid = substr(Str::uuid(), 0, 17);
      $slug = "$jobName-$companyName-$uuid";
      $description = preg_replace("/\r\n|\r|\n/", '<br/>', $formValues['description']);
      $requirements = preg_replace("/\r\n|\r|\n/", '<br/>', $formValues['requirements']);
      $differential = preg_replace("/\r\n|\r|\n/", '<br/>', $formValues['differential']);
      $benefits = preg_replace("/\r\n|\r|\n/", '<br/>', $formValues['benefits']);
      $responsabilities = preg_replace("/\r\n|\r|\n/", '<br/>', $formValues['responsabilities']);
      $howToApply =
        $formValues['how_to_apply_telephone']
        ? "Ligue ou mande mensagem para " . $formValues['how_to_apply_telephone']
        : ($formValues['how_to_apply_email']
          ? "Envie um e-mail para " . $formValues['how_to_apply_email']
          : "Acesse o site " . $formValues['how_to_apply_site']);
      $howToApplyTelephone = $formValues['how_to_apply_telephone']
        ? "Ligue ou mande mensagem para " . $formValues['how_to_apply_telephone']
        : null;
      $howToApplyEmail = $formValues['how_to_apply_email']
        ? "Envie um e-mail para " . $formValues['how_to_apply_email']
        : null;
      $howToApplySite = $formValues['how_to_apply_site']
        ? "Acesse o site " . $formValues['how_to_apply_site']
        : null;

      Job::create([
        ...$formValues,
        'benefits' => $benefits,
        'description' => $description,
        'requirements' => $requirements,
        'differential' => $differential,
        'responsabilities' => $responsabilities,
        'slug' => $slug,
        'state_id' => $choosedState->id,
        'city_id' => $choosedCity->id,
        'how_to_apply' => $howToApply,
        'how_to_apply_telephone' => $howToApplyTelephone,
        'how_to_apply_email' => $howToApplyEmail,
        'how_to_apply_site' => $howToApplySite,
      ]);

      return back()->with('page_success', 'Vaga enviada com sucesso. Agora é só aguardar pela aprovação');
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
  public function show(Request $request, $slug)
  {
    $job = Job::where('active', true)
      ->where('slug', $slug)
      ->first();

    if (!$job) {
      return abort(404);
    }

    $state = State::where('id', $job['state_id'])
      ->first();

    $city = City::where('state_id', $job['state_id'])
      ->first();

    return view('jobs_details', [
      'job' => $job,
      'state' => $state,
      'city' => $city,
    ]);
  }
}
