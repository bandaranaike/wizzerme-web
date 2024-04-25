<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;

class VacancyController extends Controller
{
    const SEARCH_RESULTS_PER_PAGE = 20;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function search($key = null)
    {
        $vacancies = Vacancy::when($key, function (Builder $builder, $key) {
            $builder->where('title', 'LIKE', $key);
        })
            ->select(['public_id', 'title', 'original_url', 'expires_at', 'company_id'])
            ->paginate(self::SEARCH_RESULTS_PER_PAGE);
        return new JsonResponse($vacancies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVacancyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($uuid): JsonResponse
    {
        $vacancy = Vacancy::with('company')->where('public_id', $uuid)->first();
        return new JsonResponse($vacancy);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacancyRequest $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }
}
